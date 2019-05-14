<?php require 'inc/header.php' ?>

<h1>Les tableaux</h1>

<?php
    $products = [
        [
            "name" => "Hamac",
            "description" => "Pour se reposer après 5 jours de PHP"
        ],[
            "name" => "Parasol",
            "description" => "Pour faire de l'ombre au Hamac"
        ],
        [
            "name" => "Ballon",
            "description" => "Pour jouer"
        ]
    ];
    // On souhaite récupérer le Hamac
    //var_dump($products[0]);
    // On souhaite récupérer le nom du Hamac
    //var_dump($products[0]['name']);

    foreach ($products as $product) :
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
<?php
    endforeach;

    require 'inc/footer.php';
?>
