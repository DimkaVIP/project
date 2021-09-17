<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Тестовое задание</title>
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div class="container">
				<div id="app">
					<v-main></v-main>
				</div>
				<div class="php-block">
					<?
						$array = [1, 3, 2, 10, 15, 12, 30, 22];
						?>
					<div class="h3">Сортировка в php</div>
					<div class="result"><?=$result;?></div>
				</div>
		</div>
		<script src="./js/app.js"></script>
	</body>
</html>