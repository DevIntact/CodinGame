<?php

// https://www.codingame.com/training/easy/power-of-thor-episode-1

fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);

$a=$initialTx;
$b=$initialTy;

while (TRUE)
{
    
    fscanf(STDIN, "%d", $remainingTurns);

    $z='';
    if($lightY>$b) {
        $z='S';
        $b++;
    
    } elseif($lightY<$b) {    
        $z='N';
        $b--;    
    }     

    if($lightX>$a) {    
        $z.='E';
        $a++;
    } elseif($lightX<$a) {            
        $z.='W';        
        $a--;
    }
    
    echo("$z\n");
}