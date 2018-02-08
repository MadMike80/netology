<?php
$json_file = file_get_contents(__DIR__ . '/data.json');
$file_data = json_decode($json_file, true);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Телефонная книжка</title>
</head>
    <body>
        <table cellspacing="10" cellpadding="5">
            <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>№ телефона</th>
                <th>Адрес</th>
            </tr>
            </thead>
            <?php
                foreach ($file_data as $item) { ?>
                <tbody>
                    <tr>
                        <td><?= $item['lastName']?></td>
                        <td><?= $item['firstName']?></td>
                        <td><?= $item['phoneNumber']?></td>
                        <td><?= $item['address']?></td>
                    </tr>
                </tbody>
                <?php } ?>
        </table>
    </body>
</html>
