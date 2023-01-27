<?php

// https://www.codingame.com/training/easy/unique-prefixes

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s", $word);
    $g[]=str_split($word);
}

foreach($g as $k=>$v) {
    foreach($g as $m=>$t) {
        if($k != $m){
            $s='';
            foreach($v as $p=>$l){
                if($l!=$t[$p]) {
                    $s.=$l;
                    break;
                } else $s.=$l;
            }
            $h[$k][]=$s;
        }
    }   
}
foreach($h as $v) echo max($v)."\n";