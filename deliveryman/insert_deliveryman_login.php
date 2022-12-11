<?php

session_start();

require '../connections/connection.php';

if(isset($_POST['mobnum']) && isset($_POST['psw'])){
  $mobnum = $_POST['mobnum'];
  $psw = $_POST['psw'];
  $sql="SELECT *
        FROM deliveryman
        WHERE deliveryman_phone_number = '$mobnum'
        AND deliveryman_password = '$psw'
        LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
    $_SESSION['mobnum']=$mobnum;
    echo "<script>
          alert('Hello! Welcome to Devaly.')
          window.location.href= 'deliveryman_dashboard.php'
          </script>";
          exit;
  }else{
    echo "<script>
          alert('Oops! Your email or password is wrong! Try again please!')
          window.location.href= 'deliveryman_LoginForm.php'
          </script>";
          exit;
  }
}

?>
