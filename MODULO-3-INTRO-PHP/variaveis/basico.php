<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

// verificar se a variavel foi setada

echo '<br>';
echo isset($soma);
echo '<br>';
unset($soma);
echo '<br>';
var_dump($soma);


$variavel = 10 ;
echo '<br>' . $variavel;
$variavel = "agora sou uma string" ;
 echo '<br>' . $variavel;


 //Nomeclatua de variavel
 $var = "valida";
 $var2 = 'valida';
 $VAR3 = 'valida';
 $_var_4 = 'valida';
 $vâr5 = 'valida'; // não usado
 //$6var = 'invalido';
//$%var7 = 'invalido;
//$var8% = 'invalido';
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);


