<?php
include_once "../models/db.php";



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
        <h1>Наш адрес:</h1>
        <p><b>Телефон:</b> 8 495 000-00-00</p>
        <p><b>Адрес:</b> г. Москва, 2-я улица Московская, дом 00</p>
        <p><b>Email:</b> dress@mail.ru</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3c1948155bb548fe663673b36ab421c033da92c82f0cd30937890052e747cb8c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <hr>
        <h2>Напишите нам:</h2>
        <form action="#" class="form-item" method="post">
           <p>
               <label for="display-name">Имя:</label>
               <input type="text" id="display-name" name="display-name" size="30" maxlength="20" placeholder="Введите Имя" required>
            </p>
            <p>
               <label for="display-mail">Email:</label>
               <input type="text" id="display-mail" name="display-mail" size="30" maxlength="20" placeholder="Введите Email" required>
            </p>
            <p>
               <label for="display-text">Тема:</label>
               <textarea id="display-text" cols="37" rows="10" maxlength="400"  required></textarea>
            </p>
            <p><input type="submit"></p>
        </form>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>