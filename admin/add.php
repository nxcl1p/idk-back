<?php
require_once 'functions.php';
error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<title>Admin</title>
</head>

<body class="text-bg-dark">
	<div class="forms_wrapper">
		<!-- Add -->
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-4 mb-3 mt-3">
					<h1>Add product</h1>
					<form action="process.php" method="post" enctype="multipart/form-data" autocomplete="off">
						<input type="hidden" value="add" name="action">
						<label for="image">Add Image</label>
						<input type="file" name="image" id="image" class="form-control">
						<label for="name">Product Name</label>
						<input type="text" class="form-control" name="name" placeholder="Product Name" id="name">
						<label for="price">Product Price</label>
						<input type="number" name="price" class="form-control" placeholder="Product Price" id="price">
						<div class="d-flex justify-content-center mt-3">
							<button class="btn btn-primary col-4" type="submit">Submit</button>
						</div>
				</div>
				</form>
			</div>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>