<?php
	function call($c, $a){
		require_once('/controllers/' . $c . 'Controller.php');

		switch($c){
			case 'main':
				$c = new MainController();
				break;
			case 'heroes':
				break;
		}

		$c->{$a}();
	}

	$controllers = array('main' 	=> ['index', 'error'],
						 'heroes' 	=> ['index']
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