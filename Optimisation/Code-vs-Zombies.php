<?php
/**
 * Save humans, destroy zombies!
 **/


// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d", $x, $y);
    fscanf(STDIN, "%d", $humanCount);
    for ($i = 0; $i < $humanCount; $i++)
    {
        fscanf(STDIN, "%d %d %d", $a, $humanX, $humanY);
        $h[$a]=array($humanX, $humanY);
    }

    fscanf(STDIN, "%d", $zombieCount);


    $d=[];

    for ($i = 0; $i < $zombieCount; $i++)
    {
        fscanf(STDIN, "%d %d %d %d %d", $a, $zombieX, $zombieY, $zombieXNext, $zombieYNext);
    
        $p=floor(sqrt(($zombieX-$x)**2+($zombieY-$y)**2));
        $q=[];
        foreach($h as $v) {
            $q[]=floor(sqrt(($zombieX-$v[0])**2+($zombieY-$v[1])**2));
        }

        if($humanCount<3 && $zombieCount<3) {
            $q=max($q);
            $d[$a]=$q;
        } else {
            $q=min($q);    
            $d[$a]=max([$p,$q]);
        }

        $e[$a]=array($zombieXNext, $zombieYNext);
        
        
    }

    if($humanCount<3 && $zombieCount<3) {
        $d=$e[array_search(max($d),$d)];
    } else {
        $d=$e[array_search(min($d),$d)];
    }


    echo($d[0]." ".$d[1]."\n");
}
?>