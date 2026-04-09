<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef3f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .block {
            margin: 30px 0;
            padding: 20px;
            border-left: 5px solid #9b59b6;
            background: #f9fcff;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #3498db;
            padding: 12px 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Лабораторная работа №4</h1>
    <hr>

    <div class="block">
        <h2>1. Обычный массив</h2>
        <?php
            $numbers = [5, 10, 15, 20, 25];

            foreach ($numbers as $num) {
                echo "Число: $num<br>";
            }
        ?>
    </div>

    <div class="block">
        <h2>2. Поиск максимума</h2>
        <?php
            echo "Максимальное число: " . max($numbers);
        ?>
    </div>

    <div class="block">
        <h2>3. Ассоциативный массив</h2>
        <?php
            $student = [
                "Имя" => "Иван",
                "Возраст" => 20,
                "Город" => "Москва"
            ];

            foreach ($student as $key => $value) {
                echo "$key: $value<br>";
            }
        ?>
    </div>

    <a href="../index.php">Вернуться на главную</a>
</div>

</body>
</html>