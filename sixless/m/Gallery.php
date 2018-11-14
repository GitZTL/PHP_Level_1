<?php
include_once 'config/db.php';
include 'Twig/Autoloader.php';

	class Gallery{
		public function connectGallery () {
			return new PDO(DRIVER . ':host='. SERVER . ';dbname=' . DB, USERNAME, PASSWORD);
		

		
			$connect = $this->connectGallery();
			$res = $connect->query("SELECT * FROM img ORDER BY id_img ASC LIMIT 15 OFFSET $res ")->fetch();
			return $res;
			
			while ($res){
				$i=0;
   				$items[$i]=$data['max'];
   				$i=$i+1;

		
		Twig_Autoloader::register();

		try {
  			$loader = new Twig_Loader_Filesystem('../templates');

  			$twig = new Twig_Environment($loader);

  			$template = $twig->loadTemplate('gallery.tmpl');

  			$items = $this->getPics();


  			echo $template->render(array (
    		'items' => $items
    		
  		));
  			
		} catch (Exception $e) {
  		die ('ERROR: ' . $e->getMessage());
		}
			}


	}
}


?>