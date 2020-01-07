<?php
echo'
<form action="creationListe.php" method="post">
			<p>
				CRÉATION DE LISTE :<br>
				<input type="text" name="nomListe" placeholder="nom de la liste" /><br>
				<input type="date" name="dateListe"/><br>
				<textarea name="description" rows="8" cols="50">Une petite description ici. </textarea><br>
				<input type="submit" value="Créer"/><br><br><br><br>
			</p>
		</form>';
