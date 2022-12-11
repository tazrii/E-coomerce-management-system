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

  $customer_email = $_SESSION["emailID"];
  $sql = "SELECT customer_id
          FROM customer
          WHERE customer_email ='$customer_email'";
  $get_data = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($get_data);
  $customer_id = max($row);


  $sql2= "SELECT merchant_id from product where product_id='$product_id'";
  $get_data2 = mysqli_query($conn, $sql2);
  $row2=mysqli_fetch_assoc($get_data2);
  $merchant_id = max($row2);


  $sql3= "SELECT location_id
          FROM customer
          WHERE customer_id = '$customer_id'";
  $get_data3 = mysqli_query($conn, $sql3);
  $row3 = mysqli_fetch_assoc($get_data3);
  $location_id= max($row3);

  $sql4= "SELECT payment_id
          FROM customer
          WHERE customer_id = '$customer_id'";
  $get_data4 = mysqli_query($conn, $sql4);
  $row4 = mysqli_fetch_assoc($get_data4);
  $payment_id= max($row4);

  $sql5= "SELECT manager_id
          FROM manager
          WHERE location_id = '$location_id'";
  $get_data5 = mysqli_query($conn, $sql5);
  $row5 = mysqli_fetch_assoc($get_data5);
  $manager_id= max($row5);

  $sql6="INSERT INTO delivery_details(estimated_delivery, product_id, customer_id, merchant_id, manager_id, location_id, payment_id)
         VALUES(TIMESTAMPADD(DAY, 4, current_timestamp()), '$product_id', '$customer_id', '$merchant_id', '$manager_id', '$location_id', '$payment_id')";

  $is_inserted = mysqli_query($conn, $sql6);
print_r($is_inserted);
        if($is_inserted){
          echo "<script>
                alert('Your order has been placed!')
                window.location.href= 'customer_dashboard.php'
                </script>";
                exit;
        }
        else{
          echo "<script>
                alert('Sorry! Try again!')
                window.location.href= 'customer_dashboard.php'
                </script>";
                exit;
        }
}
 ?>
