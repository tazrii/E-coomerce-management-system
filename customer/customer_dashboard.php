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
        <li><a href="customer_product_dashboard.php">Buy Product</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><p><?php
                      session_start();
                      echo "Welcome " .$_SESSION["emailID"];
               ?>
            </p></li>
      </ul>
    </nav>
    <table id="customers">
  <tr>
    <th>Consignment ID</th>
    <th>Product</th>
    <th>Confirmation Date</th>
    <th>Delivered Date</th>
    <th>Delivery Status</th>
    <th>Payment</th>
    <th>Location</th>
    <th>Deliveryman</th>
    <th>Delivery Contact</th>
  </tr>
  <?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "e_commerce";

  $conn= mysqli_connect($db_server,$db_user,$db_pass,$db_name);

  if(!$conn){
    die("Connection Failed!: ".mysqi_connect_error());
  }
  else{

  }

  $useremail= $_SESSION["emailID"];
  $sql="SELECT *
        FROM customer_dashboard
        WHERE customer_email ='$useremail'";

   $result=mysqli_query($conn,$sql);
   if (mysqli_num_rows($result)>0) {
     while ($row = mysqli_fetch_assoc($result)) {

           echo'<tr>
                   <td>'.$row['consignment_id'].'</td><br>
                   <td>'.$row['product_name'].'</td><br>
                   <td>'.$row['confirmation_date'].'</td><br>
                   <td>'.$row['estimated_delivery'].'</td><br>
                   <td>'.$row['status_name'].'</td><br>
                   <td>'.$row['NAME'].'</td><br>
                   <td>'.$row['location_name'].'</td><br>
                   <td>'.$row['deliveryman_firstName'].' '.$row['deliveryman_lastName'].'</td><br>
                   <td>+880'.$row['deliveryman_phone_number'].'</td>
              </tr>';

         }
     }
  ?>
</table>
  </body>
</html>
