<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../customer/dashboard.css">
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
        <li><a href="deliveryman_profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><p><?php
                      session_start();
                      echo "Welcome " .$_SESSION["mobnum"];
               ?>
            </p></li>
      </ul>
    </nav>
    <table id="customers">
  <tr>
    <th>Order number</th>
    <th>Price to collect</th>
    <th>Confirmation Date</th>
    <th>Delivered Date</th>
    <th>Delivery Status</th>
    <th>Customer</th>
    <th>Customer Contact</th>
    <th>Customer Address</th>
    <th>Payment</th>

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

  $mobnum= $_SESSION["mobnum"];
  $sql="SELECT *
        FROM deliveryman_dashboard
        WHERE deliveryman_phone_number ='$mobnum'";

   $result=mysqli_query($conn,$sql);
   if (mysqli_num_rows($result)>0) {
     while ($row = mysqli_fetch_assoc($result)) {

           echo'<tr>
                   <td>'.$row['consignment_id'].'</td><br>
                   <td>BDT '.$row['product_price'].'</td><br>
                   <td>'.$row['confirmation_date'].'</td><br>
                   <td>'.$row['estimated_delivery'].'</td><br>
                   <td>'.$row['status_name'].'</td><br>
                   <td>'.$row['customer_firstName'].' '.$row['customer_lastName'].'</td><br>
                   <td>+880'.$row['customer_phone_number'].'</td>
                   <td>'.$row['customer_address'].'</td><br>
                   <td>'.$row['NAME'].'</td><br>
                   <td><a href="done_delivery.php?id='.$row['consignment_id'].'"><button>Delivered</button></a></td>
              </tr>';

         }
     }
  ?>
</table>


  </body>
</html>
