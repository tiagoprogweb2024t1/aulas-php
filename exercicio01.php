<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        .um { color: red; }
        .dois { color: purple; }
    </style>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>

<?php
const NOME = "Chapolin";
$idade = 25;
echo "<p>".NOME." possui $idade anos.</p>";
?>
<p> <b><?=NOME?></b>  possui <i><?=$idade?></i> anos.</p>

<p> 
    <b class="um"><?=NOME?></b>  possui 
    <i class="dois"><?=$idade?></i> anos.
</p>

<p> 
    <span class="um"><?=NOME?></span>  possui 
    <span class="dois"><?=$idade?></span> anos.
</p>



</body>
</html>