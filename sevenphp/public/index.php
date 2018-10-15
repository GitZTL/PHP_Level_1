<?php
include_once "../models/db_goods.php";
session_start();
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
        <h1>Интернет-магазин платьев</h1>
        <p class="hello">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
        <hr>
        <?php
        $goods = goods_all($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="item">
                    <a href="item.php?id=<?=$good[id]?>"><img src="<?=$good[small_src]?>" alt="<?=$good[name]?>" title="<?=$good[name]?>"></a>
                    <h3 class="item-name"><a href="item.php?id=<?=$good[id]?>"><?=$good[name]?></a></h3>
                    <p class="price"><?=$good[price]?>р.</p>
                    <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
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