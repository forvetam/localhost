<?php
$mysqli = new mysqli("localhost", "root", "root", "base");

if ($conn == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
?>