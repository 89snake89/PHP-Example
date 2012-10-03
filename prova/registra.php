<html>
<body>
<h1>Benvenuto nella pagina di registrazione!</h1>
<form action="registrazione.php" method="post">
	Nome:<input type="text" name="nome"/>
	Cognome:<input type="text" name="cognome"/><br/>
	Patente:<select name="tipo_patente">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		<option value="BE">BE</option>
		<option value="CE">CE</option>
		<option value="DE">DE</option>
	</select><br/>
	E-Mail:<input type="text" name="mail"/>
	Password:<input type="password" name="Psw"/><br/>
	<button type="submit">Registrami!</button>
	<a href="index.php">Esci</a>
</form>
</body>
</html>

<?php
