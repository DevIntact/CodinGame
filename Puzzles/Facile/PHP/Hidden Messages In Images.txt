<?php

// https://www.codingame.com/training/easy/hidden-messages-in-images

fscanf(STDIN, "%d %d", $w, $h);
$pixel = '';
for ($i = 0; $i < $h; $i++)
{
    $inputs = explode(" ", fgets(STDIN));
   
    for ($j = 0; $j < $w; $j++)
    {
        $pixel.= substr(decbin(intval($inputs[$j])),-1);
    }
    
}
$pixel = str_split($pixel,8);
foreach($pixel as $v)echo chr(bindec($v));