<?php 
	require_once 'classi/start.php';
	user::logIn();
	user::isLogged();
?>
<html>
	<body>
		<a href='index.php?logoff=1'>Logout</a>
		<br/>
		<?php 
			//Parte relativa a ricerca e inserimento nel DB
			include("/file/header.php")
		?>
		<?php 
			//Parte relativa a ricerca e inserimento nel DB
			include("/file/aggiornamento.php")
		?>
		<?php 
			//Gestione immagine
		include("/file/immagine.php")
		?>
		<?php 
			//Acquisto dell'automobile
			include("/file/acquisto.php")
		?>
		<?php 
			//Vendita dell'automobile
			include("/file/vendita.php")
		?>
		<?php 
			//Assicurazione dell'automobile
			include("/file/assicurazione.php")
		?>
	</body>
</html>
<?php
