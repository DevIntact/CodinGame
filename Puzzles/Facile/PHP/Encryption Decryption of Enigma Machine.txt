<?php

// https://www.codingame.com/training/easy/encryptiondecryption-of-enigma-machine

$o = stream_get_line(STDIN, 256 + 1, "\n");
fscanf(STDIN, "%d", $n);
for ($i = 0; $i < 3; $i++)
{
    $r[] = str_split(stream_get_line(STDIN, 27 + 1, "\n"));
}
$m = str_split(stream_get_line(STDIN, 1024 + 1, "\n"));
$a=range('A','Z');

if($o=='ENCODE') {

    foreach($m as $k=>$v){
        $m[$k]=$a[(array_search($v,$a)+$n+$k)%26];
    }
    for ($i = 0; $i < 3; $i++)
    {
        foreach($m as $k=>$v){
            $m[$k]=$r[$i][array_search($v,$a)];
        }
    }

    echo join($m);

} else {

    $r=array_reverse($r);

    for ($i = 0; $i < 3; $i++)
    {
        foreach($m as $k=>$v){
            $m[$k]=$a[array_search($v,$r[$i])];
        }
    }
    foreach($m as $k=>$v){
        $z=array_search($v,$a)-$n-$k;
        while($z<0)$z+=26;
        $m[$k]=$a[$z];
    }

    echo join($m);

}