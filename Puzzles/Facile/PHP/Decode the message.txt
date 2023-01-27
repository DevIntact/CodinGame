<?php

// https://www.codingame.com/training/easy/decode-the-message

fscanf(STDIN, "%d", $p);
$c = str_split(stream_get_line(STDIN, 200 + 1, "\n"));

while($p >= 0) {

    $e=$p%count($c);
    echo $c[$e];
    $p=floor(($p-count($c))/count($c));

}