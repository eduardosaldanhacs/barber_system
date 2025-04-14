<?php
	$query = mysqli_query($conn,"SELECT * FROM admins ORDER BY login ASC");
?>
<div class="col-12 form-group">
	<ul class="list-group color_font_black">
		<li class="list-group-item active">Lista de Administradores</li>
		<li class="list-group-item">
			<div class="row">
				<div class="col-12 col-xl-3">
					Nome
				</div>
				<div class="col-12 col-xl-3">
					Login
				</div>
				<div class="col-12 col-xl-3">
					Último Login
				</div>
				<div class="col-12 col-xl-3 text-center">
					Ações
				</div>
			</div>
		</li>
		
		<?php
			while($dados=mysqli_fetch_array($query)){			
        ?>
        
			<li class="list-group-item">
				<div class="row">
					<div class="col-12 col-xl-3">
						<?=codificacao($dados['nome'])?>
					</div>
					<div class="col-12 col-xl-3">
						<?=codificacao($dados['login'])?>
					</div>
					<div class="col-12 col-xl-3">
						<?=!empty($dados['ultimo_login']) ? dateTime2portugues($dados['ultimo_login']) : 'Nenhum Acesso'?>
					</div>
					<div class="col-12 col-xl-3 text-center">
						<a href="panel.php?m=admins&a=novo.php&id=<?=$dados['id']?>" class="btn btn-outline-primary">Editar</a>
						<?php
							if($_SESSION['ID_ADMIN']==$dados['id'])	{
						?>
							<span style="cursor:context-menu;" class="btn btn-warning">Logado!</span>
						<?php
							}
							else
							{
						?>
							<button onclick="excluir('admins','excluir.php','<?=$dados['id']?>')" class="btn btn-outline-primary">Excluir</button>					
						<?php
							}
						?>
					</div>
				</div>
			</li>
			
		<?php
			}
		?>
		
	</ul>
</div>