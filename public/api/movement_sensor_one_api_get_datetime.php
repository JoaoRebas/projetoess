<?php
	header('Content-Type: text/html; charset=utf-8');


	//--- Permitir apenas o método GET  -------------------------------
	if($_SERVER['REQUEST_METHOD'] != "GET")
	{
		http_response_code(403);
		echo('Method ' . $_SERVER['REQUEST_METHOD'] . ' not allowed!');
		exit();
	}
	//------------------------------------------------------------------


	// Enviar data e hora
	echo("Server Date/hour: " . date('Y-m-d H:i:s') . PHP_EOL);

	//------------------------------------------------------------------
?>
