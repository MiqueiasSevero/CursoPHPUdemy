<div class="titulo"> Operações Aritiméticas</div>

<?php

echo 1+1, '<br>';
var_dump(1+1);
echo 1+2.5, '<br>';
echo 10 - 2,'<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4), '<br>';

echo round(7 / 4), '<br>';

echo 7 % 4,'<br>';

echo 7 % 2,'<br>';

echo 8 % 4,'<br>';
echo 7 / 0, '<br>';
//echo intdiv(7,0); #erro
echo 4**2, '<br>';

// Precedéncia de operadores:

// () => ** => / * % => + -

echo '<p> Precedéncia</p>';
 
echo 2 + 3 * 4 , '<br>';

echo (2 + 3) * 4, '<br>';

echo 2 + 3 * 4 ** 2, '<br>';

echo (( 2 + 3) * 4) ** 2;




