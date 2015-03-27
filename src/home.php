<table class="table table-bordered table-striped table-condensed">
	<caption>
		<div class="row">
			<div class="col-lg-4">
				<h4>Liste des médias</h4>
			</div>
			<div class="col-lg-offset-6 col-lg-2	">
				<a href="manage_media.php" class="btn btn-xs btn-success treeView" id="manage_media"><span class="glyphicon glyphicon-plus"></span></a>
				<a href="manage_media.php" class="btn btn-xs btn-danger treeView" id="manage_media"> <span class="glyphicon glyphicon-minus"></span></a>
			</div>
		</div>
	</caption>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Type</th>
			<th>Nombre de saison</th>
			<th>Nombre total d'épisode</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$bdd = new PDO ( 'mysql:host=localhost;dbname=ChapTrack', 'root', '', array (
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		) );
		$response = $bdd->query ( 'SELECT * FROM media ORDER BY Id_Media_Sub_Type, Name_Media' );
		while ( $donnees = $response->fetch () ) {
			$id_Media = $donnees ['Id_Media'];
			$name_Media = $donnees ['Name_Media'];
			$id_Media_Sub_Type = $donnees ['Id_Media_Sub_Type'];
			$name_Media_Sub_Type = $bdd->query ( 'SELECT Name_Media_Sub_Type FROM media_sub_type WHERE Id_Media_Sub_Type = ' . $id_Media_Sub_Type )->fetchColumn ();
			$nb_Season = $bdd->query ( 'SELECT MAX(Nb_Season) from season where Id_Media =' . $id_Media )->fetchColumn ();
			
			$season_Array = [ ];
			$response2 = $bdd->query ( 'SELECT * FROM season where Id_Media = ' . $id_Media );
			while ( $donnees2 = $response2->fetch () ) {
				$season_Array[] = $donnees2 ['Id_Season'];
			}
			
			$episode_Sum = 0 ;
			foreach ($season_Array as $value) {
				$response3 = $bdd->query ( 'SELECT * from episode where Id_Season =' . $value );
				while ( $donnees3 = $response3->fetch()){
					$episode_Sum++;
				}
			}
			unset($value);

			echo '<tr>';
			echo '<td><a href="media.php?id_Media='. $id_Media . '" class="treeView" id="treeView">' . $name_Media . '</a></td>';
			echo '<td>' . $name_Media_Sub_Type . '</td>';
			echo '<td>' . $nb_Season . '</td>';
			echo '<td>' . $episode_Sum . '</td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>