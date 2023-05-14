<?php
require_once 'admin/functions.php';
$products = getProducts();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>User</title>
</head>
<body>
  <div class="container">
    <?php foreach ($products as $product):?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $product['image']?>" class="card-img-top" alt="img" style="max-width: 100px">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product['name']?>></h5>
            <p class="card-text">Price: <?php echo $product['price']?></p>
        </div>
    </div>
    <?php endforeach;?>
  </div>


  

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
