<div class="titulo">Constates</div>
<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
//NÃO É POSSIVEL ATRIBUIR UM NOVO VALOR EM UMA CONSTANTE.

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;

//define('NOVISSIMA_TAXA',$valorVariavel);
//cost NOVISSIMA_TAXA = $valorVariavel ERRO
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
// CONSTATES DO PHP 

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br> LINHA' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
