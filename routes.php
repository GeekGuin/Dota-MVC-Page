<?php
	function call($c, $a){
		require_once('/controllers/' . $c . 'Controller.php');

		switch($c){
			case 'main':
				$c = new MainController();
				break;
			case 'heroes':
				require_once('/models/heroes.php');
				$c = new HeroesController();
				break;
		}

		$c->{$a}();
	}

	$controllers = array('main' 	=> ['main', 'error'],
						 'heroes' 	=> ['showAll', 'show']
						 );

	if(array_key_exists(GVC::$controller, $controllers)){
		if(in_array(GVC::$action, $controllers[GVC::$controller])){
			call(GVC::$controller, GVC::$action);
		}else{
			call('main', 'error');
		}
	}else{
		call('main', 'error');
	}

?>