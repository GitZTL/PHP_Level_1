<?php
	$dirMin = "img/flowers_2/";
	$imgMin = scandir($dirMin);

	$dirMax = "img/flowers_1/";
	$imgMax = scandir($dirMax);

	/*print_r($imgMin);*/

	for($i=2; $i<=count($imgMin)-2; $i++){
		$pathToImg = $dirMin.$imgMin[$i];
		$pathTwoToImg = $dirMax.$imgMax[$i];
		$galImg = '<a href="'.$pathTwoToImg.'" target="_blank"><img src="'.$pathToImg.'" height="150" width="200" alt="'.$i.'"></a>';
		echo $galImg;

}

 
?>