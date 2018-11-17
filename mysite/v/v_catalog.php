<main>
	
	<?php
		if (isset($catalog)) {
			foreach ($catalog as $product) {
				echo '<div id ="pics"><a href="index.php?c=page&act=product&id=' . $product["id"] . '"><img src="'. $product["image"] . '" alt="Изображение" title="'. $product["title"] . '" width="150" height="120"></a>
				<span>'. $product["title"] . '</span><br><span>'. $product["price"] . " руб " . '</span><br><p class="add-to-basket"><a href="index.php?c=page&act=product" title="Добавить в корзину">Купить</a></p></div>';
			}
		}
	?>
	
</main>