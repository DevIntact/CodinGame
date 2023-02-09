<?php

// https://www.codingame.com/training/easy/retro-typewriter-art

$s = explode(' ',stream_get_line(STDIN, 1000 + 1, "\n"));

$r=['sp'=>' ','bS'=>'\\','sQ'=>"'",'nl'=>"\n"];
foreach($s as $v) {
    $x=$v[0];
    $a=substr($v,1);
    if(!ctype_digit($x)) {
        $x=1;
        $a=$v;
    } else{
        if(ctype_digit($v)) {
            $x=substr($v,0,-1);
            $a=substr($v,-1);
        } else {
            $x=preg_replace('/[^\d]/i','',$v);
            $a=preg_replace('/[\d]/i','',$v);
        }
    }
    if(array_key_exists($a,$r)) {
        echo str_repeat($r[$a],$x);
    } else {
        echo str_repeat($a,$x);
    }    
}