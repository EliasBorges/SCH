<?php
	ob_start();

?>

<h1>Cadastrar Login</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Login";
 	ob_end_clean ();

	include '../../layout.php';

?>