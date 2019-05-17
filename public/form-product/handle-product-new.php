<?php
// Inclusion des fonctions de formulaires
require 'form-functions.php';

// On vérifie que le formulaire a été soumis (méthode POST)
// $_SERVER contient un tas de variables (navigateurs/serveurs)
// La clef "REQUEST_METHOD" contient la méthode HTTP utilisée
if($_SERVER['REQUEST_METHOD'] === "POST") {

    /* Test du nom */
    $errorMessageName = checkPostText('name', 255);
    var_dump($errorMessageName);
    /* Test de description */
    $errorMessageDesc = checkPostText('description', 65535);
    var_dump($errorMessageDesc);
    /* Test du prix */
    $errorMessagePrice = checkPostNumber('price', 0, 9999999.99);
    var_dump($errorMessagePrice);

    /* Test checkbox etat publication */
    if (!array_key_exists('ispublished', $_POST)) {
        $_POST['ispublished'] = false;
    } else {
        $_POST['ispublished'] = true;
    }

    // syntaxe alternative
    // $_POST['ispublished'] = (array_key_exists('ispublished', $_POST));


    /* Test de la date de création */
    //// Existence
    if (!array_key_exists('createdat', $_POST)) {
        var_dump("La date de création n'existe pas !");
    } else {
        //// La non-nullité
        if ($_POST['createdat'] === '') {
            var_dump("Il faut saisir la date de création!");
        } else {
            // On décompose la date de création en 3 parties
            $tabCreatedAt = explode('-', $_POST['createdat']);
            // On vérifie qu'on a bien les 3 composantes de la date
            if(sizeof($tabCreatedAt) === 3) {
                // On vérifie si la date est correcte
                if(!checkdate($tabCreatedAt[1], $tabCreatedAt[2], $tabCreatedAt[0])){
                    var_dump("Il faut saisir une date valide!");
                }
            } else {
                var_dump("Il faut saisir une date valide!");
            }
        }
    }

    /* Test du nombre de vues */
    $errorMessageNbViews = checkPostNumber('nbviews', 0, 19E19, false);
    var_dump($errorMessageNbViews);

}





