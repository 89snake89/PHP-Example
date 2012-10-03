<?php
require_once 'classi/start.php';
$auto = array();
$db = new db();
$db->dbConnect();
$db->openDb("dbprova");

if(isset($_GET["Marca"]) && isset($_GET["Modello"]) && $_GET["Marca"] != "" && $_GET["Modello"] != "")
{
	$db->dbInsert("auto", $_GET, array("Marca", "Modello", "Anno"));
}

$db->dbClose();
header("Location: user_page.php?id_user=".user::isLogged()."&success=1");
