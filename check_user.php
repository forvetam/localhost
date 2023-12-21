<?php
require "bd.php";
$login = $_POST["login"];
$password = $_POST["password"];
$sql = "SELECT * FROM user";
if($arr = $mysqli->query($sql)){
	$flag = false;
	
	foreach($arr as $user_id){
		if(($user_id["login"] == $login) and ($user_id["password"] == $password)){
			//echo "Добро пожаловать, " . $login;
			$flag = true;
			header("Location: http://localhost/logout.php");	
		}
	}
	
	if(!$flag) {
		echo "Пользователь " . $login . " не найден";
	}
    
} else{
    echo "Ошибка: " . $mysqli->error;
    }
//header("Location: index.php")
?>