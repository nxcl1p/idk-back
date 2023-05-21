<?php
require_once 'admin/functions.php';
$products = getProducts();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>User</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<a class="btn btn-success col-1 me-md-2" href="admin/add.php">+</a>
			</div>
			<?php foreach ($products as $product): ?>
				<div class="card me-4 mb-4" style="width: 12rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
					<img src="<?php echo $product['image'] ?>" class="card-img-top" alt="img" style="max-width: 12rem">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo $product['name'] ?>
						</h5>
						<p class="card-text">Price:
							<?php echo $product['price'] ?>
						</p>
						<a href="admin/edit.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Edit</a>
						<a href="admin/delete.php?id=<?php echo $product['id'] ?>" class="btn btn-danger">Delete</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>