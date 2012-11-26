<div id="header">
	<div id="logo">
		<h1><a href="page_index.php">MonExpo.com</a></h1>
		<p>Exercice de formation</p>
	</div>
	<div id="menu">
		<ul>
			
			<li class="current_page_item">
				<a id="lien1" href="page_index.php">Accueil</a></li>
			<li><a id="lien2" href="#">Blog</a></li>
			<li><a id="lien3" href="galerie.php">Photos</a></li>
			<li><a id="lien4" href="#">A propos</a></li>
			<li><a id="lien5" href="contact.php">Contact</a></li>
			<?php 
				if ($_SESSION["admin"] == true){
				echo "<li>					
						<a href=\"logout.php\">Logout </a>
						<li>";
				}	
				else {	
					echo "<li onclick=\"cacher()\"><a>Login</a></li>";
				}
			?>
		</ul>
		<div id="aide">Aide contextuelle</div>
	</div>
</div>
