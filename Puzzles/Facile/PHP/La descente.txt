<?

// https://www.codingame.com/training/easy/the-descent

while (TRUE)
{
    $m=[];
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d", $a);
        $m[]=$a;
    }
    arsort($m);
    echo array_key_first($m)."\n";
}