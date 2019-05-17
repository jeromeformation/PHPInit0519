<?php
// Inclusion des fonctions de formulaires
require 'form-functions.php';

// On vérifie que le formulaire a été soumis (méthode POST)
// $_SERVER contient un tas de variables (navigateurs/serveurs)
// La clef "REQUEST_METHOD" contient la méthode HTTP utilisée
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $errorMessageName = checkPostText('name', 255);
    $errorMessageDesc = checkPostText('description', 65535);
    $errorMessagePrice = checkPostNumber('price', 0, 9999999.99);
    sanitizeRadio('ispublished');
    $errorMessageCreatedAt = checkPostDate("createdat");
    $errorMessageNbViews = checkPostNumber('nbviews', 0, 19E19, false);
}





