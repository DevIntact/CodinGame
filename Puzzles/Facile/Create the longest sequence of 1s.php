<?php

// https://www.codingame.com/training/easy/create-the-longest-sequence-of-1s

$a=$b=stream_get_line(STDIN, 999 + 1, "\n");
for($i=0;$i<strlen($a);$i++) {
    $a[$i]=1;
    $z=explode(0,$a);
    $g[]=strlen(max($z));
    $a=$b;
}
echo max($g);