<head> 
<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php?content=home"> 
</head> 
<?php 

	if (isset($_POST['sub_Media_Delete']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$requete = $bdd->prepare('DELETE FROM media_sub_type WHERE Id_Media_Sub_Type = ?');
		try {
			$requete->execute(array($_POST['delete_Media_Name_Sub_Type']));
			echo 'Le sous-média à bien été Supprimé ;) Mais tu peux le recréer au besoin !!!!';
		} catch (Exception$e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
		
	}
	else 
	{
		echo 'Opération annulée !!!';
	}

?>