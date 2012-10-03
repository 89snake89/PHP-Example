<?php require_once 'classi/start.php'; 
if(isset($_GET['logoff']) && $_GET['logoff']) user::logOff();
?>
<html>
<body>
<h1>Benvenuto!</h1>
<h4><a href="registra.php">Registrati subito!</a></h4><br/>
<hr />
<h4>Log In!</h4><br/>
<form action="user_page.php" method="post">
	Mail:<input type="text" name="Mail"/>
	Password:<input type="password" name="Psw"/>
	
	<button autofocus="autofocus" type="submit">Entra!</button>
</form>

</body>
</html>

