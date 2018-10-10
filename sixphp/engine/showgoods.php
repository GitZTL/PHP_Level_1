<?php
	
	include 'connect.php';

	$sql = "select * from goods order by price desc";

	$res = mysqli_query($connect, $sql);

	/*while($data = mysqli_fetch_assoc($res)){
		echo $data['id']. "стоит" . $data['price'] . " руб. ";
	}*/

	if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        $picmin = $row["path"].$row["name"];//путь к фотке
       
        
        echo '<div class ="imgContainer">';
        echo '<div class="imagelittle">';
        echo '<div class="text_descr">';
        echo $row["short_desc"] . ":  Цена: " .$row["price"] . " руб. " .'<br>';
        echo '<a href=engine/fullpage.php?id='.$row["id"].'&db='.$tableGoods.' target="_blank"><img src="'.$picmin.'"  alt="'.$row["id"].'"></a>';
        echo '<form action="engine/order.php" method = "GET"><button class="buy_now">Заказать</button></form>';
        echo '</div>';
        echo '</div></div>';

            
    }
} else {
    echo "Изображений в БД не найдено";
}

mysqli_close($connect);

?>