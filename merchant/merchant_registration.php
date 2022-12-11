<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "e_commerce";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection failed! : ".mysqli_connect_error());
}
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['Address'])&& isset($_POST['psw'])) {

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$Address = $_POST['Address'];
		$psw = $_POST['psw'];

    $sql1 = "SELECT merchant_email
              FROM merchant
              WHERE merchant_email = '$email'";

     $result = mysqli_query($conn, $sql1);

     if (mysqli_num_rows($result)>0) {
      echo "<script>
             alert('Your account already exists!')
             window.location.href= 'merchant_SignupForm.php'
            </script>";
     }else {
       $sql="INSERT INTO merchant(merchant_firstName,merchant_lastName, merchant_email, merchant_password, merchant_phone_number, merchant_address)
             values('$fname','$lname', '$email', '$psw','$phone','$Address')";

       $is_inserted =	mysqli_query($conn,$sql);

       if($is_inserted){
         echo "<script>
                alert('Please  login now!')
                window.location.href= 'merchant_LoginForm.php'
               </script>";

       }else {
         echo "Failed!";
       }
     }


}else {
	echo "404 errors";
}



?>
