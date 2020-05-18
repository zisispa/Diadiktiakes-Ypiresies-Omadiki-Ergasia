<?php session_start(); ?>
<?php include 'includes/db.php' ?>
<?php include "includes/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
        <script src="https://kit.fontawesome.com/ef409d872d.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
    <style>
        .vert {
                border-left: 1px solid black;
                height: 550px;
            }
    </style>
</head>
<body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">SearchAid</a><button
                class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <?php 
                    
                        if(isset($_SESSION['db_user_id'])){
                            echo '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                                    $_SESSION["db_username"] .' </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./user_settings.php">Settings User</a>
                                    <a class="dropdown-item" href="./includes/logout.php">Log out</a>
                                </div>
                            </li>
                            ';
                        }else {
                            echo '<li class="nav-item mr-3"><a class="nav-link js-scroll-trigger btn btn-primary" href="./login.php">Log in</a></li>';
                            echo '<li class="nav-item"><a class="nav-link js-scroll-trigger btn btn-dark" href="./registration.php">Sign up</a></li>';

                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php update(); ?>

    <!-- MAIN Section-->
    <header class="masthead">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mx-auto" id="card-style" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                            <div class="text-center">
                                                <h4 class="">Person Settings</h4>
                                            </div>
                                    <form method="post">
                                            <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_SESSION['db_username']; ?>" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" id="password" value="<?php echo $_SESSION['db_password']; ?>" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['db_email']; ?>" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <select id="address" name="address" class="form-control">
                                                        <?php  select_address(); ?>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">

                                                <?php  if($_SESSION['advertising'] == 'yes'){
                                                    echo "<input type='checkbox' class='custom-control-input' id='customCheck1' value='yes' name='advertising_check' checked>";
                                                }else {
                                                    echo "<input type='checkbox' class='custom-control-input' id='customCheck1' value='yes' name='advertising_check'>";
                                                } ?>
                                                    <!-- <input type="checkbox" class="custom-control-input" id="customCheck1" value="yes" name="advertising_check"> -->
                                                    <label class="custom-control-label" for="customCheck1">Ειδοποίησης για προσφορές προϊόντων από τα κοντινά καταστήματα</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" name="update">Submit</button>
                                            </div>
                                            <?php delete(); ?>
                                            <div class="form-group">
                                                <button class="btn btn-danger" name="delete">Delete your account</button>
                                            </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </header>

    <!--Bootstrap core JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!--Bootstrap core JS-->
    <script src="./js/index.js"></script>
</body>
</html>