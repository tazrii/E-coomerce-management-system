<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <html lang="en" dir="ltr">
  <title> DeliveryLogin</title>
  <link rel="stylesheet" type="text/css" href="deliveryman_recruit.css">
</head>
  <body>
    <div class="container">
      <div class="header">
        <h1> Login as Deliveryman</h1>
      </div>
      <div class="main">
        <form action="insert_deliveryman_login.php" method="POST" class="containerClogin">
          <span>

            <input type="tel" placeholder="Mobile Number" name="mobnum" required> <br>

            <input type="password" placeholder="password" name="psw" required><br>
          </span>
          <a href="deliveryman_dashboard.php"><button type="submit" class="loginbtn">Login</button></a><br>
          <a href="../index.php"><button type="button" class="cancelbtn">Go back</button></a>
        </form>
</div>
</body>
</html>
