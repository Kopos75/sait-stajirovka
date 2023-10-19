<?php
//Подключение к базе данных
$connect = @new mysqli ("localhost","root","","DateBase_2023");
$connect->set_charset("utf-8");
if	($connect->connect_error)
	die("Ошибка подключения:".$connect->connect_error); 


	//Вывод сообщения
	$massege = "";
	if (isset($_GET["messege"]));
		$massege = sprintf('<div class="messege"></div>',$_GET["messege"]);
//Составление запроса на получение заявки
$sql = "SELECT * FROM `applications`";
//отправление запроса в базу
$result = $connect->query($sql);
//Првоерка на наличие ошибок
if (!$result) die ("Ошибка:".connect_error);
$app = "";
while ($row = $result->fetch_assoc())
$app = sprintf ('<div class="col">
<img src="%s">
<h3>%s</h3> 
<h5>%s</h5>
<h5>%s</h5>
<h5>%s</h5>
</div>',$row["patch_to_image_after"],$row["title"],$row["description"],$row["status"],$row["created_at"]);



?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Техносервис</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
		<div class="top">
			<h1>Техносервис</h1>
			<h2>Тут Вы сможете починить все что угодно</h2>
		</div>
		<div class="content">
			<nav>
				<p><a href="#register">Регистрация</a></p>
				<p><a href="index.php"><img src="logo/logo.ico" alt=""></a></p>
				<p><a href="#login">Войти</a></p>
			</nav>
		</div>
	</header>

:<?= $massege ?>

	<main>
		<div class="content">
			
			<div class="head">Последние одобренные заявки</div>
			<p class="small">Количество одобренные заявок - 5</p>
			<!--Вывод данных запроса-->
			<div class="row">
				<?= $app ?>
				<!--
				<div class="col">
					<img src="images/002.jpg" alt="">
					<h3>Одобренная заявка</h3>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="small">2023-10-15 09:32:00</p>
				</div>
				<div class="col">
					<img src="images\r0RMnOmKdzc.jpg" alt="">
					<h3>Одобренная заявка</h3>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="small">2023-10-16 11:15:03</p>
				</div>
				<div class="col">
					<img src="images\scale_1200.jpg" alt="">
					<h3>Одобренная заявка</h3>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="small">2023-10-17 10:48:42</p>
				</div>
				<div class="col">
					<img src="images\kak-chistit-sistemnyj-blok-ot-pyli.jpg" alt="">
					<h3>Одобренная заявка</h3>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="small">2023-10-18 16:15:24</p>
				</div>
				  -->
			</div>

			<div class="head" id="register">Регистрация</div>
			<form method="POST">
				<input type="text" name="fio" placeholder="ФИО (кириллица, дефис, пробел, до 32 символов)" pattern="[а-яА-ЯёЁ\-\s]{1,32}" required>
				<input type="text" name="login" placeholder="Логин (латиница, до 16 символов)" pattern="[a-zA-Z]{1,16}" required>
				<input type="email" name="email" pattern=".{1,32}" placeholder="Email (наличие @, до 32 символов)" required>
				<input type="password" name="password" pattern=".{1,32}" placeholder="Пароль (до 32 символов)" required>
				<input type="password" name="password_check" placeholder="Повтор пароля" required>
				<div class="line">
					<input type="checkbox" required>
					<p>Согласие на обработку персональных данных</p>
				</div>
				<button>Зарегистрироваться</button>
			</form>

			<div class="head" id="login">Войти</div>
			<form action="profile.php" method="POST">
				<input type="text" name="login" placeholder="Логин">
				<input type="password" name="password" placeholder="Пароль">
				<button>Войти</button>
			</form>

		</div>
	</main>

</body>
</html>