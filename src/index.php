<!DOCTYPE html>
<html lang="fr">
<head>
<title>Welcome to ChapTrack</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Gestion des accents -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Intégration du CSS Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
<!-- Intégration du CSS perso -->
<link href="../css/style.css" rel="stylesheet" media="screen">
<!-- Intégration des librairie jQuery -->
<!-- <script -->
<!-- 	src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" -->
<!-- 	type="text/javascript"></script> -->
<!-- <script -->
<!-- 	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" -->
<!-- 	type="text/javascript"></script> -->
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"
 	type="text/javascript"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="../js/bootstrap.min.js"></script>    
<!-- Intégration du javascript perso -->
<script src="../js/function.js"></script>

</head>
<body> 
	<!-- Conteneur principal -->
	<div class="container">
		<!----------------------------------Header------------------------------------>
		<!-- 				<div class="row" id="header"> -->
		<!-- 	      			<div class="col-lg-12"> -->
	      				<?php //include 'header.php'; ?>
<!-- 	      			</div>		      			 -->
		<!-- 	      		</div> -->
		<!----------------------------------Header------------------------------------>

		<!----------------------------------Middle------------------------------------>
		<div class="row" id="middle">
			<div class="col-lg-3">
	      				<?php include 'treeview.php'; ?>
	      			</div>
			<div class="col-lg-9" id="content">
			</div>
		</div>
		<!----------------------------------Middle------------------------------------>

		<!----------------------------------Footer------------------------------------>
		<!-- 	      		<div class="row" id="footer"> -->
		<!-- 		        	<div class="col-lg-12"> -->
		        		<?php //include 'footer.php'; ?>
<!-- 		        	</div> -->
		<!-- 		      	</div> -->
		<!----------------------------------Footer------------------------------------>
	</div>
</body>
</html>