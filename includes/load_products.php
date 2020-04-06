<?php include 'db.php' ?>
<?php session_start(); ?>
<?php 

     global $connection;
     $output = '';
     $output = '
          <table class="table table-striped" >
               <thead id="table_head">
                    <tr>
                         <th scope="col">Προϊόν</th>
                         <th scope="col">Ποσότητα</th>
                    </tr>
               </thead>
               
               
     ';

     $sql = "SELECT P.product_name,P.product_value
             FROM products as P            
             WHERE P.supermarket_id= '" . $_POST['product_id'] . "' ";
          
     $result = mysqli_query($connection, $sql); 

     if (!$result) {
            die("Query failed" . mysqli_error($connection));
     } 
     
     while($row = mysqli_fetch_array($result)){

          $output .= '
          
          <tr>                               
               <td>'. $row["product_name"] .'</td>
               <td>'. $row["product_value"] .' κ.</td>
          </tr>
            
          ';
     }
     $output .='</table>';
     echo $output;


?>