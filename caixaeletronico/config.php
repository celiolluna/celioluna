<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_caixaeletronico; host=localhost", "root", "");
}catch(PDOExeption $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}
?>