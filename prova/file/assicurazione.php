<h4>Assicurati!</h4><br/>
		<form action="assicura.php" method="get">
			<?php
			require_once("classi/dbClass.php");
			$db = new db();
			$db->dbConnect();
			$db->openDb("dbprova");
			
			$query_sel="SELECT * FROM auto WHERE Id_Auto IN";
			$query_sel .= "(SELECT Id_Auto FROM auto_user WHERE Id_Auto NOT IN";
			$query_sel .="(SELECT Id_Auto FROM insurance WHERE Id_User=".user::isLogged()." )
					       AND Id_User=".user::isLogged().")";
			$query_sel .= "ORDER BY Marca;";
			//echo $query_sel;
			$result = $db->dbQuery($query_sel);
			
			echo "<br />";
			echo "Auto:<select name=\"Id_Auto\">";
			
			while($riga = mysql_fetch_assoc($result))
			{
				echo "<option value=".$riga[Id_Auto].">".$riga['Marca']." ".$riga['Modello'] . "
					 ".$riga['Anno']."</option>";
			}
				echo "</select>";
			?>
			<button type="submit" name="Id_User" value=<?php echo user::isLogged()?>>Assicurati!</button>
		</form>	