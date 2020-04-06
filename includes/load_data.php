<?php include './db.php' ?>
<?php session_start(); ?>
<?php 

global $connection;
$output = '';
 
if(isset($_POST["product_name"], $_POST["supermarket_address"])){  
     if($_POST["product_name"] != '' || $_POST["supermarket_address"] != ''){  
          
          $sql = "SELECT DISTINCT P.supermarket_id, S.supermarkets_name,S.supermarkets_address,S.supermarket_image,P.product_name,P.product_value,S.livePerson   
          FROM supermarkets as S , products as P            
          WHERE S.supermarkets_id=P.supermarket_id and P.product_name= '" . $_POST["product_name"] . "' and S.supermarkets_address= '". $_POST["supermarket_address"] ."' ";
          
     }else{  
          echo "Διάλεξε ένα προιόν";
            
     }

     $result = mysqli_query($connection, $sql); 
     if (!$result) {
            die("Query failed" . mysqli_error($connection));
     } 
        
     while($row = mysqli_fetch_array($result)){

           $output .= '
          <div class="col">
               <div class="card mb-2 card_id" style="width: 18rem;" >
                    <!-- Img -->
                    <div class="view view-cascade overlay" width="10">
                         <img class="card-img-top" height="200" width="42" src="' . $row["supermarket_image"] . '"
                         alt="Card image cap">
                         <a><div class="mask rgba-white-slight"></div></a>
                    </div>
                    <!-- Body -->
                    <div class="card-body card-body-cascade">
                         <h5 class="card-title font-weight-normal text-left text-primary"><i class="fas fa-store"></i> ' . $row["supermarkets_name"] . '</h5>
                         <p class="card-title font-weight-normal mt-2 ml-1  text-left"><span style="color:Dodgerblue;"><i class="fas fa-map-marker-alt"></i></span> ' . $row["supermarkets_address"] . '</p>  
                         <div id="' . $row["supermarket_id"] . '">
                         
                         </div>   
                         <p class="card-title font-weight-normal mt-3  text-left ml-1"><span style="color:red; " ><i class="fas fa-bell"></i></span> ' . $row["livePerson"] . ' επισκέπτες</p>
                         <button class="btn btn-primary" onclick="checkForPeople(' . $row["livePerson"] . ')">Θα πάω</button>
                    </div>    
                    <!-- Footer -->
                    <div class="card-footer text-muted text-left">
                         Ανοιχτό έως 9:00 μ.μ.
                    </div>
               </div>
               <script>products(' . $row["supermarket_id"] . ');</script>
          </div>
         ';
     }
 
     echo $output;  
} 
?>


<script>
function products(pro) {
          var product_id = pro;
          $("#"+pro).load("includes/load_products.php", function() {

               $.ajax({
                    url: "includes/load_products.php",
                    method: "POST",
                    data: {
                         product_id: product_id
                    },
                    success: function(data) {
                         $("#"+pro).html(data);
                    }
               });
          });

     }

     function checkForPeople(check){
          if(check > 50){
               var message = `
               <div class="alert alert-danger">
                    <strong>Opps!</strong> το κατάστημα που επέλεξες φαίνεται να είναι γεμάτο, για την πιο γρήγορη εξυπηρέτηση σου μπορείς να επισκεφτείς κάποιο άλλο κατάστημα!
                </div>`;
               document.getElementById('alerted').innerHTML = message;
                setTimeout(() => {
                    $('#alerted').remove();
               }, 6000);
          }
     }
</script>