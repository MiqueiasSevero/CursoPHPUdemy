<div class="titulo">Variaveis Variaveis</div>


<?php
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a} ${$a} $valor";

    echo '<br>';
    $epa = 'opa';
    $opa = 'vish';
    $vish = 'Eita!!!';
    echo "$epa {$$epa} {$$$epa}";



?>