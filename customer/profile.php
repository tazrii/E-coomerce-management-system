<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
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
        <li><a class="active" href="customer_product_dashboard.php">Buy Product</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><p><?php
                session_start();
                echo "<p style='color:white;'>" .$_SESSION["emailID"];
               ?>
           </p></li>
      </ul>
    </nav>
    <div class="container">
        <div class="child">


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
          FROM customer c
          JOIN paymentmethod pm
          ON c.payment_id = pm.payment_id
          JOIN pickup_point pp
          ON c.location_id = pp.location_id
          AND c.customer_email ='$useremail'";

     $result=mysqli_query($conn,$sql);
     if (mysqli_num_rows($result)>0) {
       while ($row = mysqli_fetch_assoc($result)) {

             echo'<tr>
                     <b>Name:  </b><td>'.$row['customer_firstName'].'</td> <td>'.$row['customer_lastName'].'</td><br>
                     <b>Email Address:  </b><td>'.$row['customer_email'].'</td><br>
                     <b>Phone Number:  +880</b><b>'.$row['customer_phone_number'].'</b><br>
                     <b>Address:  </b><td>'.$row['customer_address'].'</td><br>
                     <b>Payment Method:  </b><td>'.$row['NAME'].'</td><br>
                     <b>Pickup Location:  </b><td>'.$row['location_name'].'</td><br>
                </tr>';

           }
       }
    ?>
  </div>
</div>
  </body>
</html>
