Fichier de requêtes SQL diverses :)

<?php
//Remplir la liste des saisons
// $var = 1;
// while ($var < 30){
// 	$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// 	$requete = $bdd->prepare('INSERT INTO season(Nb_Season) VALUES (?)');
// 	try {
// 		$requete->execute(array($var));
// 		echo 'Episode : ' . $var . ' a bien été créée </br>';
// 		$var++;
// 	} catch (Exception$e){
// 		echo 'Exception reçue : ',  $e->getMessage(), "\n";
// 	}	
// }
?>

<?php
//Remplir la liste des episodes
// $var = 1;
// while ($var < 30){
// 	$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// 	$requete = $bdd->prepare('INSERT INTO episode(Nb_Episode, Episode_Saw) VALUES (?,?)');
// 	try {
// 		$requete->execute(array($var,'0'));
// 		echo 'Episode : ' . $var . ' a bien été créée </br>';
// 		$var++;
// 	} catch (Exception$e){
// 		echo 'Exception reçue : ',  $e->getMessage(), "\n";
// 	}	
// }
?>