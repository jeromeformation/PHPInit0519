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
    sanitizeRadio('ispublished');

    /* Test de la date de création */
    $errorMessageCreatedAt = checkPostDate("createdat");
    var_dump($errorMessageCreatedAt);

    /* Test du nombre de vues */
    $errorMessageNbViews = checkPostNumber('nbviews', 0, 19E19, false);
    var_dump($errorMessageNbViews);

    var_dump($_POST);
}





