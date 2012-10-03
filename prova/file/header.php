<?php 
require_once 'classi/start.php';
?>
<table>
	<tr><td>
		<h3>Cerca auto!</h3><br />
		<form action="lavoro.php" method="get">
			Marca: <input type="text" name="marca" /><br />
			Modello: <input type="text" name="modello" /><br />
			<button type="submit">Invia</button>
			</form>
			</td>
			<td>
			<h3>Inserisci un auto nel nostro DB!</h3><br/>
		<form action="insert.php" method="get">
			Marca: <input type="text" name="Marca" /><br />
			Modello: <input type="text" name="Modello" /><br />
			Colore: <input type="text" name="colore" /><br />
			Prezzo: <input type="text" name="prezzo" /><br />
			Anno: <select name="Anno">
						<?php 
						for($i=1999;$i<=date("Y");$i++)
						{
							echo "<option value=\"". $i . "\">" . $i . "</option>";
						}
						?>
						
				  </select>
			<br />
			<button type="submit" name="Id_User" value=<?php echo user::isLogged()?>>Inserisci nel DB</button>
		
		</form>
		</td></tr>
		</table>
		<hr />