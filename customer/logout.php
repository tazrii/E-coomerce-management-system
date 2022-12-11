
<?php
session_start();
unset($_SESSION['emailID']);
header("location:customer_LoginForm.php");
 ?>
