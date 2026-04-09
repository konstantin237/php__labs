<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №5</title>
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
            border-left: 5px solid #e67e22;
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
    <h1>Лабораторная работа №5</h1>
    <hr>

    <?php
        function helloUser($name) {
            return "Привет, $name!";
        }

        function sumNumbers($a, $b) {
            return $a + $b;
        }

        function upperText($text) {
            return mb_strtoupper($text);
        }
    ?>

    <div class="block">
        <h2>1. Простая функция</h2>
        <?php
            echo helloUser("Иван");
        ?>
    </div>

    <div class="block">
        <h2>2. Функция суммы</h2>
        <?php
         echo "10 + 25 = " . sumNumbers(10, 25);
         ?>
     </div>
 
     <div class="block">
         <h2>3. Работа со строкой</h2>
         <?php
             echo upperText("лабораторная работа по php");
         ?>
     </div>
 
     <a href="../index.php">Вернуться на главную</a>
 </div>
 
 </body>
 </html>