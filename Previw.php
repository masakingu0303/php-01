<?php
//if文の条件分岐


$daice = (int) $argv[1];

/*
$daiceB = "6";
$daiceC = (int) $diceB; //整数型になる
*/


if ($daice >= 4) {
    echo "Win";
} elseif ($daice === 3) {
    echo "drow";
} else {
    echo "lose";
}
  

  
