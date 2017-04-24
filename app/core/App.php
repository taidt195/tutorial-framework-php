<?php
	require_once(dirname(__FILE__).'/Autoload.php');
	/**
	* App
	*/
	class App
	{
		private $router;
		private static $config;

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

		public function run(){
			$this->router->run();
		}
	}
?>