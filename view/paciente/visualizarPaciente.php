<?php
	ob_start();

?>

<h1>Visualizar Paciente</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Paciente";
 	ob_end_clean ();

	include '../../layout.php';

?>