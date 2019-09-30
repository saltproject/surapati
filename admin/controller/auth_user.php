<?php

if (!isset ($_SESSION["Login"]) || $_SESSION ["Login"] != true){
	header ("Location: ../pages/404/index.php");
}
else if ($_SESSION["access"] = "administrator"){
	$_SESSION ["Login"] = true;
}
else{
	header ("Location: ../pages/404/index.php");
}

?>