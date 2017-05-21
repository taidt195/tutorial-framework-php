<?php
	use app\core\Controller;
	Router::get('/home','HomeController@index');
	
	Router::get('/',function(){
		$ct = new Controller;
		$ct->render('index',['age' => 22, 'name' => 'tai']);
	});

	Router::get('/news',function(){
		echo 'news page';
	});

	Router::any('*',function(){
		echo '404';
	});
?>