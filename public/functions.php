<?php

// Déclaration de la fonction
function hello() {
    echo "<p>Bonjour</p>";
}
// Appel de la fonction
hello();

function helloPeople($nameSend) {
    echo "<p>Bonjour $nameSend</p>";
}

helloPeople("John");
helloPeople("Billy");
$nameSend = "Arthur";
helloPeople($nameSend);

function bonjourPeople2($name = "Inconnu") {
    echo "<p>Bonjour $name</p>";
}

bonjourPeople2("Babar");
bonjourPeople2();

function add($a, $b, $c = 0) {
    echo "Résultat : " . ($a + $b + $c);
}

add(10,15);
add(1000,5555);
add(1000,5555, 16666);

function minus($a, $b) {
    return $a - $b;
}

$result1 = minus(10, 4);
$result2 = minus(24343, 6465);
echo '<p>Résultat final : ' . minus($result2, $result1) . '</p>';


$nb1 = 10;
$nb2 = 3;

function multiplication() {
    global $nb1, $nb2;
    $nb1 = 14;
    $nb2 = 100;
    echo "Résultat : " . ($nb1 / $nb2);
}
multiplication();
var_dump($nb1);

/**
 * Division de nombres entiers
 * @param int $a Premier nombre à diviser
 * @param int $b Deuxième nombre à diviser
 * @return float Résultat de la division
 */
function division(int $a, int $b): float {
    return $a / $b;
}

division(10, 25);
$tab = ['banane', "kiwi", "mangue"];
// division(10, $tab); // illegal