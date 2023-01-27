<?php

//https://www.codingame.com/training/easy/defibrillators

fscanf(STDIN, "%s", $lon);
fscanf(STDIN, "%s", $lat);

$lon=str_replace(',','.',$lon);
$lat=str_replace(',','.',$lat);

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $d = explode(';',stream_get_line(STDIN, 256 + 1, "\n"));
    $a= str_replace(',','.',$d[count($d)-2]);
    $b= str_replace(',','.',$d[count($d)-1]);
    $g[$d[1]]=[$a,$b];
}

foreach($g as $k=>$v) {
    $g[$k]=sqrt(($v[0]-$lon)**2+($v[1]-$lat)**2);
}
echo array_search(min($g),$g);