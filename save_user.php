<?php
require "bd.php";
$login = $_POST["login"];
$password = $_POST["password"];
$sql = "INSERT INTO user (login, password) VALUES ('$login', '$password')";
if($mysqli->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $mysqli->error;
    }
header("Location: index.php")
?>