<?php
// Inclusion du HTML d'en tête + navbar
require '../inc/header.php';
// Inclusion du fichier PHP de traitement du formulaire
require 'handle-product-new.php';

?>

<main class="container">

    <h1>Ajout d'un produit</h1>

    <form method="post">

        <?php  // createInputText('name', 255, "Nom") ?>

        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text"
                   class="form-control <?= (isset($errorMessageName) && !empty($errorMessageName)) ? 'is-invalid' : '' ?>"
                   id="name" name="name" value="<?= $_POST['name']  ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessageName ?? "" ?></div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control <?= (isset($errorMessageDesc) && !empty($errorMessageDesc)) ? 'is-invalid' : '' ?>"
                      id="description" rows="3" name="description"><?= $_POST['description'] ?? '' ?></textarea>
            <div class="invalid-feedback"><?= $errorMessageDesc ?? "" ?></div>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" min="0" step="0.01"
                   class="form-control <?= (isset($errorMessagePrice) && !empty($errorMessagePrice)) ? 'is-invalid' : '' ?>"
                   id="price" name="price" value="<?= $_POST['price'] ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessagePrice ?? "" ?></div>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox"
                   class="custom-control-input" id="ispublished" name="ispublished">
            <label class="custom-control-label" for="ispublished">Le produit doit-il être publié ?</label>
        </div>
        <div class="form-group">
            <label for="createdat">Date de création</label>
            <input type="date"
                   class="form-control <?= (isset($errorMessageCreatedAt) && !empty($errorMessageCreatedAt)) ? 'is-invalid' : '' ?>"
                   id="createdat" name="createdat" <?= $_POST['createdat'] ?? '' ?>>
            <div class="invalid-feedback"><?= $errorMessageCreatedAt ?? "" ?></div>
        </div>
        <div class="form-group">
            <label for="nbviews">Nombre de vues</label>
            <input type="number" min="0"
                   class="form-control <?= (isset($errorMessageNbViews) && !empty($errorMessageNbViews)) ? 'is-invalid' : '' ?>"
                   id="nbviews" name="nbviews" <?= $_POST['nbviews'] ?? '' ?>>
            <div class="invalid-feedback"><?= $errorMessageNbViews ?? "" ?></div>
        </div>

        <input type="submit" value="Créer le produit" class="btn btn-outline-success">

    </form>



</main>

<?php require '../inc/footer.php'; ?>