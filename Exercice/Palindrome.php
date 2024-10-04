<?php
class Palindrome{
  
    function palindrome(){
        $mot = "miraculous";
        $palindrome = strrev($mot);
        if($mot == $palindrome){
          echo 'coucou';
        } 
        else{
            $resultat = str_shuffle($mot);
            echo "le mot est: ". $resultat . "<br>". strlen($resultat) . " lettres";
        }
    
    }
}