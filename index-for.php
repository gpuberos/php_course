<?php
// Tableau associatif clé "prenom" => valeur "John"
$associativeArray = [
    "civ" => "Mr",
    "prenom" => "John",
    "nom" => "Doe",
    "age" => 30,
];

$keys = array_keys($associativeArray);
$values = array_values($associativeArray);

// https://www.php.net/manual/fr/function.count.php
// https://www.php.net/manual/fr/control-structures.for.php
// https://www.php.net/manual/fr/control-structures.alternative-syntax.php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage tableau associatif avec for</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <?php for ($i = 0; $i < count($keys); $i++) : ?>
                    <th><?php echo $keys[$i] ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <!-- Syntaxe alternative : au lieu d'utiliser les {}, il est nécessaire de mettre le endfor à la fin -->
            <?php for ($i = 0; $i < count($values); $i++) : ?>
                <td><?php echo $values[$i] ?></td>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>