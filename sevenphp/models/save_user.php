<?php


    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) { $pass=$_POST['pass']; if ($pass =='') { unset($pass);} }
    //заносим введенный пользователем пароль в переменную $pass, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($pass)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
         exit ("Заполните, пожалуйста, все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
 //удаляем лишние пробелы
    $login = trim($login);
    $pass = trim($pass);
 // подключаемся к базе
    include 'db.php';

 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($link, "INSERT INTO users (login,pass) VALUES('$login','$pass')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../public/index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>