<?php

function calcularTrocoRecursivo($troco, $valorNota){
    
    if ($troco == 0){
        return 0;
    }
    else{
        $qtdNota = floor($troco/$valorNota);
        echo "Qtd notas de R$" . $valorNota . ": " . $qtdNota . "<br/>";
        if ($valorNota == 100)
            return calcularTrocoRecursivo($troco % $valorNota, 50);
        else if ($valorNota == 50)
            return calcularTrocoRecursivo($troco % $valorNota, 20);
        else if ($valorNota == 20)
            return calcularTrocoRecursivo($troco % $valorNota, 10);
        else if ($valorNota == 10)
            return calcularTrocoRecursivo($troco % $valorNota, 5);
        else if ($valorNota == 5)
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
    /*$falta = 0;
    
    
    
    $notas_100 = floor($trocoI/100);
    $troco = $troco % 100;
    
    $notas_50 = floor($troco/50);
    $troco = $troco % 50;
    
    $notas_20 = floor($troco/20);
    $troco = $troco % 20;
    
    $notas_10 = floor($troco/10);
    $troco = $troco % 10;
    
    $notas_5 = floor($troco/5);
    $troco = $troco % 5;
    
    $notas_1 = floor($troco/1);
    $troco = $troco % 1;
    
    echo "Troco: R$" . $trocoI . "<br/>";
    echo "Qtd. notas de R\$100:  " . $notas_100 . "<br/>";
    echo "Qtd. notas de R\$50:   " . $notas_50 . "<br/>";
    echo "Qtd. notas de R\$20:   " . $notas_20 . "<br/>";
    echo "Qtd. notas de R\$10:   " . $notas_10 . "<br/>";
    echo "Qtd. notas de R\$5:   "  . $notas_5 . "<br/>";
    echo "Qtd. notas de R\$1:   "  . $notas_1 . "<br/>";*/
    
}


?>