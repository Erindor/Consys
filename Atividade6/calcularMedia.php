<?php
$str_valores    = $_POST["valores"];            //pega os valores do formulário pelo metodo POST
$array_valores  = explode(",", $str_valores);   //divide a string em um array

$media = array_sum($array_valores)/count($array_valores);   //faz o cálculo da média (soma o array / qtd de valores no array)

echo "A media dos valores " . $str_valores . "<br/>";   //exibe o resultado
echo "<h1>= " . $media . "</h1>";                       //exibe o resultado
?>