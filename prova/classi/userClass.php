<?php 

class user{
	//private $_userLogged=0;
	static function isLogged(){
		if(isset($_SESSION['id']) && $_SESSION['id']){
			return $_SESSION['id'];		
		}
		else return false;
	}
	
	static function logIn(){
		$db = new db();
		$db->dbConnect();
		$db->openDb("dbprova");
		if(isset($_POST['Mail']) && isset($_POST['Psw'])){
			
			$query = "SELECT Id_User FROM user
				  WHERE  Mail = '" . $_POST['Mail'] . "' 
				  		AND  Psw = SHA1('".$_POST['Psw']."') ;";
			$result = $db->dbQuery($query);
			$user = $db->fetchQuery($result);
			if(isset($user[0]['Id_User']))
			{
				$_SESSION['id'] = $user[0]['Id_User'];
			}
			else
			{
				echo "Errore";
			}
		}
		else 
		{
			return null;
		}
		$db->dbClose();
	}
	
	static function logOff(){
		$_SESSION['id'] = false;
		session_destroy();
	}
}

