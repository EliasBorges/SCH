<?php
	ob_start();

?>

<h1>Cadastrar Médico</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Médico";
 	ob_end_clean ();

	include '../../layout.php';

?>