<?php

try{
	$pdo = new PDO($dsn = "mysql:dbname=blog; host=127.0.0.1", $dbuser = "root", $dbpass = "");
	echo 'Conexão realizada com sucesso!';

}catch(PDOException $e){
	echo 'Conexão falhou: '.$e;
}

?>