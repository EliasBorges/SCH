<?php
	ob_start();

?>

<h1>Visualizar Especialidade Médico</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Especialidade Médico";
 	ob_end_clean ();

	include '../../layout.php';

?>