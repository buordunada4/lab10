<!DOCTYPE html>
<html>
<head>
    <title>Возраст</title>
</head>
<body>
    <?php
    // Проверяем, была ли отправлена дата рождения через GET запрос
    if (isset($_GET['birthdate'])) {
        // Получаем значение даты рождения из GET запроса
        $birthdate = $_GET['birthdate'];
        
        // Вычисляем возраст
        $today = date("Y-m-d");
        $age = date_diff(date_create($birthdate), date_create($today))->y;
        
        // Выводим возраст на экран
        echo "<h2>Ваш возраст:</h2>";
        echo "<p>Дата рождения: $birthdate</p>";
        echo "<p>Возраст: $age года(лет)</p>";
    } else {
        // Если дата рождения не была отправлена, выводим сообщение об ошибке
        echo "<h2>Ошибка!</h2>";
        echo "<p>Дата рождения не была отправлена.</p>";
    }
    ?>
</body>
</html>
