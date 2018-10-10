<?php 
	$server = "localhost";
	$login = "root";
	$pass = "";
	$db = "php_1_lesson_6";

	$connect = mysqli_connect($server, $login, $pass, $db);

		if (!$connect) {
    	echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    	echo "<br>Код ошибки errno: " . mysqli_connect_errno();
    	echo "<br>Текст ошибки error: " . mysqli_connect_error();
    	exit;
}
?>