<?php
	ob_start();

?>

<h1>Visualizar Funcionário</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Funcionário";
 	ob_end_clean ();

	include '../../layout.php';

?>