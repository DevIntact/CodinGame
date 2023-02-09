<?php

// https://www.codingame.com/training/easy/prefix-code

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%s %d", $b, $c);
    $g[$b]=chr($c);
}

fscanf(STDIN, "%s", $s);

$e='';
for($i=0;$i<strlen($s);$i++) {
    $e.=$s[$i];
    if(array_key_exists($e,$g)) {
        $h[]=$g[$e];
        $e='';
    }
    
}

if(!empty($e)) {
    echo 'DECODE FAIL AT INDEX '.(strlen($s)-strlen($e));
} else echo join($h);