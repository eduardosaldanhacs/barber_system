<nav class="navbar navbar-expand-lg navbar_mobile">
	<!--	<div id="fechar_menu">X</div>-->
	<ul class="navbar-nav mr-auto w-100 flex_direction">
		<li class="nav-item border_menu">
			<span class="efeito_preencher"></span>
			<a class="nav-link <?= empty($_GET['m']) ? 'menu_ativo' : NULL ?>" href="panel.php">
				<i class="menu-icon fa fa-home" aria-hidden="true"></i>
				<span>Home</span>
			</a>
		</li>
		<!--ADMINISTRADORES | INICIO -->
		<li class="menu-item-has-children nav-item dropdown border_menu <?= $_GET['m'] == 'admins' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?= $_GET['m'] == 'admins' ? 'menu_ativo' : NULL ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-user" aria-hidden="true"></i>
				<span>Administradores</span>
			</a>
			<ul class="sub-menu children dropdown-menu <?= $_GET['m'] == 'admins' ? 'show' : NULL ?>" aria-labelledby="navbarDropdown">
				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'admins' && $_GET['a'] == 'novo.php' ? 'menu_ativo' : NULL ?>" href="panel.php?m=admins&a=novo.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Cadastrar</span>
					</a>
					<span class="efeito_preencher_submenu"></span>
				</li>
				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'admins' && $_GET['a'] == 'listar.php' ? 'menu_ativo' : NULL ?>" href="panel.php?m=admins&a=listar.php">
						<i class="fa fa-list" aria-hidden="true"></i>
						<span>Listar</span>
					</a>
				</li>
			</ul>
		</li>
		<!--ADMINISTRADORES | FIM -->
		
	<!--AGENDAMENTOS | INICIO -->
	<li class="menu-item-has-children nav-item dropdown border_menu <?=$_GET['m'] == 'agendamentos' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?=$_GET['m']=='agendamentos'? 'menu_ativo' : NULL?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa-solid fa-book" aria-hidden="true"></i>
         		<span>Agendamentos</span>
        	</a>
			<ul class="sub-menu children dropdown-menu <?=$_GET['m'] == 'agendamentos' ? 'show' : NULL ?>" aria-labelledby="navbarDropdown">
				<li>
					<a class="dropdown-item <?=$_GET['m']=='agendamentos' && $_GET['a']=='novo.php'? 'menu_ativo' : NULL?>" href="panel.php?m=agendamentos&a=novo.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Cadastrar</span>
					</a>
				<span class="efeito_preencher_submenu"></span>
				</li>
				<li>
					<a class="dropdown-item <?=$_GET['m']=='agendamentos' && $_GET['a']=='listar.php'? 'menu_ativo' : NULL?>" href="panel.php?m=agendamentos&a=listar.php">
						<i class="fa fa-list" aria-hidden="true"></i>
						<span>Listar</span>
					</a>
				</li>
			</ul>
		</li>
		<!--AGENDAMENTOS | FIM  -->



		<!--SERVIÇOS | INICIO -->
		<li class="menu-item-has-children nav-item dropdown border_menu <?=$_GET['m'] == 'servicos' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?=$_GET['m']=='servicos'? 'menu_ativo' : NULL?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa-solid fa-scissors" aria-hidden="true"></i>
         		<span>Serviços</span>
        	</a>
			<ul class="sub-menu children dropdown-menu <?=$_GET['m'] == 'servicos' ? 'show' : NULL ?>" aria-labelledby="navbarDropdown">
				<li>
					<a class="dropdown-item <?=$_GET['m']=='servicos' && $_GET['a']=='novo.php'? 'menu_ativo' : NULL?>" href="panel.php?m=servicos&a=novo.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Cadastrar</span>
					</a>
				<span class="efeito_preencher_submenu"></span>
				</li>
				<li>
					<a class="dropdown-item <?=$_GET['m']=='servicos' && $_GET['a']=='listar.php'? 'menu_ativo' : NULL?>" href="panel.php?m=servicos&a=listar.php">
						<i class="fa fa-list" aria-hidden="true"></i>
						<span>Listar</span>
					</a>
				</li>
			</ul>
		</li>
		<!--SERVIÇOS | FIM  -->

		<!--EQUIPE | INICIO -->
		<li class="menu-item-has-children nav-item dropdown border_menu <?=$_GET['m'] == 'equipe' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?=$_GET['m']=='equipe'? 'menu_ativo' : NULL?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa-solid fa-users" aria-hidden="true"></i>
         		<span>Equipe</span>
        	</a>
			<ul class="sub-menu children dropdown-menu <?=$_GET['m'] == 'equipe' ? 'show' : NULL ?>" aria-labelledby="navbarDropdown">
				<li>
					<a class="dropdown-item <?=$_GET['m']=='equipe' && $_GET['a']=='novo.php'? 'menu_ativo' : NULL?>" href="panel.php?m=equipe&a=novo.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Cadastrar</span>
					</a>
				<span class="efeito_preencher_submenu"></span>
				</li>
				<li>
					<a class="dropdown-item <?=$_GET['m']=='equipe' && $_GET['a']=='listar.php'? 'menu_ativo' : NULL?>" href="panel.php?m=equipe&a=listar.php">
						<i class="fa fa-list" aria-hidden="true"></i>
						<span>Listar</span>
					</a>
				</li>
			</ul>
		</li>
		<!--EQUIPE | FIM  -->

		<!--BANNERS |INICIO  -->
		<li class="nav-item border_menu <?= $_GET['m'] == 'banners' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link <?= $_GET['m'] == 'banners' ? 'menu_ativo' : NULL ?>" href="panel.php?m=banners&a=listar.php">
				<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
				<span>Banners</span>
			</a>
		</li>
		<!--BANNERS | FIM -->
	</ul>
</nav>