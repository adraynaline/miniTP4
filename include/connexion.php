
<?php
//Connexion à la Base de donnée
$c = mysql_connect("localhost","raynal","099601");// remplace "barry" par ton nom de famille puis "215348" par ton mot de passe
if (!$c) die('Erreur mysql_connect : ' . mysql_error());
$s = mysql_select_db("raynal");//remplace "barry" par ton nom de famille
if (!$s) die('Erreur mysql_select_db : ' . mysql_error());
$c = mysql_set_charset('utf8');
if (!$c) die('Erreur mysql_set_charset : ' . mysql_error());


?>


