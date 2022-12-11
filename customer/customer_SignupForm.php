<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="customer_signUp.css">
  </head>
  <body>
    <div class="bg-imgCsignup">
      <div class="contentCsignup">
    <form name = "signup" action="insert_customer_Signup.php" style="border:1px solid #ccc" method="post" class="container">

    <h1>Sign Up as Customer</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="first_name"><b>First Name</b></label><br>
    <br><input type="text" placeholder="First Name" name="first_name" required><br>

    <label for="last_name"><b>Last Name</b></label><br>
    <input type="text" placeholder="Last Name" name="last_name" required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="example@gmail.com" name="email" required><br>

    <label for="address"><b>Address</b></label><br>
    <input type="text" placeholder="Address" name="address" required><br>

    <label for="phone_number"><b>Phone Number</b></label><br>
    <input type="tel" placeholder="01*********" name="phone_number" pattern="[0]{1}[1]{1}[0-9]{3}[0-9]{6}" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Password" name="password" onchange='check_pass();' required><br>

    <select name="pickup_point">
        <option value="" disabled selected>Choose your pickup location</option>
        <option value="dhk">Dhaka</option>
        <option value="ctg">Chittagong</option>
        <option value="bar">Barisal</option>
        <option value="khl">Khulna</option>
    </select>


    <p><b>Please select you payment method:</b></p>
      <input type="radio" name="payment_method" value="c">
      <label for="c">Cash on delivery</label><br>
      <input type="radio" name="payment_method" value="b">
      <label for="b">BKash</label><br>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="../index.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <a href="customer_dashboard.php"><button type="submit" class="signupbtn">Sign Up</button></a>

    </div>
    <p>Already have an account?<a href="customer_LoginForm.php" style="color:white"> Click Here</a></p>
    </div>
    </div>
    </form>
  </div>
  </div>
  </body>
</html>
