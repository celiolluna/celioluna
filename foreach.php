<?php

$estacoes = array("Primavera", "Verão", "Outono", "Inverno");

$nome = array(
	"Nome" => "Célio Luna",
	"Idade" => "43 anos",
	"Estado" => "Minas Gerais",
	"Cidade" => "Montes Claros",
	"País" => "Brazil"
);

foreach($nome as $key => $dados){
	echo $key." = ".$dados."</br>";
}
foreach ($estacoes as $achou) {
	echo 'Estações: '.$achou."</br>";
}
?>