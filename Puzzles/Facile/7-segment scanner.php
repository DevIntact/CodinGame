<?php

// https://www.codingame.com/training/easy/7-segment-scanner

$r[]=[' _ ','   ',' _ ',' _ ','   ',' _ ',' _ ',' _ ',' _ ',' _ '];
$r[]=['| |','  |',' _|',' _|','|_|','|_ ','|_ ','  |','|_|','|_|'];
$r[]=['|_|','  |','|_ ',' _|','  |',' _|','|_|','  |','|_|',' _|'];

$line[] = stream_get_line(STDIN, 900 + 1, "\n");
$line[] = stream_get_line(STDIN, 900 + 1, "\n");
$line[] = stream_get_line(STDIN, 900 + 1, "\n");

$g=[];
foreach($line as $l=>$m) {
    $m = str_split($m,3);
    foreach($m as $k=>$v) {
        $a = array_keys($r[$l],$v);
        if(array_key_exists($k,$g))
            $g[$k] = array_intersect($g[$k],$a);
        else
            $g[$k] = $a;
    }
}

$g = call_user_func_array('array_merge', $g);

echo join($g);