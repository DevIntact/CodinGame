<?php

// https://www.codingame.com/training/easy/caesar-is-the-chief

$textToDecode = explode(' ',stream_get_line(STDIN, 101 + 1, "\n"));
$r=range('A','Z');

foreach($textToDecode as $k=>$v) {
    for($i=0;$i<26;$i++) {
        $s='';
        foreach(str_split($v) as $l){
            $s.=$r[(array_search($l,$r)+$i)%26];
        }
        if($s=='CHIEF') {
            $z=$i;
            break;
        }
    }
    if(isset($z))break;
}

if(isset($z)) {
    foreach($textToDecode as $k=>$v) {
        $s='';
        foreach(str_split($v) as $l){
            $s.=$r[(array_search($l,$r)+$z)%26];
        }
        $h[]=$s;
    }
    echo join(' ',$h);
} else {
    echo 'WRONG MESSAGE';
}