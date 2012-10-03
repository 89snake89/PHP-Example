<?php
require_once 'classi/start.php';

$db = new db();
$db->dbConnect();
$db->openDb("dbprova");

$db->dbInsert("auto_user", $_GET, array("Id_Auto", "Id_User"));
$db->dbClose();
header("Location: user_page.php?id_user=".user::isLogged()."&success=1");
// echo "Auto comprata!"; 