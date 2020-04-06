<!doctype html>
<html>
<head>
	<title>Meu primeiro site com Bootstrap</title>

	<!-- CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>p{ padding: 50px } </style>
</head>
<body>

<?php
try{
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost", "root", "");
}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = $_POST['nome'];
	$setor = $_POST['setor'];
	$empresa = $_POST['empresa'];
	$mensagem = $_POST['mensagem'];
	$situacao = $_POST['situacao'];

	$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, setor = :setor, empresa = :empresa, mensagem = :mensagem, situacao = :situacao, hora = CURRENT_TIME(), data_msg = NOW()");

	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":setor", $setor);
	$sql->bindValue(":empresa", $empresa);
	$sql->bindValue(":mensagem", $mensagem);
	$sql->bindValue(":situacao", $situacao);
	$sql->execute();
	header("Location:sistema_comentario.php");
}
?>
<br/>
<center><strong><h3>Cadestre seu B.O.</h3></strong></center>
<br/>
<div class="container">
	<form method="POST">
		<div class="form-group">
			<label for="formGroupExampleInput"><strong>Nome:</strong></label>
			<input type="text" name="nome" class="form-control" id="" placeholder="Digite seu nome...">
		</div>
	<div class="form-row">	
		<div class="form-group col-md-6">
     		<label for="inputEstado"><strong>Setor</strong></label>
      		<select id="inputEstado" name="setor" class="form-control">
        		<option selected>Escolher...</option>
        		<option>Diretoria</option>
        		<option>RH</option>
        		<option>Financeiro</option>
        		<option>Compras</option>
        		<option>Estoque</option>
        		<option>Fiscal</option>
        		<option>TI</option>
        		<option>Marketing</option>
        		<option>Assistência</option>
        		<option>Vendas</option>
        		<option>Caixas</option>
      		</select>
    	</div>
		<div class="form-group col-md-6">
     		<label for="inputEstado"><strong>Empresa</strong></label>
      		<select id="inputEstado" name="empresa" class="form-control">
        		<option selected>Escolher...</option>
        		<option>Loja do Cabeleireiro</option>
        		<option>ADV Link</option>
        		<option>ATS</option>
        		<option>GETNET</option>
        		<option>Prefeitura</option>
      		</select>
    	</div>
    </div>
		<div class="form-group">
			<label for="formGroupExampleInput"><strong>Mensagem:</strong></label>
			<input type="text" name="mensagem" class="form-control" id="" placeholder="">
		</div>

		<strong>Situação:</strong><br/><br/>
			
			<div class="form-group">
				<div class="form-check form-check-inline">
		  			<label class="radio-inline">
		  				<input type="radio" name="situacao" value="aberta"><span class="text-danger">Aberta</span></label>	
		  			</label>
				</div><br/>
				<div class="form-check form-check-inline">
					<label class="radio-inline">
		  				<input type="radio" name="situacao" value="analisando"><span class="text-warning">Analisando</span></label>	
		  			</label>
				</div><br/>
				<div class="form-check form-check-inline">
					<label class="radio-inline">
		  				<input type="radio" name="situacao" value="aberta"><span class="text-primary">Fechada</span></label>	
		  			</label>
				</div><br/><br/>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Enviar</button>
				</div>
			</div>
	</form>
</div>

<br/>
<center><strong><h3>Bo´s Loja do Cabeleireiro</h3></strong></center>
<br/>

<?php

$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0 ){
	?>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th scope="col"><strong>Nome</strong></th>
				<th scope="col"><strong>Setor</strong></th>
				<th scope="col"><strong>Empresa</strong></th>
				<th scope="col"><strong>Mensagem</strong></th>
				<th scope="col"><strong>Data de Abertura</strong></th>
				<th scope="col"><strong>Hora de Abertura</strong></th>
				<th scope="col"><strong>Situação</strong></th>
			</tr>
		</thead>
	<?php foreach($sql->fetchAll() as $mensagem): ?>
			<tr>
				<td><strong><?php echo $mensagem['nome']; ?></strong><br/></td>
				<td><?php echo $mensagem['setor']; ?></td>
				<td><?php echo $mensagem['empresa']; ?></td>
				<td><?php echo $mensagem['mensagem']; ?></td>
				<td><?php echo $mensagem['data_msg']; ?></td>
				<td><?php echo $mensagem['hora']; ?></td>
				<td><?php echo $mensagem['situacao']; ?></td>
			</tr>
	<?php
	endforeach;
}else{
	echo "Não há mensagem";
}
?>

</body>
</html>