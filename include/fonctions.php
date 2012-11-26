<?php
function liste_commentaire()
{
$query = "select * from minitp order by MINITP_ID desc";//Connexion à une table
		$q = mysql_query($query);
		if ($q)
		{
			echo "<ul>";
			while ($row = mysql_fetch_object($q))
			{
				echo "<li>";
				echo $row->MINITP_COMMENT;
				echo "<br/>";
				echo "par " . $row->MINITP_NAME . " - ";
				echo "<a href='mailto:" . $row->MINITP_MAIL . "'>" . $row->MINITP_MAIL . "</a>";
				echo "<br/>";
				
				if ($_SESSION["admin"] == true)
				{
					echo "<a href='".$_SERVER['PHP_SELF']."?delete=".$row->MINITP_ID."' onclick='return confirm(\"Voulez-vous supprimer ce commentaire ?\")'>[DELETE]</a>";
					echo "<a href='form_modif.php?update_id=".$row->MINITP_ID."' onclick='return confirm(\"Voulez-vous modifier ce commentaire ?\")'>[UPDATE]</a>";
				}
				
				
				echo "</li>";
			}
			echo "</ul>";
		}
		else 
		{
			die('Erreur mysql_query : ' . mysql_error());
		}
}
?>


<?php
function envoi_formulaire()
{
	
	if(isset($_GET["comment"]) && (!isset($_GET["id"])))
	{
	$query = "insert into minitp
				(MINITP_NAME, MINITP_MAIL, MINITP_COMMENT, MINITP_ID)
				values
				('" . $_GET["nom"] . "', '" . $_GET["mail"] . "', '" .$_GET["comment"] . "','".$_GET["id"]."')";
	$q = mysql_query($query);
	if(!$q)
	{
		die('Erreur Mysql_query :' . mysql_error());
	}
	}
}
?>

<?
function supprimer_comment()
{
	
	if(isset($_GET["delete"]))
	{
	$query = "delete from minitp
				where  MINITP_ID=".$_GET["delete"];
				//echo $query;
	$q = mysql_query($query);
	if(!$q)
	{
		die('Erreur Mysql_query :' . mysql_error());
	}
	}
}
?>

<?
function modification_comment($id)
{
	$query = "select * from minitp where MINITP_ID=".$id;
	//echo $query;
	$q = mysql_query($query);
	if ($q)
	{
		$row = mysql_fetch_object ($q);
		return $row;
	}
	else
	{
		die('Erreur Mysql_query :' . mysql_error());
	}
}
?>

<?
function update_comment()
{
	if (isset($_GET["id"]))
	{
		$query = "update minitp
				set MINITP_NAME = '".$_GET["nom"]."',
					MINITP_MAIL = '".$_GET["mail"]."',
					MINITP_COMMENT = '".$_GET["comment"]."'
				where MINITP_ID = ".$_GET["id"];
		//echo $query;
		$q = mysql_query($query);
		if (!$q)			
		{
			die('Erreur Mysql_query :' . mysql_error());
		}
	}
}
?>