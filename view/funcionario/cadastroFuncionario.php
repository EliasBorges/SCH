<?php
	ob_start();

?>

<h1>Cadastrar Funcionário</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Funcionário";
 	ob_end_clean ();

	include '../../layout.php';

?>