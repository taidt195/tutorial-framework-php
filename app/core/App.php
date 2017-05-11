<?php
	require_once(dirname(__FILE__).'/Autoload.php');
	/**
	* App
	*/
	class App
	{
		private $router;
		private static $config;
		private static $controller;
		private static $action;

		function __construct()
		{
			new Autoload(self::$config['rootDir']);

			$this->router = new Router(self::$config['basePath']);
		}

		public static function setConfig($config){
			self::$config = $config;
		}

		public static function getConfig(){
			return self::$config;
		}

		public static function setController($controller){
			self::$controller = $controller;
		}

		public static function getController(){
			return self::$controller;
		}

		public static function setAction($action){
			self::$action = $action;
		}

		public static function getAction(){
			return self::$action;
		}

		public function run(){
			$this->router->run();
		}
	}
?>