<?php
// On vérifie que le formulaire a été soumis
if(!empty($_POST)) {

    /* Test du nom */

    // L'existence
    if(!array_key_exists('name', $_POST)) {
        var_dump("Le nom n'existe pas !");
    }
    // Le non-nullité
    // Le type
    // Valeur mini
    // Valeur maxi (255)

}