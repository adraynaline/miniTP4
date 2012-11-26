<?php 
	session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Mon expo photo</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen" id="css" />

	<script type="text/javascript" src="script.js"></script>
		<script language="Javascript">
		function cacher()
		{
			document.getElementById('login').style.visibility = 'visible';
		}
	</script>
	</head>

<body>

<?php include("include/header.inc.php"); ?>
<div id="login" style="visibility:hidden;">
	<form class="formu" name="formu" action="login.php" method="get">
			<div>Login </div><div><input type="text" name="login" size="40" value=""/></div>
			<div>Password </div><div><input type="password" name="password" size="40" value=""/></div>
			<label>Remember</label><input type="checkbox" name="auto"/><br/>
			<div><input type="submit" value="Connect" id="button" /></div>
		</form>
</div>

<div id="page">
	<div id="content">
		<h2>Bienvenue sur MonExpo.com</h2>
		<p> This is <strong>MonExpo</strong>, a free, fully standards-compliant CSS template designed by 
		<a href="#">WebDesigner</a>. The slideshow uses photos from <a href="#">Photographer</a> and is 
		powered by Poptrox (a jQuery plugin by <a href="#">Poptrox</a>). This free template is released 
		under a <a href="#">Creative Commons Attributions</a>license, so you’re pretty much free to do 
		whatever you want with it (even use it commercially) provided you keep the links in the footer intact. 
		Aside from that, have fun with it :) </p>
		<p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. 
		Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. </p>
	</div>
	<div id="sidebar">
		<h2>Mes actualités</h2>
		<ul>
			<li><a href="#">Maecenas luctus lectus at sapien</a></li>
			<li><a href="#">Etiam rhoncus volutpat erat</a></li>
			<li><a href="#">Donec dictum metus in sapien</a></li>
			<li><a href="#">Integer gravida nibh quis urna</a></li>
			<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
			<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
			<li><a href="#">Praesent scelerisque scelerisque erat</a></li>
		</ul>
	</div>
</div>

<?php include("include/footer.inc.php"); ?>

<script type="text/javascript" src="js/evt.js"></script>

</body>
</html>
