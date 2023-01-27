<?php

// https://www.codingame.com/training/easy/the-river-i-

fscanf(STDIN, "%d", $r1);
fscanf(STDIN, "%d", $r2);

$g=[$r1];
$h=[$r2];

for($i=1;$i<99999;$i++) {
    $g[]=$g[$i-1]+array_sum(str_split($g[$i-1]));
}
for($i=1;$i<99999;$i++) {
    $h[]=$h[$i-1]+array_sum(str_split($h[$i-1]));
}

$z=array_values(array_intersect($g,$h));

echo $z[0];