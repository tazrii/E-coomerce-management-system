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
if(isset($_POST['email']) && isset($_POST['psw'])) {

		$email = $_POST['email'];
		$psw = $_POST['psw'];

		$sql="SELECT * FROM merchant WHERE merchant_email='$email' and  merchant_password = '$psw'
    limit 1";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['emailID']=$email;
        header("Location:merchant_dashboard.php");

    }else {
      echo "Login failed";
    }
}
?>
