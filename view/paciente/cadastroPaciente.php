<?php
	ob_start();

?>

<h1>Cadastrar Paciente</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Paciente";
 	ob_end_clean ();

	include '../../layout.php';

?>