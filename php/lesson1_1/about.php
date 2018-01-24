<?php

$name = 'Михаил';
$age = '37';
$email = 'mihail.treschalin@ya.ru';
$aboutMe = 'Изучаю Web программирование. Хочу сменить профессию';
$city = 'Балашиха';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Домашняя работа №1</title>
		<meta charset="utf-8">
		<style>
			td {
				padding: 0 5px 0 5px;
				font-size: 18px;
			}
		</style>
	</head>
	<body>
		<h2>Страница пользователя Михаил</h2>
		<table>
			<tr>
				<td>Имя</td>
				<td><?= $name ?></td>
			</tr>
			<tr>
				<td>Возраст</td>
				<td><?= $age ?></td>
			</tr>
			<tr>
				<td>Адрес электронной почты</td>
				<td>
					<a href="mailto:<?= $email ?>"><?= $email ?></a>
				</td>
			</tr>
			<tr>
				<td>Город</td>
				<td><?= $city ?></td>
			</tr>
			<tr>
				<td>О себе</td>
				<td><?= $aboutMe ?></td>
			</tr>
		</table>
	</body>
</html>