<div class="titulo">Atribuições PHP</div>
<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero  -= 3;
echo '<br>' . $numero;
$numero += 1.5 ; 
echo '<br>' . $numero;

//decremento posfixado
$numero--;

echo '<br>' . $numero;
//decremento prefixado
--$numero;

echo '<br>' . $numero;

//incremento posfixado
$numero++;

echo '<br>' . $numero;
//incremento prefixado
++$numero;

echo '<br>' . $numero;


$numero = 20;

echo '<br>' . $numero;

$numero -= 5;

echo '<br>' . $numero;
$numero += 5;

echo '<br>' . $numero;

$numero *= 10;

echo '<br>' . $numero;

$numero /= 2;

echo '<br>' . $numero;

$numero %= 6;

echo '<br>' . $numero;


$numero **= 4;

echo '<br>' . $numero;

$numero .= 6; // apenas concatenação

echo '<br>' . $numero;

$texto = 'Esse é um testo';
echo '<br>' . $texto;

$texto = $texto .' qualquer';
echo '<br>' . $texto;


$texto .= ' de verdade';
echo '<br>' . $texto;

//$variavelInexistente = "valor inexistente";

echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'Valor Padrão';//valor defalt
echo '<br>' . $valor;


