<?php

$name = 'Михаил';
$age = '36';
$email = 'mihail.treschalin@ya.ru';
$aboutMe = 'Изучаю Web программирование. Хочу сменить профессию';
$city = 'Электроугли';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h2>Домашняя работа №1</h2>
<table>
	<tr><td>Имя</td> <td><?= $name ?></td></tr>
	<tr><td>Возраст</td> <td><?= $age ?></td></tr>
	<tr><td>Адрес электронной почты</td> <td><a href="mailto:<?= $email ?>"><?= $email ?></a></td></tr>
	<tr><td>Город</td> <td><?= $city ?></td></tr>
	<tr><td>О себе</td> <td><?= $aboutMe ?></td></tr>
</table>

</body>
</html>