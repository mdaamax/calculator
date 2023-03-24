<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];

    switch($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            $result = $number1 / $number2;
            break;
        default:
            $result = "Недопустимая операция";
    }
echo "Результат: " . $result;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="number1">Число №1:</label>
    <input type="number" name="number1" required>

    <label for="number2">Число №2:</label>
    <input type="number" name="number2" required>

    <label for="operation">Операция:</label>
    <select name="operation">
        <option value="add">Сложить</option>
        <option value="subtract">Вычесть</option>
        <option value="multiply">Умножить</option>
        <option value="divide">Разделить</option>
    </select>

    <input type="submit" name="submit" value="Посчитать">
</form>
</body>
</html>