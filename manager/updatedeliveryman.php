<?php
session_start();
require '../connections/connection.php';

$consignment_id = $_SESSION['consignment_id'];

$manager_email = $_SESSION["emailID"];

$sql = "SELECT manager_id
        FROM manager
        WHERE manager_email ='$manager_email'";
$get_data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($get_data);
$manager_id = max($row);

$deliveryman_id = $_GET['id'];



          $sql6="UPDATE delivery_details
          SET status_id = 'p', deliveryman_id = $deliveryman_id
          WHERE consignment_id = $consignment_id AND manager_id = '$manager_id'";

          $is_inserted = mysqli_query($conn, $sql6);
          print_r($is_inserted);
                if($is_inserted){
                  echo "<script>
                        alert('Deliveryman has been assigned')
                        window.location.href= 'manager_dashboard.php'
                        </script>";
                        exit;
                }
                else{
                  echo "<script>
                        alert('Sorry! Try again!')
                        window.location.href= 'updatedeliveryman.php'
                        </script>";
                        exit;
                }

         ?>
