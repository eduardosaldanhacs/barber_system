<?php
	if(empty($_GET['id'])){
		$dados  = "";
		$button = "Cadastrar";
		$action = "panel.php?m=admins&a=cadastra.php";
		$nova_senha = "";
	}
	else{
		$button = "Atualizar";
		$action = "panel.php?m=admins&a=atualiza_senha.php";
		$dados = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM admins WHERE id = {$_GET['id']}"));
		$nova_senha = "Nova";
	}
?>
<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active"><?=$button?> Administrador</li>
	</ul>
</div>
<form name="form1" method="post" action="<?=$action?>">
	<div class="col-12 form-group">
		<label for="nome">Nome</label>
		<input maxlength="255" id="nome" required class="form-control" type="text" name="nome" value="<?=!empty($_GET['id']) ?$dados['nome'] : NULL?>">
		<?=caracteres($dados,"nome",255);?>
	</div>
   <div class="col-12 form-group">
   		<label for="login">Login</label>
   		<input maxlength="255" id="login" required class="form-control" type="text" name="usuario" value="<?=!empty($_GET['id']) ?$dados['login'] : NULL?>">
   		<?=caracteres($dados,"login",255);?>
   </div> 
   <?php
   		if(!empty($_GET['id'])){
   ?>	
   		<div class="col-12 form-group">
   			<label for="senha_atual">Senha Atual</label>
   			<input maxlength="255" id="senha_atual" <?= empty($_GET['id']) ? 'required' : NULL ?> class="form-control" type="password" name="senha_atual">
  		</div>
   <?php
		}
   		if(!empty($_GET['id'])){
   ?>	
  		<div class="col-12">
			<div class="alert alert-warning" role="alert">
		  		Os campos abaixo só são necessários se você quer trocar a senha atual!
			</div>
  		</div>
	<?php
		}
	?>
	<div class="col-12 form-group">
		<label for="nova_senha"><?=$nova_senha?> Senha</label>
		<input maxlength="255" id="nova_senha" <?= empty($_GET['id']) ? "required" : NULL ?>  class="form-control" type="password" name="senha">
	</div> 
	<div class="col-12 form-group">
		<label for="repetir_nova_senha">Repetir Senha</label>
		<input maxlength="255" id="repetir_nova_senha" <?= empty($_GET['id']) ? "required" : NULL ?> class="form-control" type="password" name="repete">
	</div> 
	<div class="col-12 form-group">
		<input type="hidden" name="id" value="<?=isset($dados['id']) ? $dados['id'] : '' ?>">
		<input class="btn btn-primary w-100" type="submit" value="<?=$button?>">
	</div>
</form>