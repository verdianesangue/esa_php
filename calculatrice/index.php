<?php

$nombre1 = readline("Entrer un premier nombre : ");
$nombre2 = readline("Entrez un deuxieme nombre : ");

$nombre1 = (int)($nombre1);
$ok = true;
do{
    if (is_numeric($nombre1) && is_numeric($nombre2)) {
        $ok = True;
     } else{
        echo"voyons";
    }
} while ($ok === False);
$nombre2 = (int)($nombre2);

$choix = readline("faites un choix: \n
1 pour addition 
2 pour multiplication 
3 pour soustraction 
4 pour division 
5 pour modulo 
6 pour quitter \n" ); 

do{
    if ($choix == (int)(1)) {
        $result = $nombre1 + $nombre2;
        echo $nombre1 . "+" . $nombre2 . " = " . $result . "\n";
    }
    elseif ($choix == (int)(2)) {
        $result = $nombre1 * $nombre2;
        echo $nombre1 . "*" . $nombre2 . " = " . $result . "\n";
    }
    elseif ($choix == (int)(3)) {
        $result = $nombre1 - $nombre2;
        echo $nombre1 . "-" . $nombre2 . " = " . $result . "\n";
    }
    elseif ($choix == (int)(4)) {
        if ($nombre2 != 0) {
            $result = $nombre1 / $nombre2;
        echo $nombre1 . "/" . $nombre2 . " = " . $result . "\n";
        }
        else {
            echo" division par 0 impossible";
        }
        
    }
    elseif ($choix == (int)(5))  {
        $result = $nombre1 % $nombre2;
        echo $nombre1 . "%" . $nombre2 . " = " . $result . "\n";
    }
    else{
        exit("au revoir \n");
    }
    $choix = readline("faites un choix: 
    1 pour addition 
    2 pour multiplication 
    3 pour soustraction 
    4 pour division 
    5 pour modulo 
    6 pour quitter
    " ); 
} while (true);