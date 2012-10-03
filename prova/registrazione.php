<?php
require_once 'classi/start.php';
?>
<html>
<body>
<?php
	$db = new db();
	$db->dbConnect();
	$db->openDb("dbprova");
	$_POST["Psw"] = sha1($_POST["Psw"]);
	$db->dbInsert("user", $_POST, array("nome", "cognome", "Tipo_Patente", "mail", "Psw"));
	$_SESSION['id'] = $db->lastId();
	$db->dbClose();
	header("Location: user_page.php?success=1");
?>

</body>
</html>
