<?php
require_once 'classi/start.php';

$auto = array();
$db = new db();
$db->dbConnect();
$db->openDb("dbprova");
var_dump($_GET);
print_r($_GET);
$db->dbUpdate("auto", $_GET, array('Id_Auto','Marca','Modello','Anno'));
$db->dbClose();
header("Location: user_page.php?id_user=".user::isLogged()."&success=1");