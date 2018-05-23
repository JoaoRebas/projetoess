<?php
	require "configs.php";
	header('Content-Type: text/html; charset=utf-8');


	//--- Allow only POST method -------------------------------
	if($_SERVER['REQUEST_METHOD'] != "POST")
	{
		http_response_code(403);
		echo('{"error": "Method ' . $_SERVER['REQUEST_METHOD'] . ' not allowed!"}' . PHP_EOL);
		exit();
	}
	//------------------------------------------------------------------


	//--- html:POST - verify data sent  ------------------------
	$DATA = json_decode(file_get_contents('php://input'), true);
	if (!isset($DATA['auth']) || !isset($DATA['key']) || !isset($DATA['value']))
	{
		http_response_code(400);
		echo('{"error": "Missing parameters for service call!"}' . PHP_EOL);
		exit();
	}
	//------------------------------------------------------------------


	//--- html:POST - obtain data sent  ----------------------------
	$user_pwd = $DATA['auth'];
	$user_key = $DATA['key'];
	$user_value = $DATA['value'];
	$server_date = date('Y-m-d H:i:s');
	$lab_name = "flame_sensor_";
	//------------------------------------------------------------------


	//--- verify user credentials (password) ------------
	if ($user_pwd != $config_auth_password)
	{
		http_response_code(401);
		echo('{"error": "Autentication error!"}' . PHP_EOL);
		exit();
	}
	//------------------------------------------------------------------


	//--- verifiy allowed key: "mac-ip" ---------------------------
	if ($user_key != "flame")
	{
		http_response_code(400);
		echo('{"error": "Service only available for the following key: \'flame\'"}' . PHP_EOL);
		exit();
	}
	//------------------------------------------------------------------


	//--- Updating files  -----------------------------------
	$path_file_value = "$config_uploads_dir/$lab_name$user_key$config_uploads_sufix_value";
	$path_file_date = "$config_uploads_dir/$lab_name$user_key$config_uploads_sufix_date";
	$path_file_history = "$config_uploads_dir/$lab_name$user_key$config_uploads_sufix_history";

	// updating file with new value
	$r1 = file_put_contents($path_file_value, $user_value);

	// updating file with new date
	$r2 = file_put_contents($path_file_date, $server_date);

	// updating file with new history (order by date ASC)
	$new_line = $user_value . "\t(" . $server_date . ")" . PHP_EOL;
	$r3 = file_put_contents($path_file_history, $new_line, FILE_APPEND);

	// verify if at least one file was not updated
	if ($r1 == FALSE || $r2 == FALSE || $r3 == FALSE)
	{
		http_response_code(404);
		echo('{"error": "Could not update files."}' . PHP_EOL);
		exit();
	}

	// everything successfully updated
	$json = array("status" => "OK", "key" => $user_key, "value" => $user_value, "date" => $server_date);
	echo(json_encode($json) . PHP_EOL);

	//------------------------------------------------------------------
?>
