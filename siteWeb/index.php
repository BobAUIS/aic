<!DOCTYPE html>
<html>
	<head>
		<title>Environnement web</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
	<div id="fond">
		<?php 
		/* Include */
		include('api/choix.corps.func.php');
		
		/* page*/
		include('base/banniere.inc.php');
		echo "<div id='zoneMenuActu'>";
			include('base/menu.inc.php');
			include('base/smallActu.inc.php');
		echo "</div>";
		include(getCorps($_GET['page']));
		include('base/footer.inc.php');
		?>
	</div>
	</body>
</html>
