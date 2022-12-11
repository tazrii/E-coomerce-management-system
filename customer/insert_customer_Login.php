<?php

session_start();

require '../connections/connection.php';

if(isset($_POST['email']) && isset($_POST['psw'])){
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $sql="SELECT *
        FROM customer
        WHERE customer_email = '$email'
        AND customer_password = '$psw'
        LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
    $_SESSION['emailID']=$email;
    echo "<script>
          alert('Hello! Welcome to Devaly.')
          window.location.href= 'customer_dashboard.php'
          </script>";
          exit;
  }else{
    echo "<script>
          alert('Oops! Your email or password is wrong! Try again please!')
          window.location.href= 'customer_LoginForm.php'
          </script>";
          exit;
  }
}

?>
