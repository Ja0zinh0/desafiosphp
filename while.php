<?php
#exercicio 1 
$val=  100;
while ($val >= 1){
    
        echo"$val<br>"; 
        $val = $val -1;
}


#exercicio 2
$valor = 1;

while ($valor <= 10) {
    if ($valor % 2 == 1) {
        echo "$valor<br>";
    }
    $valor = $valor + 1;
}

#exercicio 3
$cont = 1;
$soma = 0;
while( $cont <= 100) {
    $soma = $soma + $cont;
    $cont++;
}

echo " o seu resultado e $soma<br>";
?>
