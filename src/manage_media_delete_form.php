<head> 
<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php?content=home"> 
</head> 
<?php 

	if (isset($_POST['media_Suppression']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$requete = $bdd->prepare('DELETE FROM media where id_Media = ?');
		try {
			$requete->execute(array($_POST['media_Name']));
			echo 'Le média à bien été supprimé ;) GG mon gars !!!!';
		} catch (Exception$e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
		
	}
	else 
	{
		echo 'Opération annulée !!!';
	}

?>