<?php
$tabela = "agendamentos";
$pasta  = "agendamentos";

if ($_GET['id']) {
	echo $query = "SELECT * FROM $tabela WHERE deleted_at IS NULL";
	$resultado = mysqli_query($conn, $query);
	$dados = mysqli_fetch_assoc($resultado);
	$button = "Atualizar";
	$action = "panel.php?m=$pasta&a=atualizar.php";
} else {
	$action = "panel.php?m=$pasta&a=cadastrar.php";
	$button = "Cadastrar";
}
?>
<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active mb-3"><?= $button ?> Agendamento</li>
	</ul>
</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">
	<div class="row">
		<div class="col-12 form-group">
			<label for="">Nome</label>
			<input type="text" name="name" id="name" class="form-control" value="<?= $dados['name'] ?>" placeholder="Nome do serviço" required>
		</div>
		<div class="col-12 form-group">
			<label for="Services">Serviço</label>
			<select name="service" id="services" class="form-control">
				<option value="">Selecione</option>
				<?php $select_services = mysqli_query($conn, "SELECT * FROM servicos WHERE deleted_at IS NULL"); ?>
				<?php while ($service = mysqli_fetch_assoc($select_services)) { ?>
					<option value="<?= $service['name'] ?>" <?= $dados['service'] == $service['name'] ? "selected" : NULL ?>><?= $service['name'] ?></option>
				<?php } ?>
			</select>
		</div>

		<div class="col-12 form-group">
			<label for="Barbeiros">Barbeiros</label>
			<select name="barber" id="" class="form-control">
				<option value="">Selecione o barbeiro</option>
				<?php
				$barber_query = "SELECT * FROM team WHERE state = 'S' AND deleted_at IS NULL";
				$barber_result = mysqli_query($conn, $barber_query);
				while ($barber = mysqli_fetch_assoc($barber_result)) { ?>
					<option value="<?= $barber['name'] ?> <?= $barber['lastname'] ?>"><?= $barber['name'] ?> <?= $barber['lastname'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="col-12 form-group">
			<label>Telefone:</label>
			<input type="text" name="phone" id="phone" class="form-control" value="<?= $dados['phone'] ?>" placeholder="" required>
		</div>

		<div class="col-6 form-group">
			<label>Dia:</label>
			<input type="date" name="date" id="date" class="form-control" value="<?= $dados['date'] ?>" placeholder="" required>
		</div>
		<div class="col-6 form-group">
			<label>Horário:</label>
			<input type="time" name="time" id="time" class="form-control" value="<?= $dados['time'] ?>" placeholder="" required>
		</div>

		<div class="col-12">
			<?php if (!empty($_GET['id'])) { ?>
				<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
			<?php } ?>
			<button type="submit" class="btn btn-success w-100"><?= $button ?></button>
		</div>
	</div>
</form>