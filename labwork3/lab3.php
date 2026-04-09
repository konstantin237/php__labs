<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3</title>
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
            border-left: 5px solid #27ae60;
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
    <h1>Лабораторная работа №3</h1>
    <hr>

    <div class="block">
        <h2>1. Условия</h2>
        <?php
            $age = 20;
            if ($age >= 18) {
                echo "Возраст: $age — доступ разрешён";
            } else {
                echo "Возраст: $age — доступ запрещён";
            }
        ?>
    </div>

    <div class="block">
        <h2>2. Сравнение чисел</h2>
        <?php
            $a = 15;
            $b = 10;
            if ($a > $b) {
                echo "$a больше, чем $b";
            } elseif ($a == $b) {
                echo "$a равно $b";
            } else {
                echo "$a меньше, чем $b";
            }
        ?>
    </div>

    <div class="block">
        <h2>3. Цикл for</h2>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "Число: $i<br>";
            }
        ?>
    </div>

    <a href="../index.php">Вернуться на главную</a>
</div>
</body>
</html>