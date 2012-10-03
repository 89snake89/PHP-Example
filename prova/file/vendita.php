<h3>Vendi un auto!</h3><br/>
		<form action="vendi.php" method="get">
			<?php
			require_once("classi/dbClass.php");
			$db = new db();
			$db->dbConnect();
			$db->openDb("dbprova");
			$query_sel="SELECT * FROM auto WHERE Id_Auto IN ";
			$query_sel .= "(SELECT Id_Auto FROM auto_user WHERE Id_User =".user::isLogged().") ORDER BY Marca ;";
			$result = $db->dbQuery($query_sel);
			
			echo "<br />";
			echo "Auto:<select name=\"Id_Auto\">";
			
			while($riga = mysql_fetch_assoc($result))
			{
				echo "<option value=".$riga[Id_Auto].">".$riga['Marca']." ".$riga['Modello'] . " ".$riga['Anno']."</option>";
			}
			echo "</select>";
			?>
			<button type="submit">Vendi subito!</button>
		</form>	
	
		<hr />