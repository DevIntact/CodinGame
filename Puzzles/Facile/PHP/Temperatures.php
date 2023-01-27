<?php

// https://www.codingame.com/training/easy/temperatures

fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); 
    $g[$t]=abs($t);
}
krsort($g);
if(empty($g)) {
    echo 0;
} else echo array_search(min($g),$g);