<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Интернет-магазин платьев</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
    <div id="container">
        <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <h5><?php echo userHello();?></h5>
	       <h2>Регистрация</h2>
            <form action="../models/save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
        <p>
            <label>Ваш пароль:<br></label>
            <input name="pass" type="password" size="15" maxlength="15">
        </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
        <p>
            <input type="submit" name="submit" value="Регистрация / Вход">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
           
        </p>
        </form>
        <form action="../public/signout.php" method="post">
            <p>
             <input type="submit" name="logout" value="Отмена регистрации"> 
            </p>
        </form>
        </div>
        <footer>
        <? include "../templates/footer.php"; ?>
        </footer>
    </div>
</body>
</html>