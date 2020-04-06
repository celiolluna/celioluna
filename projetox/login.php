<?php
	session_start();

	if(isset($_POST['email']) && empty($_POST['email']) == false){
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$dsn = "mysql:dbname=blog;host:127.0.0.1";
		$dbuser = "root";
		$dbpass = "";

		try{
			$db =new PDO($dsn, $dbuser, $dbpass);
			$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
			if($sql->rowCount() > 0){
				$dado = $sql->fetch();
				$_SESSION['id'] = $dado['id'];
				header("Location: index.php");
			}
		}catch(PDOExcption $e){
			echo 'Erro: '.$e->getmessage();
		}
	}

?>

Página de Login:</br></br>

<form method="POST">
	E-mail:</br>
	<input type="text" name="email"></br></br>

	Password:</br>
	<input type="password" name="senha"></br></br>

	<input type="submit" name="Entrar">

</form>