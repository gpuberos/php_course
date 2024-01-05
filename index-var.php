<?php echo "Salut"; ?>

<?php
// Déclarer une variable nom;
$nom;

// Déclarer et affecter une variable lui donner une valeur

// Debug son code PHP
var_dump($nom);

// Afficher et récuperer le type de la variable
// Comme console.log(typeof(variable)) en JavaScript'
//var_dump(gettype($nom));

// Type de données
// string, boolean, float, integer
$string = "LeetCode";

$boolean = true;

$float = 85.2;

$integer = 85;

var_dump(gettype($string));

// tableau
// https://www.php.net/manual/fr/language.types.array.php
$array = array('Lien 1', 'Lien 2', 'Lien 3');
$shortArray = ['Lien 1', 'Lien 2', 'Lien 3'];

$varArray = [$string, $boolean, $float, $integer];
$valArray = ["LeetCode", true, 85.2, 85];

var_dump($valArray);
var_dump(gettype($varArray));

?>

<?php 

// Pas de chiffre sur les variables

$nom = "Doe";
$prenom = "John";
$age = 30;

?>

<!-- Mettre du PHP dans HTML -->
<!-- C'est un fichier ou y a que l'html -->
<h1><?php echo $nom; ?></h1>

<!-- Mettre du HTML dans PHP -->
<!-- c'est un fichier sans code html -->
<?php echo "<h1>$nom</h1>"; ?>

<!-- CONCATENATION -->
<!-- une string il faut échaper les apostrophes -->
<!-- https://www.php.net/manual/fr/language.operators.string.php -->
<!-- Caractère d'échappement https://www.php.net/manual/fr/regexp.reference.escape.php -->
<!-- j'ouvre php et je fais un echo -->

<!-- Avec simple quote -->
<?= 'Bonjour je m\'appelle' . "\t" . $prenom . "\t" . $nom . "\t" . 'et j\'ai' . "\t" . $age . "\t" . 'ans'; ?>

<!-- Avec double quote -->
<?= "Bonjour je m'appelle $prenom $nom et j'ai $age ans"; ?>

<!-- En JS on utilisait le + en php on utilise le .... -->