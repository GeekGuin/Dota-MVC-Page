<?php
class MainController{
	
	public function main(){
		require_once('/views/' . GVC::$lang . "/main/index.php");
	}

	public function error(){
		require_once('/views/' . GVC::$lang . "/main/index.php");
	}
}
?>