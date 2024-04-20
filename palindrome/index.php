<?php

$mot = readline("Entrer un mot: ");
$inverse = strrev($mot);
  
if ($mot === $inverse) {
        echo " $mot est un palindrome";
 } else {
        echo "$mot n'est pas un palindrome";
}

