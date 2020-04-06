<?php
require_once("conect.php");
try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$id = 2;
	$sql = "DELETE FROM usuarios WHERE id = :id";
	$sql = $pdo->prepare($sql);
	$sql -> bindValue(':id', $id);
	$sql -> execute();
	echo 'Usuário deletado com sucesso';
}catch(PDOExption $erro){
	echo 'Falha: '.$erro->getMessage();
}
?>