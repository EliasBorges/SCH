<?php
	ob_start();

?>

<h1>Visualizar Cargo Funcionario</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Cargo Funcionario";
 	ob_end_clean ();

	include '../../layout.php';

?>