<?php

/**
 * Verification la clef dans la superglobale POST et renvoie
 * l'éventuel message d'erreur
 * @param string $key La clef située dans $_POST
 * @param int $max Le nombre de caractères maximum autorisé
 * @return string L'éventuel message d'erreur
 */
function checkPostText(string $key, int $max): string {
    // On teste l'existence et la non-nullité
    if(!array_key_exists($key, $_POST) || $_POST[$key] === '') {
        $message = "Merci de saisir une valeur";
        // On teste la valeur max
    } elseif(strlen($_POST[$key]) > $max) {
        $message = "La valeur saisie est trop longue (max $max caractères)";
    }
    // On retourne l'éventuel message ou une chaîne de caractères vide
    return $message ?? '';
}