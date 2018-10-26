<?php
include_once "../models/db_goods.php";


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
        <h1>Личный кабинет</h1>

        <p class="hello">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <hr>
        
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>