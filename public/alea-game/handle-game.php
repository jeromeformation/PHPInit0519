<?php
// Démarrage de la session (si elle n'existe pas)
session_start();
// Récupération des fonctions
require 'functions-game.php';

// On définit le nombre d'essais
const NB_ESSAIS = 5;

// Génération de la lettre aléatoire si c'est la premiere fois
if(!array_key_exists('letter', $_SESSION)) {
    // On place la lettre aléatoire dans la session
    $_SESSION['letter'] = generateAleaLetter();
    // On place un compteur dans la session : il représente le nombre d'essais ratés
    $_SESSION['nb-essais'] = 0;
}

var_dump("Lettre en session : " . $_SESSION['letter']);
var_dump("Nombre d'essais en session : " . $_SESSION['nb-essais']);

// Récupération de la lettre saisie par l'utilisateur (input)
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    var_dump("Lettre soumise : " . $_POST['letter']);
    // On vérifie si la lettre a bien été saisie
    if(!array_key_exists('letter', $_POST) || $_POST['letter'] === '') {
        // Si la lettre n'est pas présente => demande de saisie
        var_dump("Veuillez saisir une lettre pour jour ! ");
    } elseif ($_POST['letter'] === $_SESSION['letter']) {
        // Si la lettre saisie est égale à la lettre de la session => c'est gagné
        var_dump("C'est gagné ! ");
        // Recommencer le jeu (on vide TOUTES les variables de la session)
        session_unset();
    } elseif ($_SESSION['nb-essais'] === NB_ESSAIS) {
        // S'il dépasse le nombre d'essais => c'est fini => on recommence
        var_dump("Vous avez dépassé votre nombre d'essais, le jeu est fini ! On recommence !");
        // Recommencer le jeu (on vide TOUTES les variables de la session)
        session_unset();
    } else {
        // S'il n'a pas gagné => il a perdu !
        var_dump("La lettre saisie est mauvaise, vous pouvez réessayer !");
        // On augmente le nombre d'essais dans la session
        $_SESSION['nb-essais'] += 1;
    }
}