<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
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
					<?php
						$array = array(1, 3, 2, 10, 15, 12, 30, 22);
						sort($array);
						?>
					<div class="h3">Сортировка в php</div>
					<div class="result">
                        <?php foreach ($array as $key => $value) {
                            echo '<div>' . $key . ' item: ' . $value . '</div>';
                        } ?>
                    </div>
				</div>
		</div>
		<script src="./js/app.js"></script>
	</body>
</html>
