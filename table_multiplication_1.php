<?php
// j'appelle le fichier 'Table.php' dans lequel se trouve la classe dont je vais avoir besoin
require 'Table.php';

// je crée une instance, pour laquelle, je base mon nouvel objet '$table' sur la classe 'Table()'
$table = new Table();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication 1</title>
</head>
<body>
    <!-- je fais appelle à la méthode 'getTables()' pour afficher mon résultat -->
    <?php $table->getTables(); ?>
</body>
</html>