<?php

	Router::get('/home','HomeController@index');
	
	Router::get('/',function(){
		echo ' hello';
	});

	Router::get('/news',function(){
		echo 'news page';
	});

	Router::any('*',function(){
		echo '404';
	});
?>