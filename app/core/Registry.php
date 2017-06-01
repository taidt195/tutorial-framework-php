<?php
	namespace app\core;
	use app\core\AppException;
	
	class Registry{
		private static $intance;
		private $storage;

		private function __construct(){}

		public static function getIntance(){
			if( !isset(self::$intance) )
				self::$intance = new self;
			return self::$intance;
		}

		public function __set($name,$value){
			if( !isset($this->storage[$name]) )
				$this->storage[$name] = $value;
			else
				throw new AppException("Can't not set \"$value\" to \"$name\", $name already exists");
		}

		public function __get($name){
			if( isset($this->storage[$name]) )
				return $this->storage[$name];
			return null;
		}
	}
?>