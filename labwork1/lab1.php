<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            text-align: center;
            padding-top: 80px;
        }

        .card {
            width: 600px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
        }

        h1 {
            color: #2c3e50;
        }

        p {
            font-size: 20px;
            color: #444;
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

<div class="card">
    <h1>Лабораторная работа №1</h1>
    <hr>
    <p>
        <?php
            echo "Привет! Это моя первая лабораторная работа по PHP.";
        ?>
    </p>

    <a href="../index.php">Вернуться на главную</a>
</div>

</body>
</html>