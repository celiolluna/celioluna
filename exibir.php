<?php
	require_once("conect.php");
?>
<?php
try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $usuario) {
			echo 'Nome: '.$usuario["nome"]."</br>";		}
	}else{
		echo 'Não há cadastros no BD';
	}

}catch(PDOException $e){
	echo 'Conexão falhou: '.$e;
}
?>