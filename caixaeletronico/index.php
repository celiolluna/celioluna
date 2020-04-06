<?php

session_start();

if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
	
}else{
	header("Location: login.php");
	exit;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
</head>
<body>

	<h1>Banco dos Lunas</h1>
	Agência: 123<br/>
	Conta: 000<br/>
	<a href="sair.php">Sair</a>

</body>
</html>



<!--<?php
session_start();
require 'config.php';


if(isset($_POST['agencia']) && empty($_POST['agencia']) == false){
	$agencia = addslashes($_POST['agencia']);
	$conta = addslashes($_POST['conta']);
	$senha = addslashes($_POST['conta']);

	$sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
	$sql->bindValue(":agencia", $agencia);
	$sql->bindValue(":conta", $conta);
	$sql->bindValue(":senha", md5($senha));

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();

		$_SESSION['banco'] = $sql['id'];
		header("Location: index.php");
		exit;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Caixa Eletrônico</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>Banco do Lú</h1>
	Titular: <?php echo $info['titular']; ?><br/>
	Agência: <?php echo $info['agencia']; ?><br/>
	Conta: <?php echo $info['conta']; ?><br/>
	Saldo: <?php echo $info['saldo']; ?><br/>
	<a href="sair.php">Sair</a>
	<hr/>
	<h3>Movimentação/Extrato</h3>
	<table border="1" width="400">
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		
	</table>
</body>
</html>-->