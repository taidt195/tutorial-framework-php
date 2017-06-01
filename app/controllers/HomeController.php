<?php
	namespace app\controllers;
	use app\core\Controller;

	/**
	* HomeController
	*/
	class HomeController extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->render('index',[
				'ten'	=> 'tai',
				'tuoi'	=> '22'
			]);
		}
	}
?>