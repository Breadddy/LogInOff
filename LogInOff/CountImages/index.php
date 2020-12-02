<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php ob_start(); ?>
<img src="image.php"/>
<img src="image.php"/>
<img src="image.php"/>
<?php
$tag='img src="image.php"'; 
$str='/<\s*'.$tag.'[^>]*>(.*?)/';  
$output=ob_get_flush();
preg_match_all($str, $output,$matches);
$numbOfImages=count($matches[0]);
echo '<br>'.'Изображение выведено '.$numbOfImages.' раз(а)';