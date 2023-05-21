<?
require_once 'functions.php';

$id = $_GET['id'];

deleteProduct($id);
header('location: ../user.php');