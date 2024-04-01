<html>
<head>
    <title>Greetings!!!</title>
</head>
<body>
    <?php
    if (isset($_GET['FirstName'])) {
        print("<center> Здравствуйте $_GET[FirstName]!!!</center>");
    } else {
        print("<center> Здравствуйте!!!</center>");
    }
    ?>
</body>
</html>
