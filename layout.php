<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title><?php echo $titulo; ?></title>

	<!-- CSS -->
	<link href="/trabalhoFinal/assets/css/fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="/trabalhoFinal/assets/css/materialize.css" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="/trabalhoFinal/assets/css/style.css" media="screen,projection">
</head>
<div class="navbar-fixed">
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="/trabalhoFinal/view/funcionario/cadastroFuncionario.php">Cadastrar Funcionário</a></li>
		<li><a href="/trabalhoFinal/view/funcionario/visualizarFuncionario.php">Visualizar Funcionário</a></li>
	</ul>

	<ul id="dropdown2" class="dropdown-content">
		<li><a href="/trabalhoFinal/view/medico/cadastroMedico.php">Cadastrar Médico</a></li>
		<li><a href="/trabalhoFinal/view/medico/visualizarMedico.php">Visualizar Médico</a></li>
	</ul>

	<ul id="dropdown3" class="dropdown-content">
		<li><a href="/trabalhoFinal/view/paciente/cadastroPaciente.php">Cadastrar Paciente</a></li>
		<li><a href="/trabalhoFinal/view/paciente/visualizarPaciente.php">Visualizar Paciente</a></li>
	</ul>

	<ul id="dropdown4" class="dropdown-content">
		<li><a href="/trabalhoFinal/view/login/cadastroLogin.php">Cadastrar Login</a></li>
	</ul>

	<ul id="dropdown5" class="dropdown-content">
		<li><a href="/trabalhoFinal/view/pessoa/cadastroPessoa.php">Cadastrar Pessoa</a></li>
		<li><a href="/trabalhoFinal/view/pessoa/visualizarPessoa.php">Visualizar Pessoa</a></li>
		<li><a href="/trabalhoFinal/view/cargoFuncionario/cadastroCargoFuncionario.php">Cadastrar Cargo Funcionário</a></li>
		<li><a href="/trabalhoFinal/view/cargoFuncionario/visualizarCargoFuncionario.php">Visualizar Cargo Funcionário</a></li>
		<li><a href="/trabalhoFinal/view/especialidadeMedico/cadastroEspecialidadeMedico.php">Cadastrar Especialidade Médico</a></li>
		<li><a href="/trabalhoFinal/view/especialidadeMedico/visualizarEspecialidadeMedico.php">Visualizar Especialidade Médico</a></li>
	</ul>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container">
			<ul class="right hide-on-med-and-down">		
				<li>
					<a class="dropdown-button" href="#!" data-activates="dropdown5">Controle Geral
						<i class="material-icons right">arrow_drop_down</i>
					</a>
				</li>	

				<li>
					<a class="dropdown-button" href="#!" data-activates="dropdown1">Controle Funcionário
						<i class="material-icons right">arrow_drop_down</i>
					</a>
				</li>
				
				<li>
					<a class="dropdown-button" href="#!" data-activates="dropdown2">Controle Médico
						<i class="material-icons right">arrow_drop_down</i>
					</a>
				</li>

				<li>
					<a class="dropdown-button" href="#!" data-activates="dropdown3">Controle Paciente
						<i class="material-icons right">arrow_drop_down</i>
					</a>
				</li>

				<li>
					<a class="dropdown-button" href="#!" data-activates="dropdown4">Controle Usuário
						<i class="material-icons right">arrow_drop_down</i>
					</a>
				</li>	
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="/trabalhoFinal/view/funcionario/visualizarFuncionario.php">Visualizar Funcionário</a></li>
				<li><a href="/trabalhoFinal/view/medico/visualizarMedico.php">Visualizar Médico</a></li>
				<li><a href="/trabalhoFinal/view/paciente/visualizarPaciente.php">Visualizar Paciente</a></li>
				<li><a href="/trabalhoFinal/view/login/cadastroLogin.php">Cadastrar Login</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
</div>

<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<?php echo $conteudo; ?>
	</div>
</div>

<!-- JavaScript -->
<script src="/trabalhoFinal/assets/js/jquery-3.2.1.min.js"></script>
<script src="/trabalhoFinal/assets/js/materialize.js"></script>
<script src="/trabalhoFinal/assets/js/init.js"></script>
</body>
</html>