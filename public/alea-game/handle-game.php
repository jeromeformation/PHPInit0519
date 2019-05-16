<?php
session_start();
// Récupération des fonctions
require 'functions-game.php';

// Génération de la lettre aléatoire si c'est la premiere fois
if(!array_key_exists('letter', $_SESSION)) {
    // On place la lettre aléatoire dans la session
    $_SESSION['letter'] = generateAleaLetter();
}
var_dump($_SESSION['letter']);


// Récupération de la lettre saisie par l'utilisateur (input)
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // On vérifie si la lettre a bien été saisie
    if(array_key_exists('letter', $_POST)) {
        // Récupération de la lettre de l'utilisateur
        $userLetter = $_POST['letter'];
        var_dump($userLetter);

        // On compare la lettre de l'utilisateur avec la lettre générée
        if($userLetter === $_SESSION['letter']) {
            var_dump('Gagné');
        } else {
            var_dump('Perdu');
        }
    }
}
