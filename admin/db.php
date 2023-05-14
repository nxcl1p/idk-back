<?php
$servername = "localhost";
$username = "root";
$password = "1488";
$dbname = "idk_com";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
