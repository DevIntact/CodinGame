<?php


// https://www.codingame.com/training/easy/unary

$m = str_split(stream_get_line(STDIN, 100 + 1, "\n"));
$e='';
foreach($m as $v)$e.=str_pad(decbin(ord($v)),7,0,STR_PAD_LEFT);

$g=[];
$x=1;

$e=str_split($e);
foreach($e as $k=>$v) {
    if($k>0) {

        if($v!=$e[$k-1]) {
            $g[]=str_repeat('0',$x);
            if($v==1) {
                $g[]='0';
            } else {
                $g[]='00';
            }
            $x=1;
        } else {
            $x++;
        }

    } else {
        if($v==1) {
            $g[]='0';
        } else {
            $g[]='00';
        }
    }
}
$g[]=str_repeat('0',$x);


echo join(' ',$g);