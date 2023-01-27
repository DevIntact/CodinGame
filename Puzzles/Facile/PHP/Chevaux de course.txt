<?php

// https://www.codingame.com/training/easy/horse-racing-duals

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $pi);
    $g[]=$pi;
}
sort($g);
foreach($g as $k=>$v) {
    if($k>0) {
        $h[]=$v-$g[$k-1];
    }
}

echo min($h);