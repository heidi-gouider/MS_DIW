<html>

<body>


    <?php

    echo $_SERVER["REMOTE_ADDR"] . "<br />";
    // echo $_SERVER["SERVER_ADDR"]. "<br />";

    // Afficher tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...

    for ($i = 0; $i <= 150; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }

    // Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers

    $phr = "Je dois faire des sauvegardes régulières de mes fichiers";
    $i = 0;
    // la boucle while serait plus appropriée pour répéter un bloc de code tant que la condition est vrai (!attention à la boucle infinie;)
    // risque de plantage 

    // do {
    //     echo $phr;
    //     $i++;
    // } while ($i <= 500);

    // comme je connais le nombre d'itérations à effectuer, je choisie la boucle for
    for ($i = 1; $i <= 5; $i++) {
        echo $prr;
    }


    // Afficher la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML

    // Définir la taille de la table

    $taille = 10;

    // Créer le tableau
    $tableau = array();

    // Boucle pour générer les valeurs de la table de multiplication
    for ($i = 1; $i <= $taille; $i++) {
        $tableau[$i] = array(); // Créer un sous-tableau pour chaque ligne

        for ($j = 1; $j <= $taille; $j++) {
            $tableau[$i][$j] = $i * $j; // Calculer la valeur de chaque cellule "tableau multidimensionnel"
        }
    }

    // Afficher le tableau
    echo "<table>";
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }
    echo "</table>";



    ?>
</body>

</html>