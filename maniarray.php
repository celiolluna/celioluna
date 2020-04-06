<?php

$array = array(
	"Nome" => "Célio Almeida de Luna",
	"Telefone" => "38 997278141"
);
$vencedores = array(
	"Célio",
	"Luana",
	"Lara",
	"Luara",
	"Patrícia"
);

if(in_array("Patrícia", $vencedores)){
	echo 'E o(a) vencedor(a) é Patrícia';
}else{
	echo 'No momento não há vencedores, aguardem';
}
?>