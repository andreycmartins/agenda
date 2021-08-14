<div class="container">
<header>
	<h3 class="center">Contato cadastrato!</h3>
</header>

<?php

	$nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
	$emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
	$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
	$enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
	$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
	$dataNascContato = mysqli_real_escape_string($conexao,$_POST["dataNascContato"]);
	$sql = "INSERT INTO contatos (
	nomeContato, 
	emailContato, 
	telefoneContato, 
	enderecoContato,
	sexoContato, 
	dataNascContato)
	VALUES (
	'{$nomeContato}', 
	'{$emailContato}', 
	'{$telefoneContato}', 
	'{$enderecoContato}', 
	'{$sexoContato}', 
	'{$dataNascContato}')";

	mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));

	?> <a href="index.php" class="btn red right">Início</a>
		<a href="index.php?menuop=cad-contato" class="btn blue">Cadastrar outro contato</a>

<?php

?>
</div>