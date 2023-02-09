<?php

// https://www.codingame.com/training/easy/reverse-minesweeper

fscanf(STDIN, "%d", $w);
fscanf(STDIN, "%d", $h);
for ($i = 0; $i < $h; $i++)
{
    $g[] = str_split(str_replace('.',0,stream_get_line(STDIN, 100 + 1, "\n")));
}
foreach($g as $k=>$v) {

    foreach($v as $m=>$t) {

        if($t=='x') {

            if(array_key_exists($m+1,$v)) {
                if($g[$k][$m+1]!='x')
                $g[$k][$m+1]++;
            }
            if(array_key_exists($m-1,$v)) {
                if($g[$k][$m-1]!='x')
                $g[$k][$m-1]++;
            }
            if(array_key_exists($k-1,$g)) {
                if($g[$k-1][$m]!='x')
                $g[$k-1][$m]++;
                if(array_key_exists($m-1,$g[$k-1])) {
                    if($g[$k-1][$m-1]!='x')$g[$k-1][$m-1]++;
                }
                if(array_key_exists($m+1,$g[$k-1])) {
                    if($g[$k-1][$m+1]!='x')$g[$k-1][$m+1]++;
                }
            }
            if(array_key_exists($k+1,$g)) {
                if($g[$k+1][$m]!='x')$g[$k+1][$m]++;
                if(array_key_exists($m-1,$g[$k+1])) {
                    if($g[$k+1][$m-1]!='x')$g[$k+1][$m-1]++;
                }
                if(array_key_exists($m+1,$g[$k+1])) {
                    if($g[$k+1][$m+1]!='x') $g[$k+1][$m+1]++;
                }
            }

        }

    }

}
foreach($g as $v){
    $d=str_replace(0,'.',join($v));
    $d=str_replace('x','.',$d);
    echo $d."\n";
}