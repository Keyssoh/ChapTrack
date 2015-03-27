<?php
	header("Content-type: text/javascript");
    
    if (isset($_GET['id_Episode']))
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    	$reponse = $bdd->prepare('UPDATE EPISODE SET Episode_Saw = :seen where Id_Episode = :id_Episode');
		$reponse->execute(array(
				'seen' => $_GET['seen'],
				'id_Episode' => $_GET['id_Episode']
		));
    }elseif (isset($_GET['id_Season'])){
    	$bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    	$reponse = $bdd->prepare('UPDATE EPISODE SET Episode_Saw = :seen where Id_Season = :id_Season');
    	$reponse->execute(array(
    			'seen' => $_GET['seen'],
    			'id_Season' => $_GET['id_Season']
    	));
    }
    
?>