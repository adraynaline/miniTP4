<?php
	session_start();
?>
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
<?php include ("include/connexion.php");?>

<?php include("include/fonctions.php"); ?>

<?php $ligne = modification_comment($_GET["update_id"]); ?>
<div id="formulaire">
	<div id="sidebar2">
		<h2>modifiez le commentaire !</h2>
		<form id="formu" name="formu" action="contact.php" method="get">
			<div>Votre nom (*) : </div><div><input type="text" name="nom" size="30" value="<?php echo $ligne->MINITP_NAME; ?>" /></div>
			<div>Votre mail (*) : </div><div><input type="text" name="mail" size="30" value="<?php echo $ligne->MINITP_MAIL; ?>" /></div>
			<div>Commentaire (*) : </div><div><textarea name="comment" rows="5" cols="40"><?php echo $ligne->MINITP_COMMENT; ?></textarea></div>
            <div><input type="hidden" name="id" size="30" value="<?php echo $ligne->MINITP_ID; ?>" /></div>
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
