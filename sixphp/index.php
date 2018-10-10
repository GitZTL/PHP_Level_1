<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Домашнее задание №6 (Интернет-магазин)</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div class="container">
<!--header start-->
		<header>
			<div class="header_ins">
				<section></section>
			</div>
		</header>
<!--header end-->

<!---main start-->
		<main>
			<section class="photos">
				<?php
					$tableGoods = 'goods';
					include 'engine/showgoods.php';
				?>
			</section>
		</main>
<!--main end-->

<!--footer start-->
		<footer>
			
		</footer>
<!--footer end-->
	</div>
</body>
</html>