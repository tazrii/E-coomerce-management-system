<DOCTYPE html>
  <html lang ="en" dir= "ltr">
  <head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content ="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="profile.css">
  </head>
  <body>
    <nav>
      <label>
        <label class="logo">Devaly</label>
        <ul>
              <li><a href="logout.php">logout</a></li>
              <li><p><?php
              session_start();
              echo "Welcome" .$_SESSION["emailID"];
              ?>
  </p></li>
  <?php
  require '../connections/connection.php';
  $email= $_SESSION["emailID"];
$sql=  "SELECT * FROM manager
where manager_email= '$email'" ;
              $result=mysqli_query($conn,$sql);
              if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {

                      echo'<tr>
                              <b>Name:  </b><td>'.$row['manager_firstName'].'</td> <td>'.$row['manager_lastName'].'</td><br>
                              <b>Email Address:  </b><td>'.$row['manager_email'].'</td><br>
                              <b>Phone Number:  +880</b><b>'.$row['manager_phone_number'].'</b><br>
                              <b>Address:  </b><td>'.$row['manager_address'].'</td><br>
                         </tr>';

                    }
                }


  ?>

</body>
</html>
