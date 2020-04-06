<?php
	require_once 'conect.php';
?>
<a href="adicionar.php">Adicionar novo usuário</a>
<table border="0" width="70%">
	<tr>
		<th align="center">Nome</th>
		<th align="center">E-mail</th>
		<th align="center">Ações</th>
	</tr>
	<tr>
		<?php
			$pdo = new PDO($dsn, $dbuser, $dbpass);
			$sql = "SELECT * FROM usuarios";
			$sql = $pdo->query($sql);
			if($sql->rowCount() > 0){
				foreach($sql->fetchAll() as $usuarios){
					echo '<tr>';
					echo '<td>'.$usuarios['nome'].'</td>';
					echo '<td>'.$usuarios['email'].'</td>';
					echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
					echo '</td>';
				}
			}
		?>
	</tr>
</table>