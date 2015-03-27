<?php
$bdd = new PDO ( 'mysql:host=localhost;dbname=ChapTrack', 'root', '', array (
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
) );
$response = $bdd->query ( 'SELECT * FROM media WHERE Id_Media = ' . $_GET['id_Media'] );
while ( $donnees = $response->fetch () ) {
	$id_Media = $donnees ['Id_Media'];
	$name_Media = $donnees ['Name_Media'];

	echo '<div class="row" >';
		echo '<div class="col-lg-4">';
			echo '<h1>' . $name_Media . '</h1>';
		echo '</div>';
		echo '<div class="col-lg-offset-5 col-lg-2">';
			echo '<a href="manage_media.php" class="btn btn-xs btn-success treeView" id="manage_media"><span class="glyphicon glyphicon-plus"></span></a>';
			echo '<a href="manage_media.php" class="btn btn-xs btn-danger treeView" id="manage_media"> <span class="glyphicon glyphicon-minus"></span></a>';
		echo '</div>';
		echo '<div class="col-lg-1">';
		echo '<a href="manage_media.php" class="btn btn-xs btn-ind treeView" id="manage_media"> <span class="glyphicon glyphicon-pencil"></span></a>';
		echo '</div>';
	echo '</div>';
		
	$id_Media_Sub_Type = $donnees ['Id_Media_Sub_Type'];
	$name_Media_Sub_Type = $bdd->query ( 'SELECT Name_Media_Sub_Type FROM media_sub_type WHERE Id_Media_Sub_Type = ' . $id_Media_Sub_Type )->fetchColumn ();
	
// 	$nb_Season = $bdd->query ( 'SELECT MAX(Nb_Season) from season where Id_Media =' . $id_Media )->fetchColumn ();
	
	$season_Array = [ ];
	$response2 = $bdd->query ( 'SELECT * FROM season where Id_Media = ' . $id_Media );
	while ( $donnees2 = $response2->fetch () ) {
		$season_Array[] = $donnees2 ['Id_Season'];
	}
	
	$season_Number = 1;
	$episode_Sum = 0 ;
	foreach ($season_Array as $value) {	
		$season_Number = $bdd->query ( 'SELECT Nb_Season FROM season WHERE Id_Season = ' . $value )->fetchColumn ();
		echo '<table class="table table-bordered table-striped table-condensed">';
		echo '<tr>';
			echo '<td>';
			echo'Saison ' . $season_Number;
			echo '</td>';
			echo '<td>';
			echo '</td>';
			echo '<td>';
			echo '<span class="glyphicon glyphicon-eye-open"></span>';
			echo '</td>';
			echo '<td>';
			if (all_Episode_Seen($value)){
				echo '<input type="checkbox" id="' . $value . '" name="' . $value . '" value="' . $value . '" onclick="chk_All(this,' . $value . ')" checked/>';
			}else {
				echo '<input type="checkbox" id="' . $value . '" name="' . $value . '" value="' . $value . '" onclick="chk_All(this,' . $value . ')" />';
			}
			
			echo '</td>';
		echo '</tr>';
		echo '<tbody>';
			$response3 = $bdd->query ( 'SELECT * from episode where Id_Season =' . $value );
			while ( $donnees3 = $response3->fetch()){
				echo '<tr>';
				echo '<td>Episode : ' . $donnees3 ['Nb_Episode'] . '</td>';
				echo '<td>Futur nom de la mort qui tue qui prend plein de place</td>';
				echo '<td>Vu</td>';
				if ($donnees3['Episode_Saw']){
					echo '<td> <input class="' . 'id_Season'.$value . '" type="checkbox" id="' . $donnees3['Id_Episode'] . '" name="' . $donnees3['Id_Episode'] . '" value="' . $donnees3['Id_Episode'] . '" onclick="chk(this)" checked/></td>';
				}else {
					echo '<td> <input class="' . 'id_Season'.$value . '" type="checkbox" id="' . $donnees3['Id_Episode'] . '" name="' . $donnees3['Id_Episode'] . '" value="' . $donnees3['Id_Episode'] . '" onclick="chk(this)"/></td>';
				}
				echo '</tr>';	
				}
			}
			unset($value);
			$season_Number++;
			echo '</tbody>';
			echo '</table>';
		}
		
		function all_Episode_Seen($id_Season){
			$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$response = $bdd->query ( 'SELECT * from episode where Id_Season =' . $id_Season );
			$all_Seen = true;
			while ($donnee = $response->fetch()){
				if (!$donnee['Episode_Saw']){
					$all_Seen = false;
				}
			}
			if ($all_Seen){
				return true;
			}else {
				return false;
			}
		}
		?>