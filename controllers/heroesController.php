<?php
class HeroesController{
	public function showAll(){		
		$heroes = Heroes::all();
		require_once('/views/' . GVC::$lang . "/heroes/index.php");
	}

	public function show($id){
		if(isset($_GET['param1'])){
			return call('main', 'error');
		}

		$hero = Heroes::find($_GET['param1']);
	}
}
?>