<?php
require_once 'functions.php';
$products = getProductById();
$id = $_GET['id'];
var_dump('edit id: ' . $id);

if (!empty($_POST)) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  editProduct($id, $name, $price);
  header('location: ../user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    button {
      padding: 10px 20px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h3 {
      text-align: center;
      font-size: 32px;
    }

    form label {
      margin-bottom: 10px;
      font-weight: bold;
      font-size: 21px;
    }

    form input:focus {
      outline: 0;
    }

    form input {
      width: 100%;
      max-width: 300px;
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
  </style>
  <title>Edit</title>
</head>

<body>
  <form action="edit.php" method="post">
    <?php foreach ($products as $key): ?>
      <label for="name">Product Name</label>
      <input type="text" name="name" placeholder="Product Name" id="name" value="<?= $key['name']; ?>">
      <label for="price">Product Price</label>
      <input type="number" name="price" placeholder="Product Price" id="price" value="<?= $key['price']; ?>">
      <button type="submit">Submit</button>
    <?php endforeach; ?>
  </form>

</body>

</html>