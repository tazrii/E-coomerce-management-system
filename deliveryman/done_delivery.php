<?php
session_start();
require '../connections/connection.php';

$consignment_id = $_GET['id'];

$mobnum = $_SESSION["mobnum"];

$sql = "SELECT deliveryman_id
        FROM deliveryman
        WHERE deliveryman_phone_number ='$mobnum'";
$get_data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($get_data);
$deliveryman_id = max($row);

          $sql2="UPDATE delivery_details
          SET status_id = 'd'
          WHERE consignment_id = $consignment_id AND deliveryman_id = '$deliveryman_id'";

          $is_inserted = mysqli_query($conn, $sql2);
          print_r($is_inserted);
                if($is_inserted){
                  echo "<script>
                        alert('Thank you for your delivery completion!')
                        window.location.href= 'deliveryman_dashboard.php'
                        </script>";
                        exit;
                }
                else{
                  echo "<script>
                        alert('Sorry! Try again!')
                        window.location.href= 'deliveryman_dashboard.php'
                        </script>";
                        exit;
                }

         ?>
