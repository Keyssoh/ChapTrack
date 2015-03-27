<head> 
<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php?content=home"> 
</head> 
<?php 

	if (isset($_POST['media_Creation']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$requete = $bdd->prepare('INSERT INTO media(Name_Media, Id_Media_Sub_Type) VALUES (?, ?)');
		try {
			$requete->execute(array($_POST['media_Name'], $_POST['media_Sub_Type']));
			echo 'Le média à bien été ajouté ;) GG mon gars !!!!';
		} catch (Exception$e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
		
	}
	else 
	{
		echo 'Opération annulée !!!';
	}

?>