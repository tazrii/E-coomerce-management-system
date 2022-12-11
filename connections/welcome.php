<?php
//start the session
session_start();

//check if the user is not logged in, then redirect the user to login page
if(!isset($SESSION["customer_id"]) || $_SESSION["customer_id"] !==true){
  header(location: customer_LoginForm.php);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Welcome <?php echo $_SESSION["customer_firstName"]; ?></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Hello, <strong><?php echo $_SESSION["customer_firstName"] ?></h1></strong>. Welcome to DEVALY

        </div>
          <p>
            <a href="logout.php" class = "btn btn-secondary btn-lg active" role="button" aria-pressed = "true"> LOG OUT</a>
          </p>
      </div>

    </div>
  </body>
</html>
