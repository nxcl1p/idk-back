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

<body class="text-bg-dark">

	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Мне лень это делать</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Мне лень</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Мне лень</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Мне лень</a>
					</li>
				</ul>
			</div>
		</div>
		<form class="container-fluid justify-content-end">
			кнопка работает -><a class="btn btn-success me-2 col-2" type="button" href="admin/add.php">+</a>
		</form>
	</nav>

	<div class="container">
		<div class="row mt-4">
			<?php foreach ($products as $product): ?>
				<div class="card me-4 mb-4 text-bg-dark"
					style="width: 12rem; box-shadow: rgba(200,200,200, 0.1) 1px 6px 10px 3px;">
					<img src="<?php echo $product['image'] ?>" class="card-img-top mt-2" alt="img" style="max-width: 12rem">
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