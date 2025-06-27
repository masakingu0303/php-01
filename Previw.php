<?php
//if文の条件分岐

$daice = 6;

if ($daice >= 4) {
    echo "Win";
    $daice--;
} elseif ($daice === 3) {
    echo "drow";
    $daice--;
} else {
    echo "lose";
    $daice--;
}
  
