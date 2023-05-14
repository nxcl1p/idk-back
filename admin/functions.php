<?php
require_once 'db.php';
error_reporting(-1);

function processImage() {
  $target_dir = "../uploads/";
  $image_name = uniqid() . "_" . basename($_FILES["image"]["name"]);
  $target_file = $target_dir . $image_name;
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = $target_file;
    return $image;
  } else {
    return false;
  }
}

function addProduct($image, $name, $price){
  global $conn;
  $stmt = $conn -> prepare("INSERT INTO products (image, name, price) VALUES (?, ?, ?)");
  $stmt -> bind_param("ssi", $image, $name, $price);
  $stmt -> execute();
  $stmt -> close();
}

function editProduct($id, $name, $price){
  global $conn;
  $stmt = $conn->prepare("UPDATE products SET name = ?, price = ? WHERE id = ?");
  $stmt -> bind_param("ssi", $name, $price, $id);
  $stmt -> execute();
  $stmt -> close();
}

function deleteProduct($id){
  global $conn;
  $stmt = $conn -> prepare("DELETE FROM products WHERE id = ?");
  $stmt -> bind_param("i", $id);
  $stmt -> execute();
  $stmt -> close();
}