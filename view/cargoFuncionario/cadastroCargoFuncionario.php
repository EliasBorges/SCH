<?php
	ob_start();

?>

<h1>Cadastrar Cargo Funcionario</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Cargo Funcionario";
 	ob_end_clean ();

	include '../../layout.php';

?>