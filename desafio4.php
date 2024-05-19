<?php
// exercicio4
$frase = "a raposa rapida pula sobre o cão preguiçoso";
$palavra = "rapida";
$posicao = strpos($frase,$palavra);

if($posicao == false){
    echo("a palavra não foi encontrada na frase ");
}
else{
    echo "a palavra foi encontrada na posição ";
}
?>