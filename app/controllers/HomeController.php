<?php
	namespace app\controllers;
	use app\core\Controller;
	use \App;

	/**
	* HomeController
	*/
	class HomeController extends Controller
	{
		
		function __construct()
		{
			// echo 'Home Controller';
		}

		public function index(){
			// echo 'home index';
			$this->render('index');
			// $this->redirect('http://google.com');
			// echo App::getController();
			// echo App::getAction();
		}
	}
?>