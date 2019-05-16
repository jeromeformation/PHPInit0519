<?php

/**
 * Fonction de génération de la lettre aléatoire
 * @return string Lettre aléatoire générée
 */
function generateAleaLetter(): string {
    // On créé l'alphabet
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    // On génère un nombre entre 0 et 25
    $aleaNumber = rand(0, 25);
    // On retourne une lettre aléatoire
    return $alphabet[$aleaNumber];
}