<?php

var_dump($_POST);

// On vérifie que le formulaire a été soumis
// $_POST : les variables du formulaires (attribut HTML name)
// empty() : permet de tester "est-ce que c'est vide ?"
// empty($_POST) : si $_POST est vide
// !empty($_POST) : si $_POST n'est pas vide
if(!empty($_POST)) {

    /* Test du nom */

    //// L'existence
    // $_POST : tableau associatif
    // -> clefs : attribut "name" de l'input/textarea
    // -> valeurs : saisi utilisateur
    // array_key_exists() : vérifie si une clef est définie dans un tableau
    // array_key_exists('name', $_POST) : vérifie que la clef "name" existe dans "$_POST"
    // !array_key_exists('name', $_POST) : vérifie si la clef "name" n'existe pas dans "$_POST"

    if(!array_key_exists('name', $_POST)) {
        var_dump("Le nom n'existe pas !");
    } else {
        //// Le non-nullité
        if($_POST['name'] === '') {
            var_dump("Il faut saisir un nom !");
        } else {
            //// Le type
            // pas de verif pour les chaînes de caractères
            //// Valeur mini (0)
            // pas de verif pour les chaînes de caractères
            //// Valeur maxi (255)
            if(strlen($_POST['name']) > 255) {
                var_dump("Le nom est trop long (max 255 caractères)");
            }
        }
    }

}