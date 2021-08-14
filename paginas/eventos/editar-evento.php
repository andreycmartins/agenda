<header>
	<h3 class="center">Editar de Evento</h3>
</header>
<div class="container">
	<form action="index.php?menuop=atualizar-eventos" method="POST">

			<?php
				include '../manager/Main.php';
				$main = new Main();

				$evento = $main->getID('eventos',$_GET['id']);

			?>

  		<div class="">
			<div class="">
				<select name="idCadastro" id="idCadastro" class="form-control" required>
					<?php
						foreach ($main->getAll("contatos") as $contato) {

							if ($evento[0]['idCadastro'] == $contato[id]) {
								echo '<option value="'.$contato["id"].'" selected>'.$contato["nomeContato"].'</option>';
							}
							else{
								echo '<option value="'.$contato["id"].'">'.$contato["nomeContato"].'</option>';
							}
						}
					?>
				</select>
					<label for="idCadastro">Nome do cliente: </label>
			</div>
		</div>
		

		<div class="row">
			<div class="form-control col s6">
				<input value="<?= $evento[0]['titulo'] ?>" type="text" name="titulo" id="titulo" required>
				<input value="<?= $evento[0]['id'] ?>" type="hidden" name="id" id="id" required>
				<label for="titulo">Título: </label>
			</div>
		</div>

		<div class="row">
			<div class="form-control col s12">
				<input value="<?= $evento[0]['descricao'] ?>" type="text" name="descricao" id="descricao" required>
				<label for="descricao">Descricao: </label>
			</div>
		</div>

		<div class="row">
			<div class="form-control col s12">
				<input value="<?= date('Y-m-d\TH:i:s',strtotime($evento[0]['start'])) ?>" type="datetime-local" name="start" id="start" required>
				<label for="start">Início: </label>
			</div>
		</div>

		<div class="row">
			<div class="form-control col s12">
				<input value="<?= date('Y-m-d\TH:i:s',strtotime($evento[0]['end'])) ?>" type="datetime-local" name="end" id="end" required>
				<label for="end">Fim: </label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
			<input type="submit" value="Atualizar" name="btnAtualizar" class="btn green">
			</div>
		</div>
	</form>
</div>