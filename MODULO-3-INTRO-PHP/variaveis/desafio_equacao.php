<div class="titulo">Desafio Equação</div>

<?php

$numA = ( 6 * (3 + 2)) ** 2;
$denominadorA = 3 * 2 ;
$numB = ((1 - 5) * (2 - 7));
$denominadorB = 2 ;
$superior = (($numA / $denominadorA) - (($numB / $denominadorB) ** 2)) ** 3;
$inferior = 10 ** 3;
$total = $superior / $inferior;

echo '1 . O resultado é ' . $total . '.';