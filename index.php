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
	<title>Login</title>
</head>

<body class="text-bg-dark">

	<div class="container">
		<div class="row justify-content-center">
			<div class="mb-3 mt-3 col-md-4">
				<?php
				if (!empty($_POST)) {
					$query = mysqli_query($conn, "SELECT * FROM users");
					$res = mysqli_fetch_array($query, MYSQLI_ASSOC);
					extract($_POST);

					if ($res['name'] == $name && $res['password'] == $password) {
						if ($res['isAdmin'] == true) {
							header('Location: user.php');
						}
					} else {
						echo '<div class = "alert alert-danger">Invalid Username or Password</div>';
					}
				} ?>
				<form action="index.php" class="login-form" method="post">
					<label for="name">Login</label>
					<input type="text" name="name" class="form-control mb-3" id="login_name">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control mb-3" id="login_password">
					<div class="d-flex justify-content-center">
						<button class="btn btn-primary col-4" type="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>