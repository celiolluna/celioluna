<?php
require_once 'conect.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
		$pdo->query($sql);
		header("Location: site.php");
	}
?></br></br>

<form method="POST">
Nome: </br>
<input type="text" name="nome"/></br>
E-mail: </br>
<input type="text" name="email"/></br>
Senha: </br>
<input type="password" name="senha"/></br>
<input type="submit" value="Cadastrar"></br>
</form>