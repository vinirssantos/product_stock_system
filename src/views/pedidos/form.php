<?php
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	include('../layout/head.php');
	include('../layout/header.php');

	require('../../controllers/PedidosController.php');
	$pedidos = new PedidosController;
	if(count($_POST) > 0) {
		if (isset($_GET['id'])) {
			$pedidos_list = $pedidos->update($_GET['id'], $_POST);
		} else {
			$pedidos_list = $pedidos->store($_POST);
		}
	}

	if (isset($_GET['id'])) {
		$data = $pedidos->edit($_GET['id'])['data'];
	}
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<i class="fa fa-fw fa-truck"></i> Cadastro de Pedidos
		</h1>
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-dashboard"></i> Início</a></li>
			<li><a href="../produtos/show.php"> Pedidos</a></li>
			<li class="active">Cadastrar Pedido</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Pedidos</h3>
				<div class="box-tools pull-right">
					<a href="../pedidos/show.php" class="btn btn-default btn-xs"> <i class="fa fa-fw fa-undo"></i> Voltar</a>
				</div>
			</div>
			<div class="box-body">
				<form method="post" action="">
					<div class="form-group">
						<label for="nome">Descrição:</label>
						<textarea class="form-control" rows="6" id="descricao" name="descricao"></textarea>
					</div>
					<div class="form-group">
						<label for="valor_total">Valor Total:</label>
						<input name="valor_total" type="text" class="form-control" id="valor_total" placeholder="Valor total" value="<?php echo (isset($data) ? $data[0]['nome'] : false) ?>">
					</div>
					<input type="submit" value="Cadastrar" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>
	</section>
</div>
<?php
	include('../layout/footer.php');
	include('../layout/foot.php');
?>
