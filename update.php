<?php
require_once("conect.php");

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$senha = "7890";
	$sql = "UPDATE usuarios set senha = '$senha' WHERE id = '3'";
	$pdo->query($sql);
	echo 'usuario alterado com sucesso!';
}catch(PDOException $erro){
	echo 'Falha: '.$erro->getMessage();
}
?>