<?php
$file = "hellow.txt";
$array = file($file);
print_r($array);

$text = $array[0];
echo $text;