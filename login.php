<?php
session_start();
$login = $_GET["login"];
$password = $_GET["password"];
if (($login=="Admin") && ($password=="x251rt"))
{
	$_SESSION["admin"] = true;
	if ($_GET['iden'] == on)
	{
		
       if (!setcookie("ident", "admin" , time()+60*10)){
       
	       die ("le cookie ne peut etre enregistré !");
      
       }
	}
}
else
{
	$_SESSION["admin"] = false;
}
header("location:page_index.php");
?>


<?php
//if (identifier($login, $pwd))
//	if ($auto=="auto")

//}
?>