<?php

function setMenuItem($nom, $id, $class, $reference) {
	echo "<a href='index.php?page=$reference'>";
	echo "<div id='$id' class='$class'>";
	echo "$nom";
	echo "</div>";
	echo "</a>";
	/*
	*/
}

?>
