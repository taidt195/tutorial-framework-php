<?php
	require_once(dirname(__DIR__).'/app/core/App.php');
	$config = require_once(dirname(__DIR__).'/config/main.php');

	App::setConfig($config);

	$app = new App;
	$app->run();
?>