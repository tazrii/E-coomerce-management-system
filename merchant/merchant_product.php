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
if(isset($_FILES['img']) &&isset($_POST['submit']) &&isset($_POST['p_name']) && isset($_POST['category']) && isset($_POST['product_price']) && isset($_POST['product_description'])){

  $email = $_SESSION["emailID"];
  $sqll ="SELECT merchant_id FROM merchant WHERE merchant_email='$email'";
  $merchant=mysqli_query($conn,$sqll);
  $row = mysqli_fetch_array($merchant);
  $id= max($row);
  $img=$_FILES['img']['name'];
  $tmp_name=$_FILES['img']['tmp_name'];
  $error=$_FILES['img']['error'];
  $p_name = $_POST['p_name'];
  $category=$_POST['category'];
  $product_price = $_POST['product_price'];
  $product_description = $_POST['product_description'];
  $sql5="create trigger add_commision
  before insert
  on product
  FOR EACH ROW
  SET new.product_price=new.product_price*1.05";
  mysqli_query($conn,$sql5);
  $img_ex=pathinfo($img,PATHINFO_EXTENSION);
  $img_ex_lc=strtolower($img_ex);
  $allowed_exs= array("jpg","jpeg","png");
  if (in_array($img_ex_lc, $allowed_exs)) {
				$img_upload_path = "../uploads/".$img;
				move_uploaded_file($tmp_name, $img_upload_path);
    $sql="INSERT INTO product(product_picture,product_name,category, product_price, description, merchant_id)
          values('$img','$p_name','$category','$product_price', '$product_description','$id')";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
      echo "<script>
             alert('Enlist Successful!')
             window.location.href= 'merchant_dashboard.php'
            </script>";

    }else {
      echo "Failed";
    }


  }else {
    echo "<script>
           alert('You have uploaded wrong file type!')
           window.location.href= 'Merchant_product_enlist.php'
          </script>";
  }

}
