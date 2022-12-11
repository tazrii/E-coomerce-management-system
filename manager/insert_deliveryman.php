<?php
session_start();
require '../connections/connection.php';
if(
   isset($_POST['first_name']) &&
   isset($_POST['last_name']) &&
   isset($_POST['phone_number'])&&
   isset($_POST['address']) &&
   isset($_POST['password'])
   )
   { $useremail= $_SESSION["emailID"];
     $sql = "SELECT manager_id
             FROM manager
             WHERE manager_email = '$useremail'";
     $get_data = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($get_data);
     $manager_id = max($row);
     print_r($manager_id);

     $firstName = $_POST['first_name'];
     $lastName = $_POST['last_name'];
     $phone_number = $_POST['phone_number'];
     $address = $_POST['address'];
     $password = $_POST['password'];

     $sql2 = "SELECT location_id
             FROM manager
             WHERE manager_email ='$useremail'";
     $get_data2 = mysqli_query($conn, $sql2);
     $row2 = mysqli_fetch_assoc($get_data2);
     $location_id = max($row2);

     $sql3 = "SELECT deliveryman_phone_number
              FROM deliveryman
              WHERE deliveryman_phone_number = '$phone_number'";

     $result = mysqli_query($conn, $sql3);

     if (mysqli_num_rows($result)>0) {
      echo "<script>
             alert('This account already exists!')
             window.location.href= 'recruit_deliveryman.php'
            </script>";
     }


     else {
     $sql4 = "INSERT INTO deliveryman(manager_id, location_id, deliveryman_firstName, deliveryman_lastName, deliveryman_phone_number, deliveryman_address, deliveryman_password, dmstatus_id)
             VALUES('$manager_id', '$location_id', '$firstName', '$lastName', '$phone_number', '$address', '$password', 'Y')";

        $is_inserted = mysqli_query($conn, $sql4);

        if($is_inserted){

          echo "<script>
                alert('You have a new deliveryman!')
                window.location.href= 'manager_dashboard.php'
                </script>";
                exit;
        }
        else{
          echo "<script>
                alert('Sorry! Try again!')
                window.location.href= 'recruit_deliveryman.php'
                </script>";
                exit;
        }
    }

  }
else{
  echo "404 not found";
}

 ?>
