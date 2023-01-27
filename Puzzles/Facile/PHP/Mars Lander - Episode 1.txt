<?php

//https://www.codingame.com/training/easy/mars-lander-episode-1

fscanf(STDIN, "%d", $surfaceN);
for ($i = 0; $i < $surfaceN; $i++)
{
    fscanf(STDIN, "%d %d", $landX, $landY);
}

while (TRUE)
{
    fscanf(STDIN, "%d %d %d %d %d %d %d", $X, $Y, $hSpeed, $vSpeed, $fuel, $rotate, $power);

    if ($vSpeed<-35)
        $power = 4;
    else
        $power = 4-$power;
    
    echo("$rotate $power\n");
}