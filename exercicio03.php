<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 03</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
li:nth-child(even) { /* pares */
    color: red;
}

li:nth-child(odd){  /* ímpares */
    color: blue;
}

</style>

</head>
<body>
<div class="container">
    <h1>Exercício 03</h1>
    <hr>
<?php
$mesesDoAno = [
    'Janeiro','Fevereiro','Março','Abril',
    'Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'
];
?>
<ol>
<?php foreach( $mesesDoAno as $mes ){ ?>
    <li> <?=$mes?> </li>
<?php } ?>
</ol>


 


</div>







</body>
</html>