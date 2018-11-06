<?php
session_start();

require_once "db.php";
include_once "db_goods.php";

    $query = mysqli_query($link, 'SELECT * FROM `goods` order by `id` asc limit '. $_SESSION['loader'] .', 15'); //limit 15
        if(!mysqli_num_rows($query)){
            if($_SESSION['loader']==0) exit('empty');
            else exit('end');
        }
    $_SESSION['loader']+=15;
    while($row = mysqli_fetch_assoc($query)){
        /*echo '<p>'.$row['id'].'</p>';*/
        $n = mysqli_num_rows($query);
        $gds = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($query);
        $gds[] = $row;

         var_dump($row);

         

    }

    return $gds;
  
    }




?>