<?php
session_start();
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "e_commerce";

$conn= mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection Failed!: ".mysqli_connect_error());
}
else {
  $product_id = $_GET['id'];
  $sql = "SELECT p.product_id AS product_id, p.product_picture AS product_picture, p.product_name AS product_name, p.category AS category, p.product_price AS product_price, p.description AS description, m.merchant_id AS merchant_id,
          m.merchant_firstName AS merchant_firstName, m.merchant_lastName AS merchant_lastName, m.merchant_phone_number AS merchant_phone_number, m.merchant_email AS merchant_email
          FROM product p
          JOIN merchant m
          ON p.merchant_id = m.merchant_id
          AND product_id ='$product_id'";

  $get_data = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($get_data);
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="customer_checkout.css">
   </head>
   <body>
      <div class="">
              <p> <?php echo '<tr>
                  <img src="../uploads/'.$row['product_picture'].'" height="1000" width="1400"/>
                  </tr> <br>';
                ?>
              </p>
     </div>
     <div class="">
                <p>
                <h1><?php print_r ($row["product_name"]);?></h1><br>
                <b>Price: </b>BDT <?php  print_r ($row["product_price"]);?><br>
                <b>Category:</b> <?php  print_r ($row["category"]);?><br>
                <b>Description:</b> <?php  print_r ($row["description"]);?><br>
                <b>Product Enlisted By:</b> <?php  print_r ($row["merchant_firstName"]);?>
                <?php  print_r ($row["merchant_lastName"]);?><br>
                <b>Merchant Contact: </b> +880<?php  print_r ($row["merchant_phone_number"]);?><br>
                <b>Merchant Email:</b> <?php  print_r ($row["merchant_email"]);?><br>

        </p>
        </div>
        <a href="customer_purchase.php?id=<?php echo $row['product_id']?>"><button type="submit" name="buyprobtn">Buy this product</button></a>

   </body>
 </html>
