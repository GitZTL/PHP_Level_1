<?php
if(isset($_GET[id])){
	$id= (int)($_GET[id]);
}
include_once "../models/db_goods.php";
$good = goods_get($link, $id);


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
    <?php 
        if(isset($message)){ 
        echo "<h2>$message</h2>"; 
        } 
    ?> 
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <ul class="breadcrumbs">
            <li><a href="index.php">Главная</a></li> <span>&raquo;</span>
            <li><?=$good[name]?></li>
        </ul>
            <div class="item-content">
                <h2><?=$good[name]?></h2>
                <div class="img-big"><img src="<?=$good[src]?>" alt="<?=$good[name]?>" title="<?=$good[name]?>"></div>
                <div class="item_desc clearfix">
                    <h3>Описание товара:</h3>
                    <div class="short">
                        <p><?=$good[description]?></p>
                    </div>
                    <div class="o-pay">
                        <p class="price"><?=$good[price]?>р.</p>
                        <p class="add-to-basket"><a href="item.php?action=add&id=<?php echo $good[id] ?>" title="Добавить в корзину">Купить</a></p>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>