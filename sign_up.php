
<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body style="background-color: #F0F0F0">

			<div  align="center", style = "background-color: #FFFFFF; word-wrap:break-word; width:632px; position:absolute">
				<p><b>Регистрация</b></p>
				<form action="save_user.php" method="POST">
				<p>Логин: <input type="text" name="login" /></p>
				<p>Пароль: <input type="text" name="password" /></p>
				<input type="submit" value="Зарегистрироваться">
				</form>
				<p></p>
			</div>

			<div style = "position:fixed; left:20px; top:20px">
				<a href="http://localhost" class="button">Главная страница</a>
			</div>

		</body>
</html>