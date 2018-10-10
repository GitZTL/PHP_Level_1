<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Homework_6_Zlenko_Tatiana</title>
</head>

<body style="width:70%; margin:20 auto;">
<h2>Калькулятор</h2>

<hr>


<form action="" method="post">
	<?include 'calcEngine.php'?>
    <input name="numOne" type="text" value="<?= $numOne ?>"><br><br>
    <input name="numTwo" type="text" value="<?= $numTwo ?>"><br><br>
    <input name="res" type="text" value="<?= $res ?>" disabled/><br><br>

    <select name="action" onchange="submit()">
        <option value="">Выберите действие</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input name="action" value="+" type="submit">
    <input name="action" value="-" type="submit">
    <input name="action" value="*" type="submit">
    <input name="action" value="/" type="submit">
    <input name="reset" value="Сброс" type="submit">
</form>

</body>
</html>

