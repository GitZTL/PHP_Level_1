<?php
    session_start();
    include_once "../models/db_goods.php";
    include_once "../models/cart.php";
    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 

        if($val==0) { 
        unset($_SESSION[$login][$key]);


        }else{ 
        $_SESSION[$login][$key]['quantity']=$val; 
        } 
    } 
          
} 

    /*if(isset($_POST['makeOrder'])){
        $userId = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
        $idCart = 
        $idGood = 
        $count = 

        $insert = "INSERT INTO cart (id_cart, id_good, count) VALUES ('', '1000', '0')";
        mysqli_query($link, $insert);
    }*/


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
        <h1>Корзина</h1>

        <p class="hello">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
        <hr>
                    
    <form method="post">
        <table id="cart_table">
            <tr>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена за 1 шт</th>
                <th>Подитог</th>
            </tr>
              
        <?php
            if (isset($_SESSION[$login])){
                /*---------------------------------------------------------------------------*/
                echo "Вы выбрали:"; 
                $sql="SELECT * FROM goods WHERE id IN ("; 
                      
                foreach($_SESSION[$login] as $id => $value) { 
                    $sql.=$id.","; 
                } 
                      
                $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
                $query=mysqli_query($link, $sql); 
                $totalprice=0; 
                while($row=mysqli_fetch_assoc($query)){ 
                    $subtotal=$_SESSION[$login][$row['id']]['quantity']*$row['price']; 
                    $totalprice+=$subtotal; 
                    
                ?> 
                <tr> 
                    <td><?php echo $row['name'] ?></td> 
                    <td><input type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION[$login][$row['id']]['quantity'] ?>" /></td> 
                    <td><?php echo $row['price'] ?> руб.</td> 
                    <td><?php echo $_SESSION[$login][$row['id']]['quantity']*$row['price'] ?> руб.</td> 
                </tr> 


                <?php 
                      
                }

            } /*-----------------------------------------------------------------------------*/
            else{

                echo "Ваша корзина пока пуста!";
            }
                        
        ?> 
            
        <tr> 
            <td colspan="4">Общий итог: <?php echo $totalprice ?> руб.</td> 
        </tr>     

        </table>
        <br /> 
        <button type="submit" name="submit">Обновить корзину</button> 
        <button type="submit" name="makeOrder">Оформить заказ</button> 
    </form>
        <br /> 
        <p>Для удаления товара из списка покупок, поставьте количество = 0 </p>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>