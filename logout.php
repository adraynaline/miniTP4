<?php
session_start();
session_unset();
session_destroy();

	// On efface le cookie
	if (setcookie("ident")){
		//SUpprime le tableau du cookie 
		unset($_COOKIE["ident"]);
	}
header ('location:page_index.php');
?>