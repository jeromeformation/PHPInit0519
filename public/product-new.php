<?php
// Inclusion du HTML d'en tête + navbar
require 'inc/header.php' ;
// Inclusion du fichier PHP de traitement du formulaire
require 'handle-product-new.php' ;
?>

<main class="container">

    <h1>Ajout d'un produit</h1>

    <form method="post">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" min="0" step="0.01" class="form-control" id="price" name="price">
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ispublished" name="ispublished">
            <label class="custom-control-label" for="ispublished">Le produit doit-il être publié ?</label>
        </div>
        <div class="form-group">
            <label for="createdat">Date de création</label>
            <input type="date" class="form-control" id="createdat" name="createdat">
        </div>
        <div class="form-group">
            <label for="nbviews">Nombre de vues</label>
            <input type="number" min="0" class="form-control" id="nbviews" name="nbviews">
        </div>

        <input type="submit" value="Créer le produit" class="btn btn-outline-success">

    </form>



</main>

<?php require 'inc/footer.php' ; ?>