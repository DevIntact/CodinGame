<?

// https://www.codingame.com/training/easy/metric-units

$e = explode(' + ',stream_get_line(STDIN, 50 + 1, "\n"));

$r=['km'=>1000,'m'=>1,'dm'=>0.1,'cm'=>0.01,'mm'=>0.001,'um'=>0.000001];

$am=preg_replace('/[\d\.]/','',$e[0]);
$ad=preg_replace('/[^\d\.]/','',$e[0]);

$bm=preg_replace('/[\d\.]/','',$e[1]);
$bd=preg_replace('/[^\d\.]/','',$e[1]);

$c=array_search(min($r[$am],$r[$bm]),$r);
$d=$r[$am]/$r[$bm]*$ad+$bd;

echo $d.$c;