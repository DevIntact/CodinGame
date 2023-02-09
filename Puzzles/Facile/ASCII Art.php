<?php

// https://www.codingame.com/training/easy/ascii-art

fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);
$t = str_split(strtoupper(stream_get_line(STDIN, 256 + 1, "\n")));
$r=range('A','Z');
$r[]='?';

for ($i = 0; $i < $H; $i++)
{
    $a=stream_get_line(STDIN, 1024 + 1, "\n");
    $g[] = str_split($a,$L);
}
for ($i = 0; $i < $H; $i++)
{
    foreach($t as $v) {
        $x=array_search($v,$r);
        if($x!==false)
        echo $g[$i][$x];
        else echo $g[$i][26];
    }
    echo"\n";
}

