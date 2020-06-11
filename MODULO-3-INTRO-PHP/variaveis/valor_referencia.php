<div class="titulo">Valor vs Referência</div>

<?php
// atribuição por valor
$variavel = 'valor inicial';
echo "<br> $variavel";

$variavelValor = $variavel;
echo "<br> $variavel";

$variavelValor = 'novo valor';

echo " $variavelValor";

// atribuição por Referência

$variavelRefencia = &$variavel ;
$variavelRefencia = 'mesma referência';

echo " <br> $variavel => $variavelRefencia";