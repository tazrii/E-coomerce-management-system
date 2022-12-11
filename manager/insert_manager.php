<?php

session_start();

require '../connections/connection.php';

if(isset($_POST['email']) && isset($_POST['psw'])){
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $sql="SELECT *
        FROM manager
        WHERE manager_email = '$email'
        AND manager_password = '$psw'
        LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
    $_SESSION['emailID']=$email;
    echo "<script>
          alert('Hello! Welcome to Devaly.')
          window.location.href= 'manager_dashboard.php'
          </script>";
          exit;
  }else{
    echo "<script>
          alert('Oops! Wrong Password')
          window.location.href= 'login_manager.php'
          </script>";
          exit;
  }
}

?>
