<?php
session_start();

require_once "../config/config.php";

$link = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ".mysqli_error($link));
if(!mysqli_set_charset($link, "utf8")){
    printf("Error: ".mysqli_error($link));
}


function userHello(){
	if(!isset($_SESSION["username"])&&(!isset($_SESSION["admin"]))){
		echo "Вы зашли как незарегистрированный посетитель";
	} else if(isset($_SESSION["admin"])){
		echo "Вы вошли как: " . $_SESSION["admin"] . " !";
	} else {
		echo "Вы вошли как: " . $_SESSION["username"] . " !";
	}
}



/*-----------------------------------------------------*/
function showMenu(){
	if (isset($_SESSION["username"])){
        echo "<li><a href='../public/cartview.php'>Корзина</a></li>";
        echo "<li><a href='../public/cartview.php'>Кабинет</a></li>";
        echo "<li><a href='private.php'>Отмена регистрации</a></li>";
    }else if(isset($_SESSION["admin"])){
    	echo "<li><a href='../admin/index.php'>Админ</a></li>";
    	echo "<li><a href='private.php'>Отмена регистрации</a></li>";
    }else{
    	echo "<li><a href='../public/private.php'>Rегистрация</a></li>";
    }
}

