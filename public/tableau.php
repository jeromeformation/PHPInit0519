<?php require 'inc/header.php' ;

    $products = [
        [
            "name" => "Hamac",
            "description" => "Pour se reposer après 5 jours de PHP",
            "image_name" => "hamac.jpg"
        ],[
            "name" => "Parasol",
            "description" => "Pour faire de l'ombre au Hamac",
            "image_name" => "parasol.jpg"
        ]
    ];

    $ballon = [
        "name" => "Ballon",
        "description" => "Pour jouer",
        "image_name" => "ballon.jpg"
    ];
    $products[] = $ballon;

    // On souhaite récupérer le Hamac
    //var_dump($products[0]);
    // On souhaite récupérer le nom du Hamac
    //var_dump($products[0]['name']);

    $kiwi = "kiwi";

    $fruits = ["pomme", $kiwi];
    // Syntaxe équivalente
    $fruits = array("pomme", $kiwi);
    $fruits[] = "pamplemousse";

    var_dump($fruits[2]);
    // La fonction "sizeof" permet de récupérer la taille d'un tableau
    $length = sizeof($fruits);
    // On peut utiliser une boucle "for" pour parcourir un tableau
    for($i=0;$i<$length;$i++) {
        // On récupère l'élément courant avec $fruits[$i]
        var_dump($fruits[$i]);
    }

    // Tri du tableau
    var_dump($fruits);
    sort($fruits);
    var_dump($fruits);

    // Transformer un tableau en chaîne de caractères
    $strFruits = implode("</li><li>", $fruits);
    // kiwi</li><li>pamplemousse</li><li>pomme

    echo "<ul><li>" . $strFruits . "</li></ul>";

    $tabLegumes = ['aubergine', 'carottes', 'choux fleur'];
    $strLegumes = implode("---",$tabLegumes);

    echo $strLegumes; // aubergine---carottes---choux fleur

?>

<main class="container">
    <h1 class="mt-2">Présentation des produits</h1>
    <section class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-4">
                <div class="card">
                    <img src="img/uploads/<?= $product['image_name']; ?>" class="card-img-top" alt="Image de <?= $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text"><?= $product['description']; ?></p>
                        <a href="#" class="card-link btn btn-outline-info">Détail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>


<form action="tableau.php" method=""></form>

<?php require 'inc/footer.php'; ?>
