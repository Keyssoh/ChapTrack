<!-- Intégration du javascript perso -->
<!-- <script src="../js/function.js"></script> -->

<h2>Gestion des médias</h2>
<?php 
	if(1==1){
		echo 'toto';
	}
?>
<ul class="nav nav-tabs">
    <li class="active"><a href="#creation" data-toggle="tab">Création</a></li>
    <li><a href="#modification" data-toggle="tab">Modification</a></li>
    <li><a href="#suppression" data-toggle="tab">Suppression</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="creation">
    	<form class="form-horizontal" method=POST  action=index.php?content=manage_media_add_form>

		<fieldset>
			
		<!-- Form Name -->
		<legend>Création d'un nouveau média</legend>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Name">Nom du média</label>  
		  <div class="col-md-4">
		  <input id="media_Name" name="media_Name" type="text" placeholder="Saisissez le nom du média" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Sub_Type">Sous-Type du média</label>
		  <div class="col-md-4">
		    <select id="media_Sub_Type" name="media_Sub_Type" class="form-control">
			    <?php
				    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				    $reponse = $bdd->query('SELECT * FROM media_Sub_Type');
				    while ($donnes = $reponse->fetch())
				    {
				    	$value_Option 	= $donnes['Id_Media_Sub_Type'];
				    	$label_Option 	= $donnes['Name_Media_Sub_Type'];    	
				    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
				    }
			    ?>
		    </select>
		  </div>
		</div>
		
		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Creation"></label>
		  <div class="col-md-8">
		    <button id="media_Creation" name="media_Creation" class="btn btn-success">Création</button>
		    <button id="media_Cancel" name="media_Cancel" class="btn btn-danger">Retour</button>
		  </div>
		</div>
		
		</fieldset>
		</form>
    </div>
    
    <div class="tab-pane" id="modification">
    	<h2>Modification d'un média</h2>
    	
		<form class="form-horizontal" method=POST  action=index.php?content=manage_media_modify_add_season_form>
		<fieldset>
		
		<!-- Form Name -->
		<legend>Ajout d'une saison / épisode</legend>
		
		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Name">Nom du média</label>
		  <div class="col-md-4">
		    <select id="media_Name" name="media_Name" class="form-control">
			    <?php
				    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				    $reponse = $bdd->query('SELECT * FROM media ORDER BY Name_Media');
				    while ($donnes = $reponse->fetch())
				    {
				    	$value_Option 	= $donnes['Id_Media'];
				    	$label_Option 	= $donnes['Name_Media'];    	
				    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
				    }
			    ?>
		    </select>
		  </div>
		</div>
		
		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Nb_Season_Episode">Ajouter une saison de combien d'épisode</label>
		  <div class="col-md-4">
		    <select id="media_Nb_Season_Episode" name="media_Nb_Season_Episode" class="form-control">
			    <?php
				    $nb_Episode = 1;
				    for($nb_Episode = 1 ; $nb_Episode < 100 ; $nb_Episode++)
				    {	
				    	echo '<option value="'.$nb_Episode.'">'.$nb_Episode.'</option>';
				    }
			    ?>
		    </select>
		  </div>
		</div>
		
		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Add_Season_Episode"></label>
		  <div class="col-md-8">
		    <button id="media_Add_Season_Episode" name="media_Add_Season_Episode" class="btn btn-success">Ajouter</button>
		    <button id="media_Cancel" name="media_Cancel" class="btn btn-danger">Annuler</button>
		  </div>
		</div>
		
		</fieldset>
		</form>
    	
		
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Modification d'un nom de média</legend>

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Name">Nom du média</label>
		  <div class="col-md-4">
		    <select id="media_Name" name="media_Name" class="form-control">
			    <?php
				    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				    $reponse = $bdd->query('SELECT * FROM media ORDER BY Name_Media');
				    while ($donnes = $reponse->fetch())
				    {
				    	$value_Option 	= $donnes['Id_Media'];
				    	$label_Option 	= $donnes['Name_Media'];    	
				    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
				    }
			    ?>
		    </select>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_New_Name">Nouveau nom du média : </label>  
		  <div class="col-md-4">
		  <input id="media_New_Name" name="media_New_Name" type="text" placeholder="Saisissez le nouveau nom de média" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Change_Name"></label>
		  <div class="col-md-8">
		    <button id="media_Change_Name" name="media_Change_Name" class="btn btn-success">Modification</button>
		    <button id="media_Cancel" name="media_Cancel" class="btn btn-danger">Scary Button</button>
		  </div>
		</div>
		
		</fieldset>
		</form>
		
    </div>
    <div class="tab-pane" id="suppression">
		<form class="form-horizontal" method=POST  action=index.php?content=manage_media_delete_form>
		<fieldset>
		
		<!-- Form Name -->
		<legend>Suppression de média</legend>
		
		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_Name">Nom du média</label>
		  <div class="col-md-4">
		    <select id="media_Name" name="media_Name" class="form-control">
			    <?php
				    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				    $reponse = $bdd->query('SELECT * FROM media ORDER BY Name_Media');
				    while ($donnes = $reponse->fetch())
				    {
				    	$value_Option 	= $donnes['Id_Media'];
				    	$label_Option 	= $donnes['Name_Media'];    	
				    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
				    }
			    ?>
		    </select>
		  </div>
		</div>
		
		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="media_suppression"></label>
		  <div class="col-md-8">
		    <button id="media_Suppression" name="media_Suppression" class="btn btn-success">Suppression</button>
		    <button id="media_Cancel" name="media_Cancel" class="btn btn-danger">Annulation</button>
		  </div>
		</div>
		
		</fieldset>
		</form>
    
    </div>
</div>