<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>

<?php
const NOME = "Chapolin";
$idade = 25;

echo "<p>".NOME." possui $idade anos.</p>";
?>

<!-- Chapolin possui 25 anos." -->
<p><?=NOME?> possui <?=$idade?> anos.</p>



</body>
</html>