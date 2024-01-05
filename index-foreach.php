<?php
// Tableau indexer
// $array = ["John", "Doe", 30];

// Tableau associatif clé "prenom" => valeur "John"
$associativeArray = [
    "civ" => "Mr",
    "prenom" => "John",
    "nom" => "Doe",
    "age" => 30,
];

var_dump($array);

var_dump(array_values($array));

var_dump(key($array));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage tableau associatif avec foreach</title>
</head>

<body>
    <!-- Façon correct d'afficher les données d'une valeur -->

    <table>
        <thead>
            <tr>
                <!-- Méthode de tableau php - afficher les clefs -->
                <!-- https://www.php.net/manual/fr/function.array-keys.php -->
                <!-- Pour chaque clefs dans le tableau affiche moi $key -->
                <?php foreach (array_keys($associativeArray) as $key) : ?>
                    <th><?php echo $key ?></th>
                <?php endforeach; ?>

            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- Syntaxe alternative : au lieu d'utiliser les {}, il est nécessaire de mettre endforeach à la fin -->
                <!-- Pour chaque valeurs dans le tableau affiche moi $value -->
                <?php foreach ($associativeArray as $value) : ?>
                    <td><?php echo $value ?></td>
                <?php endforeach; ?>

                <?php
                // foreach ($associativeArray as $key => $value) {
                //     echo "<td>$value</td>";
                // }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>