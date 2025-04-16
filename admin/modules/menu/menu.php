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



		<li class="menu-item-has-children nav-item dropdown border_menu <?= $_GET['m'] == 'admins' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?= $_GET['m'] == 'admins' ? 'menu_ativo' : NULL ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
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


		<!--SERVIÇOS  -->
		<li class="menu-item-has-children nav-item dropdown border_menu <?=$_GET['m'] == 'servicos' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?=$_GET['m']=='servicos'? 'menu_ativo' : NULL?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
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

		
		<!--EQUIPE  -->
		<li class="menu-item-has-children nav-item dropdown border_menu <?=$_GET['m'] == 'equipe' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?=$_GET['m']=='equipe'? 'menu_ativo' : NULL?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
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

		<li class="nav-item border_menu <?= $_GET['m'] == 'cardapios' ? 'show' : NULL ?>">

			<span class="efeito_preencher"></span>

			<a class="nav-link <?= $_GET['m'] == 'cardapios' ? 'menu_ativo' : NULL ?>" href="panel.php?m=cardapios&a=listar.php">

				<i class="menu-icon fa fa-file-text-o" aria-hidden="true"></i>

				<span>Cardápios</span>

			</a>

		</li>

		<li class="nav-item border_menu <?= $_GET['m'] == 'identidade' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link <?= $_GET['m'] == 'identidade' ? 'menu_ativo' : NULL ?>" href="panel.php?m=identidade&a=listar.php">
				<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
				<span>Identidade</span>
			</a>
		</li>


		<li class="nav-item border_menu <?= $_GET['m'] == 'banners' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link <?= $_GET['m'] == 'banners' ? 'menu_ativo' : NULL ?>" href="panel.php?m=banners&a=listar.php">
				<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
				<span>banners</span>
			</a>
		</li>

		<li class="nav-item border_menu <?= $_GET['m'] == 'galeria' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link <?= $_GET['m'] == 'galeria' ? 'menu_ativo' : NULL ?>" href="panel.php?m=galeria&a=listar.php">
				<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
				<span>Galeria</span>
			</a>
		</li>

		<li class="menu-item-has-children nav-item dropdown border_menu <?= $_GET['m'] == 'estrutura' ? 'show' : NULL ?>">
			<span class="efeito_preencher"></span>
			<a class="nav-link dropdown-toggle <?= $_GET['m'] == 'estrutura' ? 'menu_ativo' : NULL ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="menu-icon fa fa-users" aria-hidden="true"></i>
				<span>Estrutura</span>
			</a>
			<ul class="sub-menu children dropdown-menu <?= $_GET['m'] == 'estrutura' ? 'show' : NULL ?>" aria-labelledby="navbarDropdown">
				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['a'] == 'novo.php' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=novo.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Cadastrar</span>
					</a>
					<span class="efeito_preencher_submenu"></span>
				</li>

				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['a'] == 'texto.php' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=texto.php">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<span>Texto</span>
					</a>
					<span class="efeito_preencher_submenu"></span>

				</li>

				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'bercario1' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=bercario1">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Berçario 1</span>
					</a>
				</li>

				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'bercario2' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=bercario2">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Berçario 2</span>
					</a>
				</li>

				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'maternal1' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=maternal1">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Maternal 1</span>
					</a>
				</li>

				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'maternal2' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=maternal2">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Maternal 2</span>
					</a>
				</li>
				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'jardim1' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=jardim1">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Jardim 1</span>
					</a>
				</li>
				<li>
					<a class="dropdown-item <?= $_GET['m'] == 'estrutura' && $_GET['turma'] == 'jardim2' ? 'menu_ativo' : NULL ?>" href="panel.php?m=estrutura&a=listar.php&turma=jardim2">
						<i class="menu-icon fa fa-picture-o" aria-hidden="true"></i>
						<span>Jardim 2</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>



</nav>