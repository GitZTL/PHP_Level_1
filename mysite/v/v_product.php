<script>
	window.onload = function() {
		document.getElementById('buy').onclick = function() {
			document.getElementById('buy').style.display = "none";
			document.getElementById('buying_form').style.display = "block";
		};
	}
</script>

<div class="product">
	<h1><span><?= $product["title"] ?></span></h1>
		
		<img id ="pics2" src= "<?=$product["image"]?>" alt="Изображение" title= "<?= $product["title"] ?>" width="150" height="120"><br>

	<span class="content"><?= $product["content"] ?></span>
	<h3><?= $product["price"] ?> Руб.</h3>
	<?php
		if ($user_id) {
			echo "<button id='buy'>Да, все верно, купить</button>
			<div id='buying_form'>
				<span>Какое количество товара?</span>
				<form method='post' name='buying_form'>
					<input type='number' name='count' required>
					<input type='submit' name='button' value='Оформить заказ'>
				</form>
			</div>";
		}
	?>
</div>
<?php if(isset($text)){echo "<script>alert('$text')</script>";}?>