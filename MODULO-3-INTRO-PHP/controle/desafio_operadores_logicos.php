<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>  
    <div>
        <label for="t1">trabalho 2(Quita):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>      
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size:1.8rem;
    }
</style>
<?php
    if(isset($_POST['t1']) && isset($_POST['t2'])){
        $t1 = $_POST['t1'];

        $t2 = $_POST['t2'];

        if($t1 == TRUE  && $t2 == TRUE){
            echo "Iremos ao Shopping tomaremos sorvete e compraremos uma TV 50 pol";
        }else if($t1 == true || $t2 == true){
            echo "Iremos ao Shopping tomaremos sorvete e compraremos uma TV 32 pol";
        }else{
            echo "Ficaremos em casa! mais saldável";
        }
    }
?>