<?php

$nome = "Célio Almeida de Luna";

$x = explode(" ", $nome);

print_r($x);

echo "</br><hr>";

$array = array("Patrícia", "Meira", "de", "Luna");

$y = implode(" ", $array);

echo $y;

echo "</br><hr>";

$numero = 143.5460989876556723;
$resultado = number_format($numero, 2, ".", "");
print($resultado);

echo "</br><hr>";

$frase = "Eu quero comprar um celular!";

$troca = str_replace("celular", "carro", $frase);

echo $frase."</br>";
echo $troca;

echo "</br><hr>";

echo strtolower("CELIO ALMEIDA DE LUNA </br>");
echo strtoupper("celio almeida de luna");

echo "</br><hr>";

echo substr($frase, 0, 5);

?>