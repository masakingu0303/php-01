<?php

$file= "hellowasa.txt";
$handle=@fopen($file,"r");

//エラー処理
if ($handle === false) {
    # code...
    die("can't open file");
}

while (($line=fgets($handle)) !== false) {
    # code...
    echo $line;
}


fclose($handle);