<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Merchant Dashboard</title>
    <link rel="stylesheet" href="merchant_dashboard_style.css">
  </head>
  <body>
    <div class="menu-bar">
      <ul>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="merchant_logout.php">Logout</a></li>
        <li><a href="Merchant_profile.php">Profile</a></li>
        <li><a href= "Merchant_product_enlist.php">Enlist Product</a></li>

      </ul>
    </div>

  </body>
</html>
<?php
session_start();
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "e_commerce";
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection failed! : ".mysqli_connect_error());
}

$email = $_SESSION["emailID"];
$sqll ="SELECT merchant_id FROM merchant WHERE merchant_email='$email'";
$merchant=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($merchant);
$id= max($row);

$sql="SELECT * FROM product WHERE merchant_id='$id'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {

        echo '<tr>
                <a href="../uploads/'.$row['product_picture'].'"><img src="../uploads/'.$row['product_picture'].'" height="200" width="200"/></a>
                <b><p style="color:	#000000";><mark>Product Name: </mark> </b><mark><td>'.$row['product_name'].'</td></mark><br>
                <b><p style="color:	#000000";><mark>Product Price: </mark> </b><mark><td>'.$row['product_price'].'</td></mark><br>
                <b><p style="color:	#000000";><mark>Product Category: </mark> </b><mark><td>'.$row['category'].'</td></mark><br>
              
                </tr>';

      }

  }


 ?>
