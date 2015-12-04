<?php
	function call($c, $a){
		require_once('/controllers/' . $c . 'Controller.php');

		switch($c){
			case 'main':
				$c = new MainController();
				break;
			case 'heroes':
				$c = new HeroesController();
				break;
		}

		$c->{$a}();
	}

	$controllers = array('main' 	=> ['index', 'error'],
						 'heroes' 	=> ['showAll', 'show']
						 );

	if(array_key_exists($controller, $action)){
		if(in_array($action, $controllers[$controller])){
			call($controller, $action);
		}else{
			call('main', 'error');
		}
	}else{
		call('main', 'error');
	}

?>