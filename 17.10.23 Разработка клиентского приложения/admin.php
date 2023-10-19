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
				<p><a href="index.php"><img src="logo/logo.ico" alt=""></a></p>
				<p><a href="profile.php">Личный кабинет</a></p>
				<p><a href="admin.php">Заявки</a></p>
				<p><a href="index.php">Выход</a></p>
			</nav>
		</div>
	</header>

	<main>
		<div class="content">

			<div class="head">Категории</div>
			<form>
				<div class="line">
					<input type="text" name="category" placeholder="Категория (до 64 символов)" required pattern=".{1,64}">
					<button>Добавить</button>
				</div>
			</form>
			<form>
				<div class="line">
					<select required name="category_id">
						<option value selected disabled>Категории</option>
						<option>Первая категория</option>
						<option>Вторая категория</option>
					</select>
					<button>Удалить</button>
				</div>
			</form>
			
			<div class="head">Новые заявки</div>
			<div class="row">
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Новая заявка</h3>
					<p class="center">Статус заявки: <b>Новая</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<h3>Одобрение заявки</h3>
					<form enctype="multipart/form-data" method="POST">
						<input type="file" required name="image">
						<button>Одобрить</button>
					</form>
					<h3>Отклонение заявки</h3>
					<form method="POST">
						<textarea name="rejection_reason" placeholder="Причина отклонения (до 256 символов)" required pattern=".{1,256}"></textarea>
						<button>Отклонить</button>
					</form>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Новая заявка</h3>
					<p class="center">Статус заявки: <b>Новая</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<h3>Одобрение заявки</h3>
					<form enctype="multipart/form-data" method="POST">
						<input type="file" required name="image">
						<button>Одобрить</button>
					</form>
					<h3>Отклонение заявки</h3>
					<form method="POST">
						<textarea name="rejection_reason" placeholder="Причина отклонения (до 256 символов)" required pattern=".{1,256}"></textarea>
						<button>Отклонить</button>
					</form>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Новая заявка</h3>
					<p class="center">Статус заявки: <b>Новая</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<h3>Одобрение заявки</h3>
					<form enctype="multipart/form-data" method="POST">
						<input type="file" required name="image">
						<button>Одобрить</button>
					</form>
					<h3>Отклонение заявки</h3>
					<form method="POST">
						<textarea name="rejection_reason" placeholder="Причина отклонения (до 256 символов)" required pattern=".{1,256}"></textarea>
						<button>Отклонить</button>
					</form>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
			</div>

			<div class="head">Одобренные заявки</div>
			<div class="row">
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Одобренная заявка</h3>
					<p class="center">Статус заявки: <b>Одобрена</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
			</div>

			<div class="head">Отклоненные заявки</div>
			<div class="row">
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Отклонённая заявка</h3>
					<p class="center">Статус заявки: <b>Отклонена</b></p>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="center"><b>Причина отклонения:</b></p>
					<p>Краткая причина отклонения краткая причина отклонения</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Отклонённая заявка</h3>
					<p class="center">Статус заявки: <b>Отклонена</b></p>
					<p>Категория заявки: <b>Первая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="center"><b>Причина отклонения:</b></p>
					<p>Краткая причина отклонения краткая причина отклонения</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
				<div class="col">
					<img src="images/col.png" alt="">
					<h3>Отклонённая заявка</h3>
					<p class="center">Статус заявки: <b>Отклонена</b></p>
					<p>Категория заявки: <b>Вторая категория</b></p>
					<p class="center"><b>Описание:</b></p>
					<p>Краткое описание заявки краткое описание заявки краткое описание заявки</p>
					<p class="center"><b>Причина отклонения:</b></p>
					<p>Краткая причина отклонения краткая причина отклонения</p>
					<p class="small">2022-01-21 09:00:00</p>
				</div>
			</div>

		</div>
	</main>

</body>
</html>