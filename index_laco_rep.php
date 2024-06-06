<?php
// // #repetição  
// for ($var = 1; $var <= 10; $var++) {
//     echo"$var<br>";    
    
// }
#impar ou par 
$contador = 0;
for ($var = 0; $var <= 100; $var++) {
   if ($var% 2 == 1) {
   echo "$var<br>";
   $contador ++;
   }
}
echo "a quantidade de numeros impares e $contador";


?>