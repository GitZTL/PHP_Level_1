<?php
	include 'connect.php';

	  
	$tpl = file_get_contents('fullpage.tpl');
	$id = $_GET['id'];
	$db = $_GET['db'];
	$sql = "SELECT * FROM $db WHERE id=$id";
	$result = mysqli_query($connect, $sql);
	$sqlseen = "UPDATE $db SET views=views+1 WHERE id=";

	if (mysqli_num_rows($result) != 0) {
    	$sqlresult = mysqli_query($connect, $sqlseen.$id);
    	$row = mysqli_fetch_assoc($result);
    	$bigimg ='.'. $row["path"].$row["name"];
    	$content = '<img src="'.$bigimg.'" alt="pic" style="width: 50%;">';
    	$content .= "<br>Просмотров фото: ".($row["views"]+1) ."<br>" . "<p>Описание: " . "<br>" . $row["long_desc"] . "</p>";
    	$title = 'picture id='.$id;

	} else {
    	echo "<h3>В базе $db нет изображения с id=".$id."!</h3>";
    	echo '<br><a href="/">Вернуться на главную страницу</a>';
	}

	mysqli_close($connect);

	$patterns = array( '/{title}/', '/{content}/',);
	$replace = array( $title, $content);
	echo preg_replace( $patterns, $replace, $tpl );
?>