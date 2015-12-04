<?php
	require_once('connection.php');
	require_once('controllers/globalVarsController.php');

	if(isset($_GET['controller']) && isset($_GET['action'])){
		GVC::$controller = $_GET['controller'];
		GVC::$action = $_GET['action'];
	}else{
		GVC::$controller = 'main';
		GVC::$action = 'main';
	}

	if(isset($_GET['lang'])){
		GVC::$lang = $_GET['lang'];
	}else{
		GVC::$lang = 'es';
	}

	require_once('routes.php');
?>