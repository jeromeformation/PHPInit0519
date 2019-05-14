<?php require 'inc/header.php' ?>

    <h1>Ma page</h1>
    <!-- Commentaire HTML -->
    <?php
        // Affichage de bonjour
        echo '<p>Bonjour</p>';

        $nb1 = 1.55;
        $isPublished = true;

        $content = "<p>Contenu de mon \"paragraphe\" : $nb1</p>";
        $content2 = '<p>Contenu de mon paragraphe: $nb1</p>';

        //die("Fin du script");

        echo $content;
        echo $content2;

        // Les constantes
        const NB_ARTICLES_PER_PAGE = 6;
        define("DATABASE_NAME", "php_projet");

        echo NB_ARTICLES_PER_PAGE;
        echo DATABASE_NAME;

        //On ne modifie pas une constante
        //NB_ARTICLES_PER_PAGE = 12;
        echo __FILE__;

        var_dump($content);
        print_r($content);


        $str1 = "Bonjour";
        $str2 = " tout le monde";

        echo "Bonjour : " . $str2;

        $cpt = 0;

        echo "Compteur  avant : " . ++$cpt;
        echo "Compteur  après : " . $cpt;

        $nb = 2;
        $result = ($nb === 1);
        echo "resultat : " . $result . "|";

        $default = "Doe";
        $name = $userValue ?? $default;

        echo $name;


        $test = true;
        echo !$test;

        $result2 = ($test === true) ? 'oui' : 'non';

        if($test === true) {
            $result2 = 'oui';
        } else {
            $result2 = 'non';
        }


        $day = "vendredi";
        if($day === "samedi" || $day === "dimanche") {
            echo "<p>C'est le week-end !</p>";
        } elseif($day === "vendredi") {
            echo "<p>C'est bientôt le week-end !</p>";
        } else {
            echo "<p>C'est pas le week-end...</p>";
        }

        switch($day) {
            case "samedi":
            case "dimanche":
                echo "<p>C'est le week-end !</p>";
                break;
            case "vendredi":
                echo "<p>C'est bientot le week-end !</p>";
                break;
            default:
                echo "<p>C'est pas le week-end !</p>";
        }

        $temp = 255 ;
        if($temp > 0 && $temp < 20) {
            echo "<p>Il fait bon</p>";
        } elseif ($temp > 50) {
            echo "<p>Il fait trop chaud</p>";
        } elseif ($temp <= 0) {
            echo "<p>Il fait froid</p>";
        } else {
            echo "<p>Il fait chaud</p>";
        }

        if($temp < 0) {
            echo "<p>Il fait froid</p>";
        } elseif($temp < 20) {
            echo "<p>Il fait bon</p>";
        } elseif($temp < 50) {
            echo "<p>Il fait chaud</p>";
        } else {
            echo "<p>Il fait très chaud</p>";
        }

       // echo ($temp < 0) ? 'froid' : (($temp < 20) ? 'bon' : (($temp < 50)? 'chaud' : 'très chaud') );

    // Les boucles

    // Objectif : créer une liste à puces (10 puces)
    echo "<ul>";
    $i = 0;
    while($i<10) {
        echo "<li>Puce $i</li>";
        $i++;
    }
    echo "</ul>";


    echo "<ul>";
    for($i=0;$i<10;$i++) {
        echo "<li>Puce $i</li>";
    }
    echo "</ul>";

    // Tableau indexé
    $fruits = ["Kiwi", "Pamplemousse", "Citron", "Ananas", "Banane"];
    echo "<ul>";
    foreach($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    // Tableau associatif
    $people = [
        "firstName" => "John",
        "lastName" => "Doe",
        "age" => 41
    ];
    ?>
    <table>
        <thead>
            <tr>
                <?php
                    foreach ($people as $key => $value) {
                        echo "<td>$key</td>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach ($people as $value) {
                        echo "<td>$value</td>";
                    }
                ?>
            </tr>
        </tbody>
    </table>

<?php require('inc/footer.php') ?>