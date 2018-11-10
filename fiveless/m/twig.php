<?php
include '../Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  $loader = new Twig_Loader_Filesystem('../templates');
  
  $twig = new Twig_Environment($loader);
  
  $template = $twig->loadTemplate('test.tmpl');

 
  $num = rand (0,30);
  $div = ($num % 2);  

  $name = $login;

  echo $template->render(array (
    'name' => $name
    
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>