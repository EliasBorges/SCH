<?php
	ob_start();

?>

<h1>Cadastrar Pessoa</h1>

<?php

 	$conteudo = ob_get_contents();
	$titulo = "Cadastrar Pessoa";
 	ob_end_clean ();

	include '../../layout.php';

?>