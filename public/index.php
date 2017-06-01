<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once(dirname(__DIR__).'/app/core/App.php');
	$config = require_once(dirname(__DIR__).'/config/main.php');

	$app = new App($config);
	$app->run();
?>