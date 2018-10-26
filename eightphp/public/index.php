<?php
include_once "../models/db_goods.php";
	if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION[$login][$id])){ 
              
            $_SESSION[$login][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM goods WHERE id ={$id}"; 
            $query_s=mysqli_query($link, $sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s = mysqli_fetch_array($query_s); 
                  
                $_SESSION[$login][$row_s['id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="Такого товара нет в наличии!"; 
                  
            } 
              
        } 
          
    } 

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
		<h5><?php echo userHello();?></h5>
		
        <h1>Интернет-магазин платьев</h1>

        <p class="hello">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        <hr>
        <?php

            if(isset($message)){ 
                echo "<h2>$message</h2>"; 
            } 
       
        
        $goods = goods_all($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good[id]?>"><img src="<?=$good[small_src]?>" alt="<?=$good[name]?>" title="<?=$good[name]?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good[id]?>"><?=$good[name]?></a></h3>
                    <p class="price"><?=$good[price]?>р.</p>
                    <p class="add-to-basket"><a href="index.php?action=add&id=<?php echo $good[id] ?>" title="Добавить в корзину">Купить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>