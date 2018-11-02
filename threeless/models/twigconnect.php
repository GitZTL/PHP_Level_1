<?php
//коннект;

include 'db.php';

// получаем ассоциативный массив из БД
function images_all($link){
$query = "SELECT * FROM images";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $images = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $images[] = $row;
    }

    return $images;
}
// подгружаем и активируем авто-загрузчик Twig-а
require_once '../Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('../templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
  
  // подгружаем шаблон
  $template = $twig->loadTemplate('images.tmpl');
  
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  $images = images_all($link); 
  $n = count($images);
  


  $content = $template->render(array(
    'images' => $images,
    'n' => $n
  ));
  
  echo "$content";

  /*print_r($images);*/
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>