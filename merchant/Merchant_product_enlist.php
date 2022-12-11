<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <h1>Enlist Your Product.</h1>
    <meta charset="utf-8">
    <title>Enlist Product</title>

    <link rel="stylesheet" href="merchant_page.css">
  </head>
  <div class="backimgenlist">
    <div class="aligncontent">
      <body>
        <form action="merchant_product.php" method="post" enctype="multipart/form-data">
          <label for="img">Select image:</label>
          <input type="file" name="img" accept="image/*">

        <label for="p_name"></label>
        <input type="text" placeholder="Enter Your product Name" name="p_name" required><br><br>

        <label for="category">Select your category:</label>
          <select id="category" name="category">
              <option value="Electronics">Electronics</option>
              <option value="Fashion">Fashion</option>
              <option value="Health">Healths</option>
              <option value="other">other</option>
          </select><br><br>


        <label for="price"><b>Price </b></label>
        <input type="number" min="1" name="product_price" required><br><br>

        <label for="description"></label>
        <input type="text" placeholder="Product Description" name="product_description" required><br><br>


        <input type="submit" name="submit" value="Submit">

      </body>
        </div><br><br>
    </div>



</html>
