<h3>Aggiorna il DB auto!</h3><br />
		<form action="aggiorna.php" method="get">
			ID: <input type="text" name="Id_Auto" /><br />
			Marca: <input type="text" name="Marca" /><br />
			Modello: <input type="text" name="Modello" /><br />
			Anno: <select name="Anno">
					<?php 
					for($i=1999;$i<2013;$i++)
					{
						echo "<option value=\"". $i . "\">" . $i . "</option>";
					}
					?>
					</select>
			<button type="submit">Invia</button>
			</form>
			<hr />