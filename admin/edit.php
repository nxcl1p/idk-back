<?php
require_once 'functions.php';
error_reporting(-1);
$products = getProductById();
foreach ($products as $id_key) {
  $id = $id_key['id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Edit</title>
</head>

<body class="text-bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="mb-3 mt-3 col-md-4">
        <form action="#" method="post">
          <?php foreach ($products as $key): ?>
            <label for="name">Product Name</label>
            <input type="text" class="form-control mb-3" name="name_edited" placeholder="Product Name" id="name"
              value="<?= $key['name']; ?>">
            <label for="price">Product Price</label>
            <input type="number" class="form-control mb-3" name="price_edited" placeholder="Product Price" id="price"
              value="<?= $key['price']; ?>">
            <div class="d-md-flex justify-content-center">
              <button type="submit" class="btn btn-primary col-4">Submit</button>
            </div>
          <?php endforeach; ?>
        </form>
      </div>
    </div>
  </div>


  <?
  if (!empty($_POST)) {
    $name = $_POST['name_edited'];
    $price = $_POST['price_edited'];
    editProduct($id, $name, $price);
    print_r($_POST);
    header('location: ../user.php');
  }
  ?>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>