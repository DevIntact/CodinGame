<?php

// https://www.codingame.com/training/easy/parse-sql-queries

$s = explode(' ',str_replace([', ',' = ','ORDER BY'],[',','=','ORDERBY'],stream_get_line(STDIN, 256 + 1, "\n")));
fscanf(STDIN, "%d", $ROWS);
$t = explode(' ',stream_get_line(STDIN, 256 + 1, "\n"));
for ($i = 0; $i < $ROWS; $i++)
{
    $r = explode(' ',stream_get_line(STDIN, 256 + 1, "\n"));
    foreach($t as $k=>$v) $g[$i][$v]=$r[$k];
}

if(in_array('WHERE',$s)) {

    $a=array_search('WHERE',$s);
    $a=explode('=',$s[$a+1]);
    foreach($g as $k=>$v)
        if($v[$a[0]] != $a[1]) unset($g[$k]);

}

if(in_array('ORDERBY',$s)) {

    $a=array_search('ORDERBY',$s);
    $order = array_column($g, $s[$a+1]);
    $sort = constant('SORT_'.$s[$a+2]);
    array_multisort($order, $sort, $g);

}

if($s[1]!='*') {

    $c=explode(',',$s[1]);
    foreach($t as $v)
        if(!in_array($v,$c))
            foreach($g as $k=>$m) unset($g[$k][$v]);
    $t=$c;

}

echo join(' ',$t)."\n";
foreach($g as $k=>$v)
    echo join(' ',$v)."\n";