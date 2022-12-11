<?php session_start();
require '../connections/connection.php'?>

<!DOCTYPE html>
<html>
<head>
  <html lang="en" dir="ltr">
  <title> Manager Login</title>
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="login_manager.css"

  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1> Login As Manager</h1>
      </div>
      <div class="main">
        <form = "main" action="insert_manager.php" method="post">
            <input type="email" placeholder="username" name="email" required> <br>

            <input type="password" placeholder="password" name="psw" required><br>

           <a href="manager_dashboard.php"><button >login</button></a>
           <a href="../index.php"><button type="button" class="cancelbtn">Cancel</button></a>
</form>
</div>
</body>
      </header>
