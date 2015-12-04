<!DOCTYPE html>
<html>
<head>
	<!-- <base href="//localhost:81/GitHub/"/> -->
</head>
<body>
	<header>
		<h1>Menu</h1>
	</header>

		<?php
			if(GVC::$action == 'main'){
				require_once('views/' . GVC::$lang . '/main/main.php');
			}else{
				require_once('views/' . GVC::$lang . '/main/error.php');
			}
		?>
		
	<footer>
		Copyright
	</footer>
</body>
</html>