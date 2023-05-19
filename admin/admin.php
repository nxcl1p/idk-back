<?php
require_once 'functions.php';
error_reporting(-1);

if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: ../index.php');
	exit;
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

		.forms_wrapper {
			font-family: Arial, serif;
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
	<title>Admin</title>
</head>

<body>
	<div class="forms_wrapper">
		<!-- Add -->
		<h3>Add product</h3>
		<form action="process.php" method="post" enctype="multipart/form-data" autocomplete="off">
			<input type="hidden" value="add" name="action">
			<label for="image">Add Image</label>
			<input type="file" name="image" id="image">
			<label for="name">Product Name</label>
			<input type="text" name="name" placeholder="Product Name" id="name">
			<label for="price">Product Price</label>
			<input type="number" name="price" placeholder="Product Price" id="price">
			<button type="submit">Submit</button>
		</form>
		<br>

		<!-- Edit -->
		<h3>Edit product</h3>
		<form action="process.php" method="post" autocomplete="off">
			<input type="hidden" name="action" value="edit">
			<label for="update_id">Product ID:</label>
			<input type="number" name="id" id="update_id">
			<label for="update_name">Name:</label>
			<input type="text" name="name" id="update_name">
			<label for="update_price">Price:</label>
			<input type="number" name="price" id="update_price">
			<button type="submit">Edit Product</button>
		</form>
		<br>

		<!-- Delete -->
		<h3>Delete product</h3>
		<form action="process.php" method="post" autocomplete="off">
			<input type="hidden" name="action" value="delete">
			<label for="id">Product ID:</label>
			<input type="number" name="id" id="id">
			<button type="submit">Delete Product</button>
		</form>
	</div>
</body>

</html>