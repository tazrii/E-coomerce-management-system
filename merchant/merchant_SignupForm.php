<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Merchant signup</title>
<link rel="stylesheet" href="merchant_page.css">
  </head>
  <<div class="backimg">
    <div class="aligncontent">
      <body>
        <h1>Sign Up</h1>


        <p>Please fill in this form to create your merchant account.</p>
        <form action="merchant_registration.php" method="post">
        <label for="fname"></label>
        <input type="text" placeholder="Enter Your First Name" name="fname" required><br><br>

        <label for="lname"></label>
        <input type="text" placeholder="Enter Your Last Name" name="lname" required><br><br>

        <label for="email"></label>
        <input type="email" placeholder="Enter Email" name="email" required><br><br>

        <label for="phone"></label>
        <input type="tel" id="phone" name="phone" placeholder="11 Digit Phone Number" pattern="[0-9]{11}" required><br><br>
        <label for="address"></label>
        <input type="text" placeholder="Address" name="Address" required><br><br>
        <label for="psw"></label>
        <input type="password" placeholder="Create your Password" name="psw" required><br><br>


        <div class="canbutton">
          <input type="submit" name="insert" value="INSERT">


    </div>

  </div>
</body>
</html>
