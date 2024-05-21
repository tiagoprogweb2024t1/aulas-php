<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 03</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
<?php 
for( $i = 0; $i < count($mesesDoAno); $i++ ){ 
    /* Neste caso, avaliamos o resto da divisão por 2.
    Quando é zero (ou seja, número par), atribuimos a cor vermelha. Quando é diferente de zero (ou seja, ímpar),
    atribumos a cor azul. */
    $cor = $i % 2 == 0 ? "red" : "blue";
?>
    <li style="color: <?=$cor?>"> <?=$mesesDoAno[$i]?> </li>
<?php } ?>
</ol>


 


</div>







</body>
</html>