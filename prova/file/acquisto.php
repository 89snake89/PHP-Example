<h3>Compra un auto!</h3><br/>
		<form action="compra.php" method="get">
			<?php
				require_once("classi/dbClass.php");
				$db = new db();
				$db->dbConnect();
				$db->openDb("dbprova");
				$query_sel="SELECT * FROM auto WHERE Id_Auto NOT IN";
				$query_sel .= "(SELECT Id_Auto FROM auto_user) ORDER BY Marca ;";
				$result = $db->dbQuery($query_sel);
				
				echo "<br />";
				echo "<select name=\"Id_Auto\">";
				
				while($riga = mysql_fetch_assoc($result))
				{
					echo "<option value=".$riga[Id_Auto].">".$riga['Marca']." ".$riga['Modello'] . " ".$riga['Anno']."</option>";
				}
				echo "</select>";
				//print_r($_GET);
			?>
			<button type="submit" name="Id_User" value=<?php echo user::isLogged()?>>Compra!</button>
		</form>
		<hr />