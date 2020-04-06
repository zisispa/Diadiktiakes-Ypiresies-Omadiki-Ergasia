<?php

function login()
{

    global $connection;
    $name_error = '';
    $pass_error = '';

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            $name_error = 'Please insert your username';
        }

        if(empty($password)){
            $pass_error = 'Please insert your password';
        }

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM users WHERE username = '{$username}' and password = '{$password}' ";
        $select_user_query = mysqli_query($connection, $query);

        if (!$select_user_query) {
            die("Query failed" . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_array($select_user_query)) {
            $db_user_id  = $row['user_id'];
            $db_username = $row['username'];
            $db_password = $row['password'];
            $db_email    = $row['email'];
            $db_address  = $row['address'];
        }



       if ($username == $db_username && $password == $db_password) {

            $_SESSION['db_user_id']     = $db_user_id;
            $_SESSION['db_username']    = $db_username;
            $_SESSION['db_password']    = $db_password;
            $_SESSION['db_email']       = $db_email;
            $_SESSION['db_address']     = $db_address;
            header("Location: index.php");

        } else {

            echo '<script>alert("Ξαναπροσπάθησε έβαλες λάθος username ή password");</script>';
        }
    }
}

function create_account()
{

    global $connection;

    if (isset($_POST['create'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];

        if (!empty($username) && !empty($password) && !empty($email)) {
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            $email    = mysqli_real_escape_string($connection, $email);

            $query = "SELECT * FROM users";
            //$query_randSalt = mysqli_query($connection, $query);

            // if (!$query_randSalt) {
            //     die("Failed" . mysqli_error($connection));
            // }

            // $row = mysqli_fetch_array($query_randSalt);
            // $salt = $row['randSalt'];

            $query = "INSERT INTO users(username,password,email) ";
            $query .= "VALUES ('{$username}','{$password}','{$email}') ";
            $register_user_query = mysqli_query($connection, $query);
            if (!$register_user_query) {
                die("Failed" . mysqli_error($connection));
            }

            header("Location: login.php");
            
        } else {

            $message = "Fields cannot be empty";
        }
    } else {
        $message = "";
    }
}

function update(){

    global $connection;

    if(isset($_POST['update'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $address  = $_POST['address'];

        $query = "UPDATE users SET username='{$username}', password='{$password}',email='{$email}',address='{$address}' WHERE user_id='{$_SESSION['db_user_id']}' ";
        $select_user_query = mysqli_query($connection, $query);

        if (!$select_user_query) {
            die("Query failed" . mysqli_error($connection));
        }

        if($select_user_query){
            echo '<script type="text/javascript">alert("Data Updated") </script>';
            header('Location: login.php');
        }else{
            
            echo '<script type="text/javascript">alert("Data Not Updated") </script>';
        }
    }
}

function select_address(){

        global $connection;

        $query = "SELECT DISTINCT supermarkets_address FROM supermarkets";
        $select_address_query = mysqli_query($connection, $query);

        if (!$select_address_query) {
            die("Query failed" . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_array($select_address_query)) {

            echo "<option value=" . $row['supermarkets_address'] . "> ". $row['supermarkets_address'] . "</option>";
        }

}

function select_products(){

        global $connection;

        $query = "SELECT DISTINCT product_name FROM products";
        $select_products_query = mysqli_query($connection, $query);

        if (!$select_products_query) {
            die("Query failed" . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_array($select_products_query)) {

            echo "<option value=" . $row['product_name'] . ">". $row['product_name'] . "</option>";
        }

}
