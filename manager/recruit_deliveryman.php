<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recruit Deliveryman</title>
    <link rel="stylesheet" href="recruit_deliveryman.css">
  </head>
  <body>
    <div class="bg-imgCsignup">
      <div class="contentCsignup">
    <form name = "signup" action="insert_deliveryman.php" style="border:1px solid #ccc" method="post" class="container">

    <h1>Recruit Deliveryman</h1>
    <p>Please fill in this form to recruit a deliveryman.</p>
    <hr>

    <label for="first_name"><b>First Name</b></label><br>
    <br><input type="text" placeholder="First Name" name="first_name" required><br>

    <label for="last_name"><b>Last Name</b></label><br>
    <input type="text" placeholder="Last Name" name="last_name" required><br>

    <label for="address"><b>Address</b></label><br>
    <input type="text" placeholder="Address" name="address" required><br>

    <label for="phone_number"><b>Phone Number</b></label><br>
    <input type="tel" placeholder="01*********" name="phone_number" pattern="[0]{1}[1]{1}[0-9]{3}[0-9]{6}" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Password" name="password" onchange='check_pass();' required><br>


    <div class="clearfix">
      <a href="manager_dashboard.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <a href="manager_dashboard.php"><button type="submit" class="signupbtn">Recruit</button></a>

    </div>
    </form>
  </div>
  </div>
  </body>
</html>
