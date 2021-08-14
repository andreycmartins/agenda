<header>
	<h3 class="center">Cadastro de Evento</h3>
</header>
<div class="container">
	<form action="index.php?menuop=inserir-evento" method="POST">

			<?php
				include '../manager/Main.php';
				$main = new Main();
			?>

  		<div class="">
			<div class="">
				<select name="idCadastro" id="idCadastro" class="form-control" required>
					<?php
						foreach ($main->getAll("contatos") as $contato) {
							echo '<option value="'.$contato["id"].'" > '.$contato["nomeContato"].'</option>';
						}
					?>
				</select>
				<label for="idCadastro">Nome do cliente: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<input type="text" name="titulo" id="titulo" required>
				<label for="titulo">Título: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="descricao" id="descricao" required>
				<label for="descricao">Descricao: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input type="datetime-local" name="start" id="start" required>
				<label for="start">Início: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input type="datetime-local" name="end" id="end" required>
				<label for="end">Fim: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
			<input type="submit" value="Adicionar" name="btnAdicionar" class="btn green">
			</div>
		</div>
	</form>
</div>