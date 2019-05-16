<?php
// Récupération des fonctions
require 'functions-game.php';

// Génération de la lettre aléatoire
$aleaLetter = generateAleaLetter();
var_dump($aleaLetter);

// Récupération de la lettre saisie par l'utilisateur (input)
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if(array_key_exists('letter', $_POST)) {
        $userLetter = $_POST['letter'];
        var_dump($userLetter);

        if($userLetter === $aleaLetter) {
            var_dump('Gagné');
        } else {
            var_dump('Perdu');
        }
    }
}





