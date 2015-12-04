<?php
class HeroesController{
	public function showAll(){
		$heroes = Heroes::showAll();
	}

	public function show($id){
		if(isset($_GET['param1'])){
			return call('main', 'error');
		}

		$hero = Heroes::find($_GET['param1']);
	}
}
?>