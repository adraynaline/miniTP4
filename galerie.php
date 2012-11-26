<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Mon expo photo</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	<script type="text/javascript" src="js/script.js"></script>

	</head>

<body>

<?php include("include/header.inc.php"); ?>

<div id="poptrox">
	<ul id="gallery">
		<li><img id="mini1" src="images/img01.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini2" src="images/img02.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini3" src="images/img03.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini4" src="images/img04.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini5" src="images/img02.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini6" src="images/img01.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini7" src="images/img04.jpg" title="Bulle" alt="" /></li>
		<li><img id="mini8" src="images/img03.jpg" title="Bulle" alt="" /></li>
	</ul>
	<img id="zoom" src="images/img01_big.jpg" title="Texte de bulle" alt="" width="98%" />
	<p>
		<a id="startdiapo" href="#">Lancer le diaporama</a>
		Délai : <input type="text" id="delai" size="2" value="2" />
		<a id="stopdiapo" href="#">Arrêter le diaporama</a>
	</p>
</div>

<?php include("include/footer.inc.php"); ?>

<script type="text/javascript" src="js/evt.js"></script>
<script type="text/javascript" src="js/evt_galerie.js"></script>

</body>
</html>
