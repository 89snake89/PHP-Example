<?php

require_once 'classi/start.php';

$db = new db();
$db->dbConnect();
$db->openDb("dbprova");
if(isset($_GET))
{
	echo "\$_GET: <br/>";
	var_dump($_GET);
}
print_r($_GET);
if(!empty($_GET["marca"]))
{
	if(!empty($_GET["modello"]))
	{
		$query = "SELECT * FROM auto WHERE Marca=\"". $_GET["marca"] ."\" AND Modello=\"". $_GET["modello"] ."\";";
	}
	else
	{
		$query = "SELECT * FROM auto WHERE Marca=\"". $_GET["marca"]."\";";
	}
}
else 
{
	$query = "SELECT * FROM auto WHERE Modello=\"". $_GET["modello"]."\";";
}

echo "<br/>" . $query . "<br/>";
$result = $db->dbQuery($query);
//var_dump($result);
echo "<br />";
echo "<table border='0'>";

//var_dump($result);
while($riga = mysql_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>" . $riga['Marca'] . "</td><td> " . $riga['Modello'] ."</td><td>" .$riga['Anno'] ."</td></tr>";
}
echo "</table>";
$db->dbClose();
?>
<html>
<body>
	<a href="user_page.php">Torna!</a>
</body>
</html>