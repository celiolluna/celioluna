<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
	echo 'Página para enviar arquivo <a href="enviararquivo.php">Carregar arquivo</a>.</br>';
	echo 'Página para enviar arquivo <a href="multarquivos.php">Carregar vários arquivos</a>.</br>';
}else{
	header("Location: login.php");
}
?>