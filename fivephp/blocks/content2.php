<?php 
	//импортируем config с настройками подключения
	include "engine/config.php";

	//делаем запрос к нашей БД:

	$sqlOrder = "select * from pictures";

	//запускаем созданную команду на сервере:

	$res = mysqli_query($connect, $sqlOrder);
	while($data = mysqli_fetch_assoc($res)){
		$path1 = $data['path'].$data['name'];
		$pathSecond = $data['path_2'].$data['name2'];
		$galImg = '<a href="'.$pathSecond.'" target="_blank"><img src="'.$path1.'" height="150" width="200" alt="'.$data['name'].'"></a>';
		echo $galImg;
				
	}

	
?>