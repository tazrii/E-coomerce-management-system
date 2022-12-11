<?php
session_start();
require '../connections/connection.php';
if(
   isset($_POST['pickup_point']) &&
   isset($_POST['payment_method']) &&
   isset($_POST['first_name']) &&
   isset($_POST['last_name']) &&
   isset($_POST['email']) &&
   isset($_POST['phone_number'])&&
   isset($_POST['address']) &&
   isset($_POST['password'])
   )
   {

     $pickup_point = $_POST['pickup_point'];
     $payment_method = $_POST['payment_method'];
     $firstName = $_POST['first_name'];
     $lastName = $_POST['last_name'];
     $email = $_POST['email'];
     $phone_number = $_POST['phone_number'];
     $address = $_POST['address'];
     $password = $_POST['password'];

     $sql1 = "SELECT customer_email
              FROM customer
              WHERE customer_email = '$email'";

     $result = mysqli_query($conn, $sql1);

     if (mysqli_num_rows($result)>0) {
      echo "<script>
             alert('Your account already exists!')
             window.location.href= 'customer_LoginForm.php'
            </script>";
     }

     else {
     $sql2 = "INSERT INTO customer(location_id, payment_id, customer_firstName, customer_lastName, customer_email, customer_phone_number, customer_address, customer_password)
             VALUES('$pickup_point', '$payment_method', '$firstName', '$lastName', '$email', '$phone_number', '$address', '$password')";

        $is_inserted = mysqli_query($conn, $sql2);

        if($is_inserted){
          $_SESSION['emailID']=$email;
          echo "<script>
                alert('Hooraah! You have a new account!')
                window.location.href= 'customer_dashboard.php'
                </script>";
                exit;
        }
        else{
          echo "<script>
                alert('Sorry! Try again!')
                window.location.href= 'customer_SignupForm.php'
                </script>";
                exit;
        }
    }

  }
else{
  echo "404 not found";
}

 ?>
