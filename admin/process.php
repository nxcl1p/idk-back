<?php
require_once 'db.php';
require_once 'functions.php';
error_reporting(-1);

$action = $_POST['action'];

switch ($action) {
  case 'add':
    $image = processImage();
    $name = $_POST['name'];
    $price = $_POST['price'];
    if ($image) {
      addProduct($image, $name, $price);
    } else {
      echo "Ошибка при загрузке файла.";
    }
    break;
  default:
    die("Invalid action");
}

exit();

