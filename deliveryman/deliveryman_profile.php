<DOCTYPE html>
  <html lang ="en" dir= "ltr">
  <head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="deliveryman_profile.css">
  </head>
  <body>
    <nav>
      <label>
        <label class="logo">Devaly</label>
        <ul>
              <li><a href="logout.php">logout</a></li>
              <li><p><?php
              session_start();
              echo "Welcome" .$_SESSION["mobnum"];
              ?>
  </p></li>
  <?php
  require '../connections/connection.php';
  $mobnum = $_SESSION["mobnum"];
$sql=  "SELECT * FROM deliveryman
where deliveryman_phone_number = '$mobnum'" ;
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {

                      echo'<tr><br>
                              <b>Name:  </b><td>'.$row['deliveryman_firstName'].' '.$row['deliveryman_lastName'].'</td><br>
                              <b>Phone Number:  +880</b><b>'.$row['deliveryman_phone_number'].'</b><br>
                              <b>Address:  </b><td>'.$row['deliveryman_address'].'</td><br>
                         </tr>';

                    }
                }


  ?>

</body>
</html>
