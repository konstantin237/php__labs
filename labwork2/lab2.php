<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №2</title>
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

        h2 {
            color: #34495e;
        }

        .block {
            margin: 30px 0;
            padding: 20px;
            border-left: 5px solid #3498db;
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
    <h1>Лабораторная работа №2</h1>
    <hr>

    <div class="block">
        <h2>1. Типы данных переменных</h2>
        <?php
            $Zima = "-1";
            $zima = -1;
            $_Zima = -1.0;

            echo "Значение переменной \$Zima = $Zima. Тип: " . gettype($Zima) . "<br>";
            echo "Значение переменной \$zima = $zima. Тип: " . gettype($zima) . "<br>";
            echo "Значение переменной \$_Zima = $_Zima. Тип: " . gettype($_Zima) . "<br>";
        ?>
    </div>

    <div class="block">
        <h2>2. Диапазон целых чисел</h2>
        <?php
            echo "Максимальное целое число: " . PHP_INT_MAX . "<br>";
            echo "Минимальное целое число: " . PHP_INT_MIN . "<br>";
            echo "Максимум для 32-bit: " . ((2 ** 32) / 2 - 1) . "<br>";
        ?>
    </div>

    <div class="block">
        <h2>3. Экранирование строк</h2>
        <?php
            echo 'Это простая строка';
            echo "<br><br>";
            echo 'Однажды он сказал: "I\'ll be back"';
            echo "<br><br>";
            echo 'Вы удалили C:\*.*?';
            echo "<br><br>";
            echo 'Переменные $test и $name не подставляются в одинарных кавычках';
        ?>
    </div>

    <a href="../index.php">Вернуться на главную</a>

</html>