<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="customer_login.css">
  </head>
  <body>
    <div class="bg-imgClogin" >
      <div class="aligncontent">
        <div class="contentClogin">
          <h1>Login as Customer</h1>
          <p>Please fill in this form to login.</p>
          <hr>
          <form action="insert_customer_Login.php" method="POST" class="containerClogin">
            <label for="email"><b>Username</b></label><br>
              <input type="email" placeholder="example@example.com" name="email" required><br>
            <label for="psw"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="psw" required><br>

            <div class="container">
              <a href="../index.php"><button type="button" class="cancelbtn">Cancel</button></a>
              <a href="customer_dashboard.php"><button type="submit" class="loginbtn">Login</button></a><br>
            </div>
            <p>Do not have an account?<a href="customer_SignupForm.php" style="color:white"> Click Here</a></p>

            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
