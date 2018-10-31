<?php
    include "../service/Autoload.php";
    spl_autoload_register([new \twoless\service\Autoloader(), 'loadClass']);
   
/*Весовой товар, создаем новую модель*/
    $productWeight = new \twoless\models\Product_Weight(1000000, "Корм для кошек", "Корм для кошек Perfect Fit",
        "Perfect Fit - это специально разработанный корм, созданный для того, чтобы обеспечить вашу кошку всеми питательными веществами, необходимыми для долгой и здоровой жизни.",
    null, null, 1500, null, "Германия", "10");
    echo "Покупки весового товара: <br><br>";
    echo "Покупка 1 (0.5 кг): {$productWeight->getPrice(0.5)} руб.<br>";
    echo "Покупка 2 (4 кг): {$productWeight->getPrice(4)} руб.<br>";
    echo "Покупка 3 (3.2 кг): {$productWeight->getPrice(3.2)} руб.<br><br>";
    echo "Доход с продаж весового товара: {$productWeight->getTotal()} руб.<br>";
    echo '<hr>';
    var_dump($productWeight);
    echo '<hr>';
/*Штучный товар, создаем новую модель*/
    $productReal = new \twoless\models\Product_Real(2000000, "Шампунь для кошек", "Шампунь для кошек Silky Cat",
    "Шампунь для кошек Silky Cat  разработан на основе масла незрелого кокосового ореха. Шампунь прекрасно очищает и кондиционирует. Не раздражает и не удаляет с кожи и шерсти природных защитных масел. Усиливает яркость всех окрасов, в том числе придает блеск окрасу белого цвета. ",
    null, "250", 1000, "12", "Россия", "100");
    echo "Покупки штучного товара: <br><br>";
    echo "Покупка 1 (4 шт): {$productReal->getPrice(4)} руб.<br>";
    echo "Покупка 2 (2 шт): {$productReal->getPrice(2)} руб.<br>";
    echo "Покупка 3 (1 шт): {$productReal->getPrice(1)} руб.<br><br>";
    echo "Доход с продаж штучного товара: {$productReal->getTotal()} руб.<br><br>";
    echo '<hr>';
    var_dump($productReal);
    echo '<hr>';
/*Цифровой товар, создаем новую модель*/
    $productDigital = new \twoless\models\Product_Digital(3000000, "Аудиокниги", "Алексей Котяров, Виктор Котовась | Воспитание котов (Аудиокнига)",
    "В книге популярно изложены базовые знания, которыми должен обладать каждый владелец для поддержания здоровья своего питомца: о
    выборе котенка, о дегельминтизации, о вакцинации, о стерилизации, о кормлении, о гигиене, о проблеме пожилых кошек,
    затронуты некоторые вопросы ветеринарии и пр.",
    null, null, 970, null, "Россия", null);
    echo "Покупки цифрового товара: <br><br>";
    echo "Покупка 1 (5 шт): {$productDigital->getPrice(5)} руб.<br>";
    echo "Покупка 2 (2 шт): {$productDigital->getPrice(2)} руб.<br>";
    echo "Покупка 3 (2 шт): {$productDigital->getPrice(2)} руб.<br><br>";
    echo "Доход с продаж цифрового товара: {$productDigital->getTotal()} руб.<br><br>";
    echo '<hr>';
    var_dump($productDigital);
    echo '<hr>';


    function sum($products){
    $sum = 0;
    foreach ($products as $product) {
        $sum += $product->getTotal();
    }
    return $sum;
}
echo "<hr>Общий доход составляет: " . sum([$productWeight, $productReal, $productDigital]) . " руб.";