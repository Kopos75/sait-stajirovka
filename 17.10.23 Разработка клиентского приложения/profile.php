


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Техносервиc</title>
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
				<p><a href="profile.php">Личный кабинет</a></p>
				<p><a href="index.php"><img src="logo/logo.ico" alt=""></a></p>
				<p><a href="index.php">Выход</a></p>
			</nav>
		</div>
	</header>

	<main>
		<div class="content">
			
			<div class="head">Ваши заявки</div>
			<p class="small">Все | Новые | Решённые | Отклонённые</p>

			<table>
				<tr>
					<th>Название</th>
					<th>Статус</th>
					<th>Категория</th>
					<th>Описание</th>
					<th>Действие</th>
					<th>Время</th>
				</tr>
				<tr>
					<td>Новая заявка</td>
					<td>Новая</td>
					<td>Первая категория</td>
					<td align="justify">Краткое описание заявки краткое описание заявки</td>
					<td class="td"><a>Удалить заявку</a></td>
					<td>2022-01-21 09:00:00</td>
				</tr>
				<tr>
					<td>Одобренная заявка</td>
					<td>Одобрена</td>
					<td>Вторая категория</td>
					<td align="justify">Краткое описание заявки краткое описание заявки</td>
					<td>Отсутствует</td>
					<td>2022-01-21 09:00:00</td>
				</tr>
				<tr>
					<td>Отклонённая заявка</td>
					<td>Отклонена</td>
					<td>Первая категория</td>
					<td align="justify">Краткое описание заявки краткое описание заявки</td>
					<td><a>Отсутствует</a></td>
					<td>2022-01-21 09:00:00</td>
				</tr>
			</table>
			
			<div class="row">
				<div class="col">
					<h3>Новая заявка</h3>
					<p class="center">Статус заявки: <b>Новая</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки</p>
					<p class="small"><a href="">Удалить заявку</a></p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small"><a href="">Удалить заявку</a></p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<h3>Отклоненная заявка</h3>
					<p class="center">Статус заявки: <b>Отклонена</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки</p>
					<p class="small"><a href="">Удалить заявку</a></p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
			</div>

			<div class="head">Добавить заявку</div>
			<form action="admin.php" ectype="multipart/form-data" method="POST">
				<input type="text" name="title" placeholder="Название (до 64 символов)" required pattern=".{1,64}">
				<textarea name="description" placeholder="Описание (до 256 символов)" required pattern=".{1,256}"></textarea>
				<select required name="category">
					<option value selected disabled>Категория заявки</option>
					<option>Первая категория</option>
					<option>Вторая категория</option>
				</select>
				<p class="left">Фотография заявки</p>
				<input type="file" required name="image">
				<button>Создать заявку</button>
			</form>

		</div>
	</main>

</body>
</html>