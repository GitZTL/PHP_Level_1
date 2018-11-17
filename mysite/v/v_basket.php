<table border="1px">
	<tr>
		<th>Наименование товара</th>
		<th>Количество (шт.)</th>
		<th>Цена за ед. товара (руб.)</th>
		<th>Сумма покупок(руб.)</th>
		<th>Действие</th>
	</tr>
	<?php
		//$order = 0;
		if (isset($products)) {
			foreach ($products as $product) {
				echo "<tr><td>" . $product["title"] . "</td><td>" . $product["count"] . "</td><td>" . $product["price"] . "</td><td>" . $product["count"] * $product["price"] . "</td><td><form method='post' name='delete_form'><input type='hidden' name='order' value='" . $product["order_id"] . "'><input type='submit' name='submit' value='Удалить товар'></form></td></tr>";
				var_dump( $products['title']);
				//$order += $product["count"] * $product["price"];
			}
			
		}
	?>
</table>
<h2><?= "Итоговая сумма заказов: " . $order . " Руб."?></h2>