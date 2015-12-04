<!DOCTYPE html>
<html>
<head>
	<!-- <base href="//localhost:81/GitHub/"/> -->
</head>
<body>
	<header>
		<h1>HEROES as RAPIRAS</h1>
	</header>

		<?php 
			if(GVC::$action == 'showAll'){
				require_once('views/' . GVC::$lang . '/heroes/showAll.php');
			}
		?>
		
	<footer>
		Copyright
	</footer>
</body>
</html>