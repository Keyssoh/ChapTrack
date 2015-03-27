<h2>Gestion de sous-type de média</h2>

<form class="form-horizontal" method=POST  action=index.php?content=manage_media_sub_type_add_form>
<fieldset>

<!-- Form Name -->
<legend>Création d'un sous-type de média</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="media_Name_Sub_Type">Nom du sous-type de média</label>  
  <div class="col-md-4">
  <input id="media_Name_Sub_Type" name="media_Name_Sub_Type" type="text" placeholder="Saisissez le nom du sous-type de média" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="media_Type">Type de média</label>
  <div class="col-md-4">
    <select id="media_Type" name="media_Type" class="form-control">
    	<?php
		    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		    $reponse = $bdd->query('SELECT * FROM media_Type');
		    while ($donnes = $reponse->fetch())
		    {
		    	$value_Option 	= $donnes['Id_Media_Type'];
		    	$label_Option 	= $donnes['Name_Media_Type'];    	
		    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
		    }
    	?>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sub_Media_Creation"></label>
  <div class="col-md-8">
    <button id="sub_Media_Creation" name="sub_Media_Creation" class="btn btn-success">Création</button>
    <button id="sub_Media_Cancel" name="sub_Media_Cancel" class="btn btn-danger">Retour</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal" method=POST  action=index.php?content=manage_media_sub_type_modify_form>
<fieldset>

<!-- Form Name -->
<legend>Modification d'un sous-type de média</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="old_Media_Name_Sub_Type">Sous-type de média à modifier</label>
  <div class="col-md-4">
    <select id="old_Media_Name_Sub_Type" name="old_Media_Name_Sub_Type" class="form-control">
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_Media_Name_Sub_Type">Nouveau nom du sous-type de média</label>  
  <div class="col-md-4">
  <input id="new_Media_Name_Sub_Type" name="new_Media_Name_Sub_Type" type="text" placeholder="Saisissez le nom du sous-type de média" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_Media_Type">Nouveau type de média</label>
  <div class="col-md-4">
    <select id="new_Media_Type" name="new_Media_Type" class="form-control">
    	<?php
		    $bdd = new PDO('mysql:host=localhost;dbname=ChapTrack', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		    $reponse = $bdd->query('SELECT * FROM media_Type');
		    while ($donnes = $reponse->fetch())
		    {
		    	$value_Option 	= $donnes['Id_Media_Type'];
		    	$label_Option 	= $donnes['Name_Media_Type'];    	
		    	echo '<option value="'.$value_Option.'">'.$label_Option.'</option>';
		    }
    	?>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sub_Media_Modification"></label>
  <div class="col-md-8">
    <button id="sub_Media_Modification" name="sub_Media_Modification" class="btn btn-success">Modification</button>
    <button id="sub_Media_Cancel" name="sub_Media_Cancel" class="btn btn-danger">Retour</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal" method=POST  action=index.php?content=manage_media_sub_type_delete_form>
<fieldset>

<!-- Form Name -->
<legend>Suppression d'un sous-type de média</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="delete_Media_Name_Sub_Type">Sous-type de média à suprimer</label>
  <div class="col-md-4">
    <select id="delete_Media_Name_Sub_Type" name="delete_Media_Name_Sub_Type" class="form-control">
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
  <label class="col-md-4 control-label" for="sub_Media_Delete"></label>
  <div class="col-md-8">
    <button id="sub_Media_Delete" name="sub_Media_Delete" class="btn btn-success">Suppression</button>
    <button id="sub_Media_Cancel" name="sub_Media_Cancel" class="btn btn-danger">Retour</button>
  </div>
</div>

</fieldset>
</form>

<script src="../js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $("#old_Media_Name_Sub_Type").change(function(){
    var id=$('#old_Media_Name_Sub_Type').val();
//              $.ajax({
//                       type: "POST",
//                       data: {"id" : id},  
//                       url: "./fichier.php",
//                       success:function(data){
//                             $("#idinput").val(data);   

//                         }
//               }); 
   });
});
</script>