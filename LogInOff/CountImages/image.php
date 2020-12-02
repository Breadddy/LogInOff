<?php
header("Content-type: image/jpeg"); 
$img = imageCreateFromJpeg('logo.jpg');
imageJpeg($img);

