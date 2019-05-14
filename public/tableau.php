<?php require 'inc/header.php' ?>

<main class="container">
    <h1>Les tableaux</h1>
    <section class="row">
    <?php
        $products = [
            [
                "name" => "Hamac",
                "description" => "Pour se reposer après 5 jours de PHP",
                "image_name" => "hamac.jpg"
            ],[
                "name" => "Parasol",
                "description" => "Pour faire de l'ombre au Hamac",
                "image_name" => "parasol.jpg"
            ],
            [
                "name" => "Ballon",
                "description" => "Pour jouer",
                "image_name" => "ballon.jpg"
            ]
        ];
        // On souhaite récupérer le Hamac
        //var_dump($products[0]);
        // On souhaite récupérer le nom du Hamac
        //var_dump($products[0]['name']);

        foreach ($products as $product) :
    ?>
        <div class="card col-4">
            <img src="img/uploads/<?= $product['image_name']; ?>" class="card-img-top" alt="Image de <?= $product['name']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name']; ?></h5>
                <p class="card-text"><?= $product['description']; ?></p>
                <a href="#" class="card-link btn btn-outline-info">Détail</a>
            </div>
        </div>
    <?php endforeach; ?>
    </section>
</main>
<?php require 'inc/footer.php'; ?>
