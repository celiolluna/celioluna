<?php

function somarNumero($a,$b){
	$conta = $a + $b;
	return $conta;
}

function subtrairNumero($a,$b){
	if($a > $b){
		$conta = $a - $b;
	}else{
		$conta = $b - $a;
	}
	return $conta;
}
function mostrarNome(){
	return "Lara Meira de Luna";
}

echo 'Meu nome é '.mostrarNome();
echo "</br>";
$resultado = somarNumero(3,4);
echo "O resultado da soma é ".$resultado;
echo "</br>";
$resultado2 = subtrairNumero(3,4);
echo "O resultado da subtração é ".$resultado2;
?>