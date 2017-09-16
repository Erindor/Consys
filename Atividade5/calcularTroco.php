<?php

/* Esta funcao calcula o troco de forma recursviva
    * @param {int} $troco - o valor restante que deve dar de troco  
    * @param {int} $valorNota - o valor a nota para calcular quantos dessa nota deve dar de troco
    * @return {int} a quantidade de notas que deve ser entregue ao cliente
*/
function calcularTrocoRecursivo($troco, $valorNota){
    
    if ($troco == 0){ //se troco for 0, chegamos ao final da recursão
        return 0;     //retorna 0
    }
    else{  //se nao for 0, FAÇA:
        //calcula a quantidade de notas que deve ser entregue foi utiizado a função "FLOOR", caso o resultado tenha ponto flutuante
        $qtdNota = floor($troco/$valorNota); 
        echo "Qtd notas de R$" . $valorNota . ": " . $qtdNota . "<br/>"; //exibe na tela a quantidade de notas
        
        /* calcularemos a proxima nota*/
        if ($valorNota == 100) //se a nota for 100, a proxima nota sera 50
            return calcularTrocoRecursivo($troco % $valorNota, 50);
        else if ($valorNota == 50) //se a nota for 50, a proxima nota sera 20
            return calcularTrocoRecursivo($troco % $valorNota, 20);
        else if ($valorNota == 20) //se a nota for 20, a proxima nota sera 10
            return calcularTrocoRecursivo($troco % $valorNota, 10);
        else if ($valorNota == 10) //se a nota for 10, a proxima nota sera 5
            return calcularTrocoRecursivo($troco % $valorNota, 5);
        else if ($valorNota == 5) //se a nota for 5, a proxima nota sera 1
            return calcularTrocoRecursivo($troco % $valorNota, 1);
    }
}


$valorTotal = $_POST["totalCompra"];
$valorPago  = $_POST["valorPago"];

if ($valorTotal > $valorPago){
    echo "Dinheiro insuficiente para pagar a compra, faltam: R$" . ($valorTotal - $valorPago);
}
else if ($valorTotal == $valorPago){
    echo "Valor pago certinho, nao sera necessario troco!   =)";
}
else{
    $troco = $valorPago - $valorTotal;
    echo "Troco: R$" . $troco . "<br/>";
    calcularTrocoRecursivo($troco, 100);
}


?>