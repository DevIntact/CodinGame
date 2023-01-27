<?php

// https://www.codingame.com/training/easy/mime-type

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $Q);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s", $e, $m);
    $g[strtolower($e)]=$m;
}

for ($i = 0; $i < $Q; $i++)
{
    $f = explode('.',strtolower(stream_get_line(STDIN, 256 + 1, "\n")));
    
    if(count($f)>1) {
		$f=array_pop($f);
		if(array_key_exists($f,$g)) {
			echo $g[$f]."\n";
		} else echo("UNKNOWN\n");
	} else echo("UNKNOWN\n");
}
