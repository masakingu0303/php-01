<?php
$str = "Hello PHP" .PHP_EOL; 
$file = "hellow.txt";
file_put_contents($file, $str,FILE_APPEND);

