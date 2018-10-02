<?php
	/*print_r($_FILES);*/
 	$path = "img/flow_1/".$_FILES[pic][name];
 	move_uploaded_file($_FILES[pic][tmp_name], $path);
 		
?>