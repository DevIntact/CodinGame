<?php

// https://www.codingame.com/training/easy/insert-to-string

$s = explode('\n',stream_get_line(STDIN, 256 + 1, "\n"));

fscanf(STDIN, "%d", $changeCount);
for ($i = 0; $i < $changeCount; $i++)
{
    $r = explode('|',stream_get_line(STDIN, 256 + 1, "\n"));
    $g[$r[0]][$r[1]]=$r[2];
}
krsort($g);
foreach($g as $k=>$v){
    krsort($v);
    foreach($v as $p=>$m)
        $s[$k]=substr_replace($s[$k], str_replace("\\n","|",$m), $p, 0);
}
echo str_replace("|","\n",join("\n",$s));