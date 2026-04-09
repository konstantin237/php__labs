<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторные работы</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fa;
        }
        .title {
            text-align: center;
            padding: 30px;
            background: white;
            border-bottom: 2px solid #ccc;
        }
        .title h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .title h3 {
            color: #555;
            font-weight: normal;
        }
        .hello-block {
            text-align: center;
            margin: 50px 0;
        }
        .hello1 { color: red; font-size: 32px; }
        .hello2 { color: green; font-size: 42px; }
        .hello3 { color: blue; font-size: 32px; }
        .menu {
            text-align: center;
            margin-top: 50px;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            text-decoration: none;
            color: black;
            border: 1px solid #333;
            border-radius: 10px;
            background: white;
            transition: 0.3s;
        }
        .btn:hover {
            background: #e9f5ff;
            box-shadow: 0 0 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="title">
    <h1>ЛАБОРАТОРНЫЕ РАБОТЫ</h1>
    <h3>Выполнил: [ТВОЁ ФИО]</h3>
</div>
<div class="hello-block">
    <div class="hello1"><?php echo "HELLO WORLD!"; ?></div>
    <hr>
    <div class="hello2"><?php echo "HELLO WORLD!"; ?></div>
    <hr>
    <div class="hello3"><?php echo "HELLO WORLD!"; ?></div>
</div>
<div class="menu">
    <a href="labwork1/lab1.php" class="btn">Лабораторная работа №1</a>
    <a href="labwork2/lab2.php" class="btn">Лабораторная работа №2</a>
    <a href="labwork3/lab3.php" class="btn">Лабораторная работа №3</a>
    <a href="labwork4/lab4.php" class="btn">Лабораторная работа №4</a>
</div>
</body>
</html>