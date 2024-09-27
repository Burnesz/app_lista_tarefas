<?php

	$acao = 'recuperarTarefasPendetes';
	require 'tarefa_controller.php';

?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script>
			function editar(id){

				if (document.querySelector('input[name="id"]')) {

					let inputId = document.querySelector('input[name="id"]')
					inputId.remove()

				}

				let conteudo = document.getElementById('tarefa_'+id).innerHTML
				let tarefa = conteudo

				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				let inputModal = document.getElementById('inputModal')
				inputModal.value = tarefa
				inputModal.insertAdjacentElement('afterend', inputId)

				new bootstrap.Modal("#editarTarefaModal").show()
			}
			function excluir(id){

				if (document.querySelector('input[name="id"]')) {

					let inputId = document.querySelector('input[name="id"]')
					inputId.remove()

				}

				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				let excluirSubmit = document.getElementById('excluirSubmit')
				excluirSubmit.appendChild(inputId)

				new bootstrap.Modal("#excluirTarefaModal").show()
			}
			function marcarRealizada(id){

				location.href = 'index.php?pag=index&acao=marcarRealizada&id='+id

			}

		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container rounded border pagina">
						<div class="row">
							<div class="col">
								<h4>Tarefas pendentes</h4>
								<hr />
								<? foreach($tarefas as $indice => $tarefa){?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id = "tarefa_<?= $tarefa->id?>"><?= $tarefa->tarefa ?> </div>
											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<i class="fas fa-trash-alt fa-lg text-danger" onclick="excluir(<?= $tarefa->id?>)"></i>
												<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id?>)"></i>
												<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id?>)"></i>
											</div>
									</div>				
								<? } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="editarTarefaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<form method="post" action="index.php?pag=index&acao=atualizar">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tarefa</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<dl class="row">
							<dt class="col-sm-3">Status</dt>
							<dd id ="statusModal" class="col-sm-9">Pendente</dd>
			
							<dt class="col-sm-3">Tarefa</dt>
							<dd class="col-sm-9">
								<input id="inputModal" type="text" class="form-control" name="tarefa">
							</dd>
						</dl>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="excluirTarefaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<form method="post" action="index.php?pag=index&acao=excluir">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Atenção!</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<dl id="excluirSubmit" class="row">
							<dt class="col-sm-12">Tem certeza que deseja excluir esta tarefa?</dt>
						</dl>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-danger">Excluir</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>