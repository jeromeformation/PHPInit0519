<?php

// Création
$tableau = []; // $tableau = [];

// Ajout
$tableau['letter'] = "a";
$tableau['cpt'] = 46;

var_dump($tableau);

// Création
session_start(); // $_SESSION = []

// Ajout
$_SESSION['letter'] = "b";
$_SESSION['cpt'] = 47;

var_dump($_SESSION);



$nombreAleatoire = rand(0 ,15);

$_SESSION['nombre'] = $nombreAleatoire;


function modifGlobal() {
    $name = "Arthur";
    return $name;
}

$name = "John";
echo $name;
$name = modifGlobal();
echo $name;




