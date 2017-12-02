<?php
	ob_start();

?>

<h1>Cadastrar Especialidade Médico</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Especialidade Médico";
 	ob_end_clean ();

	include '../../layout.php';

?>