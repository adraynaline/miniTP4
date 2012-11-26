<?php 
	session_start();
	// Si pas de sesison 
	if (!isset($_SESSION['admin'])){
			//Si il y a un cookie
			if ($_COOKIE['ident'] == "admin")
			{
				//On restaure la session admin
				$_SESSION["admin"] = true ;
			}
	}
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Mon expo photo</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	<script type="text/javascript" src="js/script.js"></script>
	<script language="Javascript">
function cacher()
{
	document.getElementById('login').style.visibility = 'visible';
}
	</script>
	</head>

<body>

<?php include ("include/connexion.php");?>
<?php include("include/header.inc.php"); ?>

<?php include("include/fonctions.php"); ?>
<?php
	envoi_formulaire();
	
	supprimer_comment();
		
	update_comment();
?>

<div id="login" style="visibility:hidden;">
	<form class="formu" name="formu" action="login.php" method="get">
			<div>Login </div><div><input type="text" name="login" size="40" value="<?php if (isset($_COOKIE['login'])) {echo $_COOKIE['login'];} ?>"/></div>
			<div>Password </div><div><input type="password" name="password" size="40" value=""/></div>
			<label>Remember</label><input type="checkbox" name="iden"/><br/>
			<div><input type="submit" value="Connect" id="button" /></div>
		</form>
</div>


<div id="formulaire">
	<div id="content2">
		<h2>Les commentaires</h2>
		<div id="comment">
        
        <?php
		liste_commentaire();
		?>

		</div>
	</div>
	<div id="sidebar2">
		<h2>Commentez !</h2>
		<form id="formu" name="formu" action="#" method="get">
			<div>Votre nom (*) : </div><div><input type="text" name="nom" value="Entrez votre nom" size="30" /></div>
			<div>Votre mail (*) : </div><div><input type="text" name="mail"value="Entrez votre mail"  size="30" /></div>
			<div>Commentaire (*) : </div><div><textarea name="comment" rows="5" cols="40"></textarea></div>
			<div>(*) Obligatoire</div>
			<div><input type="submit" value="Envoyer" /></div>
		</form>
	</div>
</div>

<?php include("include/footer.inc.php"); ?>

<script type="text/javascript" src="js/evt.js"></script>
<script type="text/javascript" src="js/evt_formu.js"></script>

</body>
</html>
