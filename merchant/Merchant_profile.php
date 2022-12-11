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
$myemail= $_SESSION["emailID"];
$sql="SELECT * FROM merchant WHERE merchant_email='$myemail'";
$sql3="SELECT count(DISTINCT(product_id)) as numberof FROM merchant natural join product where merchant_email='$myemail'";
$sql4="SELECT sum(pi.product_price *.05) as Commission FROM product as pi JOIN
(SELECT product_id as p FROM delivery_details WHERE merchant_id=
(SELECT merchant_id FROM merchant
WHERE merchant_email='$myemail'))as N
on N.p=pi.product_id";
$result2=mysqli_query($conn,$sql3);
$numofp=mysqli_fetch_assoc($result2);
$result3=mysqli_query($conn,$sql4);
$commis=mysqli_fetch_assoc($result3);

 $result=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0) {
   while ($row = mysqli_fetch_assoc($result)) {

         echo '<tr>
                  <b>User ID:  </b><th>'.$row['merchant_id'].'</th><br>
                 <b>User Name:  </b><td>'.$row['merchant_firstName'].'</td><br>
                 <b>Email ID:  </b><td>'.$row['merchant_email'].'</td><br>
                 <b>Phone Number:  +880</b><b>'.$row['merchant_phone_number'].'</b><br>
                 <b>Address:  </b><td>'.$row['merchant_address'].'</td><br>
                 <b>Total Products enlisted:  </b><b>'.$numofp['numberof'].'</b><br>
                 <b>Commission of Devaly:  </b><b>'.$commis['Commission'].'</b><br>
             </tr>';

       }

   }

   ?>
