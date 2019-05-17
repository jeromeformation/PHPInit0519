<?php

/**
 * Verification la clef dans la superglobale POST et renvoie
 * l'éventuel message d'erreur
 * @param string $key La clef située dans $_POST
 * @param int $max Le nombre de caractères maximum autorisé
 * @return string L'éventuel message d'erreur
 */
function checkPostText(string $key, int $max): string {
    //// L'existence
    // $_POST : tableau associatif
    // -> clefs : attribut "name" de l'input/textarea
    // -> valeurs : saisi utilisateur
    // array_key_exists() : vérifie si une clef est définie dans un tableau
    // array_key_exists('name', $_POST) : vérifie que la clef "name" existe dans "$_POST"
    // !array_key_exists('name', $_POST) : vérifie si la clef "name" n'existe pas dans "$_POST"

    if(!array_key_exists($key, $_POST)) {
        $message = "Merci de saisir une valeur";
    } else {
        //// La non-nullité
        if($_POST[$key] === '') {
            $message = "Merci de saisir une valeur";
        } else {
            //// Le type
            // pas de verif pour les chaînes de caractères
            //// Valeur mini (0)
            // pas de verif pour les chaînes de caractères
            //// Valeur maxi (255)
            if(strlen($_POST[$key]) > $max) {
                $message = "La valeur saisie est trop longue (max $max caractères)";
            }
        }
    }
    return $message;
}