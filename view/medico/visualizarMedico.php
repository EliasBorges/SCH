<?php
	ob_start();

?>

<h1>Visualizar Médico</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Médico";
 	ob_end_clean ();

	include '../../layout.php';

?>