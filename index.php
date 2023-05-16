<?php
require_once 'admin/functions.php';
$products = getProducts();

if (!empty($_POST)){
    $login = $_POST['login_name'];
    $pass = $_POST['login_password'];
    
    if ($login == 'admin' && $pass == '1488'){
        header("Location: admin/admin.php");
    }elseif ($login == 'guest' && $pass == 'guest'){
        header("Location: user_main.php");
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="mb-3 mt-3 col-md-4">
            <form action="index.php" class="login-form" method="post">
                <label for="login_name">Login</label>
                <input type="text" name="login_name" class="form-control mb-3" id="login_name">
                <label for="login_password">Password</label>
                <input type="password" name="login_password" class="form-control mb-3" id="login_password">
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

