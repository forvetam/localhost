<?php
require_once "bd.php";
$login = $_POST["login"];
$password = $_POST["password"];
$sql = mysqli_query($mysqli, "INSERT INTO user (login, password) VALUES ($login, $password);");
header("Location: index.php")
?>