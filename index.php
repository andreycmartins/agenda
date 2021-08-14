<?php 
include("db/conexao.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda</title>
</head>
<body>
	<header>
		<h1 class="center">Agenda Online</h1>
		<nav class="center">
			<a href="index.php?menuop=home">Home |</a>
			<a href="index.php?menuop=contatos">Contatos |</a>
			<a href="index.php?menuop=tarefas">Tarefas |</a>
			<a href="index.php?menuop=eventos">Eventos |</a>
		</nav>
	</header>

	<main>
		<?php
		$menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
			switch ($menuop) {
				case 'home':
					include("paginas/home/home.php");
					break;
				case 'contatos':
					include("paginas/contatos/contatos.php");
					break;
				case 'cad-contato':
					include("paginas/contatos/cad-contato.php");
					break;
				case 'inserir-contato':
					include("paginas/contatos/inserir-contato.php");
					break;
				case 'tarefas':
					include("paginas/tarefas/tarefas.php");
					break;
				case 'eventos':
					include("paginas/eventos/eventos.php");
					break;
				
				default:
					include("paginas/home/home.php");
					break;
			}
		?>
	</main>
</body>
</html>