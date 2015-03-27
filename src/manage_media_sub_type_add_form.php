<head> 
<META HTTP-EQUIV="Refresh" CONTENT="2; URL=index.php?content=home"> 
</head> 
<?php 

	if (isset($_POST['sub_Media_Creation']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$requete = $bdd->prepare('INSERT INTO media_sub_type(Name_Media_Sub_Type, Id_Media_Type) VALUES (?, ?)');
		try {
			$requete->execute(array($_POST['media_Name_Sub_Type'], $_POST['media_Type']));
			echo 'Le sous-média à bien été ajouté ;) GG mon gars !!!!';
		} catch (Exception$e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
		
	}
	else 
	{
		echo 'Opération annulée !!!';
	}

?>