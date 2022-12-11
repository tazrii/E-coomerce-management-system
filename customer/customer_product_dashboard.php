<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Devaly</label>
      <ul>
        <li><a href="#">Buy Product</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><p><?php
                      session_start();
                      echo "Welcome " .$_SESSION["emailID"];
               ?>
            </p></li>
      </ul>
    </nav>
  </body>
</html>
<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "e_commerce";
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection failed! : ".mysqli_connect_error());
}

$email = $_SESSION["emailID"];

$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {

        echo '<tr>
                <div class="card">
                <img src="../uploads/'.$row['product_picture'].'" height="200" width="100%"/>
                <h1>'.$row['product_name'].'</h1>
                <p class="price">BDT'.$row['product_price'].'</p>
                <p>'.$row['description'].'</p>
                <p><a href="customer_checkout.php?id='.$row['product_id'].'" target="_blank"><button>View Product</button></a></p>
                </div>
                </tr>';

      }

  }


 ?>
