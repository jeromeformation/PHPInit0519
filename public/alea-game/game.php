<?php
// Récupération du header + navbar
require '../inc/header.php';
// Récupération du traitement
require 'handle-game.php';
?>

<main class="container">
    <h1>Jeu des lettres aléatoires</h1>
    <?php if(!empty($resultMessage)) : ?>
        <h2>Résultat</h2>
        <p><?= $resultMessage; ?></p>
    <?php endif; ?>
    <!-- Création du formulaire de saisie de la lettre -->
    <form method="post">
        <div class="form-group">
            <label for="letter">Choisissez une lettre :</label>
            <input type="text" id="letter" name="letter" maxlength="1" required autofocus>
        </div>
        <input type="submit" value="Vérifier" class="btn btn-outline-info">
    </form>


    <p id="message" data-message="<?= $resultMessage; ?>">Blabla</p>
</main>

<script>
    let paragraphe = document.querySelector("#message");
    console.log(paragraphe);
    console.log(paragraphe.getAttribute("data-message"));
</script>


<?php
// Récupération du footer
require '../inc/footer.php'
?>
