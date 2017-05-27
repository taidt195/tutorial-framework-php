<?php
	require_once(dirname(__DIR__).'/app/core/App.php');
	$config = require_once(dirname(__DIR__).'/config/main.php');

	$app = new App($config);
	$app->run();
?>