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
		<div class="row">
			<?php foreach ($products as $product) : ?>
				<div class="card me-4 mb-4" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
					<img src="<?php echo $product['image'] ?>" class="card-img-top" alt="img" style="max-width: 18rem">
					<div class="card-body">
						<h5 class="card-title"><?php echo $product['name'] ?></h5>
						<p class="card-text">Price: <?php echo $product['price'] ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>