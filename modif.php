<html>
	<head>
		<title>Modif comm</title>
	</head>
	<body>
<?php include("header.inc.php"); ?>
<?php include ("connexion.php");?>
<?php include("modif_comment.php"); ?>


<?php		
	if(!empty($_POST)){
		extract ($_POST);
		$sql="UPDATE minitp SET titre='$titre', contenu='$contenu' WHERE id=$id";
		$req = mysql_query($sql) or die('Erreur SQL!<br/>'.$sql. '<br/>' .mysql_error());
		echo "New Modifiée";
		$_GET["id"]=$id;
	}
	
	$sql="SELECT * FROM news WHERE id={$_GET["id"]}";
	$req = mysql_query($sql) or die('Erreur SQL!<br/>'.$sql. '<br/>' .mysql_error());
	$data=mysql_fetch_assoc($req);
	print_r($data);


?>
	<h2>Commentez !</h2>
		<form id="formu" name="formu" action="#" method="get">
			<div>Votre nom (*) : </div><div><input type="text" name="nom" value="Entrez votre nom" size="30" /></div>
			<div>Votre mail (*) : </div><div><input type="text" name="mail"value="Entrez votre mail"  size="30" /></div>
			<div>Commentaire (*) : </div><div><textarea name="comment" rows="5" cols="40"></textarea></div>
			<div>(*) Obligatoire</div>
			<div><input type="submit" value="Envoyer" /></div>
		</form>

	</body>
</html>
