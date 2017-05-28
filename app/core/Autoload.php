<?php
	use app\core\AppException;
	class Autoload{
		private $rootDir;

		function __construct($rootDir){
			$this->rootDir = $rootDir;

			spl_autoload_register([$this,'autoLoad']);

			$this->autoLoadFile();
		}

		private function autoLoad($class){

			$fileName = end(explode('\\', $class));
			$filePath = $this->rootDir.'\\'.strtolower(str_replace($fileName, '', $class)).$fileName.'.php';

			if( file_exists($filePath) )
				require_once($filePath);
			else
				throw new AppException("$class does not exsits");
		}

		private function autoLoadFile(){
			foreach( $this->defaulFileLoad() as $file ){
				require_once( $this->rootDir .'/'.$file );
			}
		}

		private function defaulFileLoad(){
			return [
				'app/core/Router.php',
				'app/routers.php'
			];
		}
	}
?>