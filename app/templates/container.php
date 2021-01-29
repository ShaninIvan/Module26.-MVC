<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC-каркас</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>{{ include ('header.php')}}</header>
        <div class="main">
            {{include(main)}}
        </div>
        <footer>{{ include ('footer.php')}}</footer>
    </div>
</body>
</html>