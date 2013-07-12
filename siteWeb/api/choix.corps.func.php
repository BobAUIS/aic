<?php
function getCorps($page) {
	echo "<div id='corps'>";
	include(getCorpsPage($page));
	echo "</div>";
}

function getCorpsPage($page) {
	switch ($page) {
		case 'jeux':
			$result = 'base/jeux.inc.php';
			break;
		default:
			$result = '';
	}
	return $result;
}



?>			
