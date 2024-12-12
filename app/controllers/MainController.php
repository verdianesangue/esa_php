<?php   

namespace App\Controllers;


class MainController extends Controller{
    function home(){
        
        render('main.home');

    }
    function about(){
        $texte = "Ceci est mon about";
        //app/views/main/about.blade.php
        render('main.about', ['message' => $texte]);
        
    }

}

