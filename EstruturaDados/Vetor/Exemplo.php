<?php
// Sem o uso de vetores:
// Existe a necessidade de se usar vetor no código para que haja economia de tempo, organização e eficiencia!
$fruta1 = "maçã";
$fruta2 = "banana";
$fruta3 = "laranja";
$fruta4 = "morango";

echo $fruta3;
?>


<?php
// Com o uso de vetores:
// Neste exemplo vemos a mesma função com um numero menor de caracteres. Basta selecionar o numero (começando por zero)
// Caso queira adicionar mais frutas, basta seguir a mesma lógica e aplicar o nome entre as aspas após a virgula.
// Resumindo: Usar vetores economiza tempo, torna o código organizado (evita possiveis bugs), e intuivo!
$frutas = array("maçã", "banana", "laranja", "morango");

echo $frutas[2]; 
?>