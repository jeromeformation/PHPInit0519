<?php
// Récupération du header + navbar
require '../inc/header.php';
// Récupération du traitement
require 'handle-game.php';
?>

<main class="container">
    <h1>Jeu des lettres aléatoires</h1>
    <!-- Création du formulaire de saisie de la lettre -->
    <form method="post">
        <div class="form-group">
            <label for="letter">Choisissez une lettre :</label>
            <input type="text" id="letter" name="letter" maxlength="1" required autofocus>
        </div>
        <input type="submit" value="Vérifier" class="btn btn-outline-info">
    </form>
</main>



<?php
// Récupération du footer
require '../inc/footer.php'
?>
