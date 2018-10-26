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
   // $result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
   // $myrow = mysqli_fetch_array($result);
    //if (!empty($myrow['id'])) {

    //exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
   
    //}

 // проверка 2 на существование пользователя с таким же логином-----------------------------
    $result = mysqli_query($link, "SELECT pass FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (($myrow['pass']== $pass) && ($myrow['pass']!="admin")) {

    $_SESSION["username" ] = $login;
    $_SESSION["password" ] = $pass;
    
    
       header('Location: ../public/index.php');
       exit;
    }else if(($myrow['pass']== $pass) && ($myrow['pass']=="admin")){
        $_SESSION["admin" ] = $login;
        $_SESSION["password" ] = $pass;
    
    
       header('Location: ../public/index.php');
       exit;
    }
    else{
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }  
 //----------------------------------------------------------------------------------------------   
 // если такого нет, то сохраняем данные 3-user, 1 - admin
    $result2 = mysqli_query ($link, "INSERT INTO users (login,pass,role) VALUES('$login','$pass',3)");
    
    $_SESSION["username" ] = $login;
    $_SESSION["password" ] = $pass;
    
    if ($result2=='TRUE')
    {

       header('Location: ../public/index.php');

    /*echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../public/index.php'>Главная страница</a>";*/
  
    }
    else {
    echo "Ошибка! Вы не зарегистрированы.";
    }

?>