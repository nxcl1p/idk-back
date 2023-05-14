<?php
require_once 'functions.php';
//$products = getProducts();
error_reporting(-1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>

<body>
  <!-- Add -->
  <h3>Add product</h3>
  <form action="process.php" method="post" enctype="multipart/form-data">
    <input type="hidden" value="add" name="action">
    <label for="image">Add Image</label>
    <input type="file" name="image" id="image">
    <label for="name">Product Name</label>
    <input type="text" name="name" placeholder="Product Name" id="name">
    <label for="price">Product Price</label>
    <input type="number" name="price" placeholder="Product Price" id="price">
    <button type="submit">Submit</button>
  </form><br>

<!--   Edit -->
<!--  <h3>Edit product</h3>-->
<!--  <form action="process.php" method="post" enctype="multipart/form-data">-->
<!--    <input type="hidden" name="action" value="update">-->
<!--    <label for="update_id">Product ID:</label>-->
<!--    <input type="number" name="id" id="update_id">-->
<!--    <label for="update_image">Update Image</label>-->
<!--    <input type="file" name="image" id="update_image">-->
<!--    <label for="update_name">Name:</label>-->
<!--    <input type="text" name="name" id="update_name">-->
<!--    <label for="update_price">Price:</label>-->
<!--    <input type="number" name="price" id="update_price">-->
<!--    <button type="submit">Edit Product</button>-->
<!--  </form><br>-->
<!---->
<!--   Delete -->
<!--  <h3>Delete product</h3>-->
<!--  <form action="process.php" method="post">-->
<!--    <input type="hidden" name="action" value="delete">-->
<!--    <label for="id">Product ID:</label>-->
<!--    <input type="number" name="id" id="id">-->
<!--    <button type="submit">Delete Product</button>-->
<!--  </form>-->
<!--</body>-->

</html>