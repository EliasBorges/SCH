<?php
	ob_start();

?>

<h1>Visualizar Pessoa</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Visualizar Pessoa";
 	ob_end_clean ();

	include '../../layout.php';

?>