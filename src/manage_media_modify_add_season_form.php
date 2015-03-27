<head> 
<!-- <META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php?content=home">  -->
</head> 
<?php 

	if (isset($_POST['media_Add_Season_Episode']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$requete = $bdd->prepare('INSERT INTO season(Nb_Season, Id_Media) VALUES (?, ?)');
		try {
			$nb_Season_Actual = $bdd->query('SELECT COUNT(*) from season where Id_Media =' . intval($_POST['media_Name']))->fetchColumn();
			$requete->execute(array($nb_Season_Actual+1 , $_POST['media_Name']));
			$id_Season = $bdd->query ( 'SELECT LAST_INSERT_ID() FROM season')->fetchColumn ();
			$requete2 = $bdd->prepare('INSERT INTO episode(Nb_Episode, Id_Season) VALUES (?,' . intval($id_Season) . ')');
			for ($i = 1 ; $i <= $_POST['media_Nb_Season_Episode'] ; $i++){
				try {
					$requete2->execute(array($i));
				} catch (Exception $e) {
					echo 'Exception 1 reçue : ',  $e->getMessage(), "\n";
				}
			}
			
		} catch (Exception$e){
			echo 'Exception 2 reçue : ',  $e->getMessage(), "\n";
		}
		
	}
	else 
	{
		echo 'Opération annulée !!!';
	}
?>