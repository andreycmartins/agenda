<div class="container">
<header>
<h3 class="center">Contatos</h3>
</header>

<table class="striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Sexo</th>
			<th>Data de Nasc.</th>
		</tr>
	</thead>

	<tbody>

		<?php
		$sql = "SELECT * FROM contatos";
		$rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));
		while ($dados = mysqli_fetch_assoc($rs)) {
		?>

		<tr>
			<td><?=$dados["idContato"]?></td>
			<td><?=$dados["nomeContato"]?></td>
			<td><?=$dados["emailContato"]?></td>
			<td><?=$dados["telefoneContato"]?></td>
			<td><?=$dados["sexoContato"]?></td>
			<td><?=$dados["dataNascContato"]?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>