<?php
session_start();
include_once "../models/db_goods.php";
/*include_once "../models/db_goods2.php";*/
$_SESSION['loader'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Интернет-магазин ноутбуков</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body> 
<!--Проверка подключился ли jquery-->
<!--div id="test" onclick="$('#test').hide()">test</div--> 

<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content" id="content">
        <h1>Интернет-магазин ноутбуков</h1>
        <p class="hello">Добро пожаловать в наш интернет-магазин ноутбуков, у нас огромный ассортимент комплектующих и расходных материалов для ремонта ноутбуков, планшетов и телефонов. </p>
        <hr>
        <?php
        
        

        $goods = my_pics($link);
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
        <script type="text/javascript">
            function load_pics(){
                $.get("../models/db_goods2.php", function(data){

                if(data=='empty')
                    $('#content').text('Товары отсутствуют');

                else if(data != 'end')
                    $('#content').append(data);

            }

            );
        }
          
            $(documnet).ready(function(){
            load_pics();
       });    

        </script>
        
    </div>
    <button id="showMore" onclick= "load_pics()">Показать еще</button>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>