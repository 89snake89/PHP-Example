<?php
require_once 'classi/start.php';

$db = new db();
$db->dbConnect();
$db->openDb("dbprova");

$db->dbDelete("auto_user", $_GET);

$db->dbDelete("insurance", $_GET);
$db->dbClose();
header("Location: user_page.php?id_user=".user::isLogged()."&success=1");
//echo "<br/><a href=\"user_page.php\">TORNA</a>";