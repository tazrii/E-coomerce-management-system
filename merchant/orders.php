
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
        <li><a href="orders.php">Orders</a></li>
        <li><a href="merchant_logout.php">Logout</a></li>
        <li><a href="Merchant_profile.php">Profile</a></li>
        <li><a href= "Merchant_product_enlist.php">Enlist Product</a></li>
        <li><p><?php
                      session_start();
                      echo "Welcome " .$_SESSION["emailID"];
               ?>
            </p></li>
      </ul>
    </nav>
    <table id="customers">
  <tr>
    <th>Order Number</th>
    <th>Product</th>
    <th>Confirmation Date</th>
    <th>Delivered Date</th>
    <th>Payment</th>
    <th>Location</th>
    <th>Customer</th>
    <th>Customer Contact</th>
    <th>Manager</th>
    <th>Manager Contact</th>
    <th>Delivery Status</th>

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
  $sql="SELECT dd.consignment_id AS 'consignment_id', p.product_name AS 'product_name', dd.confirmation_date AS 'confirmation_date', dd.estimated_delivery AS 'estimated_delivery', pm.NAME AS 'NAME', pp.location_name AS 'location_name',
  c.customer_firstName AS 'customer_firstName', c.customer_lastName AS 'customer_lastName', c.customer_phone_number AS 'customer_phone_number', m.manager_firstName AS manager_firstName, m.manager_lastName AS manager_lastName,
  ds.status_name AS status_name, m.manager_phone_number AS manager_phone_number
    FROM delivery_details dd
    JOIN customer c
    ON dd.customer_id = c.customer_id
    JOIN paymentmethod pm
    ON dd.payment_id = pm.payment_id
	JOIN merchant mr
    ON mr.merchant_id = dd.merchant_id
    LEFT JOIN delivery_status ds
    ON ds.status_id = dd.status_id
    JOIN pickup_point pp
    ON dd.location_id = pp.location_id
    JOIN product p
    ON dd.product_id = p.product_id
    JOIN manager m
    ON m.manager_id=dd.manager_id
    And mr.merchant_email ='$useremail'";

   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0) {
     while ($row = mysqli_fetch_assoc($result)) {

           echo'<tr>

                   <td>'.$row['consignment_id'].'</a></td>
                   <td>'.$row['product_name'].'</td><br>
                   <td>'.$row['confirmation_date'].'</td><br>
                   <td>'.$row['estimated_delivery'].'</td><br>
                   <td>'.$row['NAME'].'</td><br>
                   <td>'.$row['location_name'].'</td><br>
                   <td>'.$row['customer_firstName'].' '.$row['customer_lastName'].'</td><br>
                   <td>+880'.$row['customer_phone_number'].'</td>
                   <td>'.$row['manager_firstName'].' '.$row['manager_lastName'].'</td><br>
                   <td>+880'.$row['manager_phone_number'].'</td>
                   <td>'.$row['status_name'].'</td>
              </tr>';

         }
     }
  ?>
</table>


  </body>
</html>
