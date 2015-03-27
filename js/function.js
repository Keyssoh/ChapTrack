$(document).ready(function(){
	//au click sur le lien dans le menu
	$("#middle").on("click", ".treeView", function(evt){
		evt.preventDefault(); // annule l'action du lien
		//on recupere la valeur de l'attribut id pour afficher tel ou tel resultat
		$page = ($(this).attr('href'));
		$.ajax({
			url : $page,
			cache : false,
			success : function(html){
				display(html);
			},
			error : function(XMLHttRequest, textStatus, errorThrown){
				alert('Error XMLHttRequest : '+XMLHttRequest);
				alert('Error textStatus : '+textStatus);
				alert('Error errorThrown : '+errorThrown);
			}
		})
		return false;
	});
});

function display(data){
	$('#content').fadeOut(function(){
		$('#content').empty();
		$('#content').append(data);
		$('#content').fadeIn();
	});
}

$(document).ready(function(){
// Détecte le hash dans l'url, l'utilise pour sélectionner le lien correspondant, déclenche le clique
$("a[href='" + window.location.hash + "']").trigger('click')
});
//----------AJAX Permet de gérer le rechargement partiel de la page----------//


//----------Permet de gérer le clic sur les épisodes vu ou non----------//
function chk(chk){
	{
	    var expr = /\d+$/gi;   // expression reguliere  pour extraction de l indice du checkbox 
	    var indice = chk.id.match(expr);  // on recupere l indice du chekbox
	 
	    if (chk.checked){
        	updateEpisodeSeen(indice,1);
	    }else{
	    	updateEpisodeSeen(indice,0);
	    }
	}
};
//----------Permet de gérer le clic sur les épisodes vu ou non----------//

//----------Permet de gérer la mise à jour de la BDD lors d'un clic sur vu d'un épisode----------//
function updateEpisodeSeen(id_Episode, seen) {
    var scriptElement = document.createElement('script');
    scriptElement.src = 'updateEpisodeSeen.php?id_Episode=' + id_Episode + '&seen=' + seen;
    document.body.appendChild(scriptElement);
}
//----------Permet de gérer la mise à jour de la BDD lors d'un clic sur vu d'un épisode----------//

//----------Permet de gérer le clic sur les saisons vu ou non----------//
function chk_All(chk,id_Season){
	{	
	    var expr = /\d+$/gi;   // expression reguliere  pour extraction de l indice du checkbox 
	    var indice = chk.id.match(expr);  // on recupere l indice du chekbox
	    $className = ".id_Season" + id_Season;
	    $queryAll = document.querySelectorAll($className);
	 
    	for(var i = 0, c = $queryAll.length; i < c; i++){
    		if (chk.checked){
	    		$queryAll[i].checked=true;
    		}else{
	    		$queryAll[i].checked=false;
	    	}
	    }
    	
    	if (chk.checked){
    		updateAllEpisodeSeen(id_Season, 1);
		}else{
			updateAllEpisodeSeen(id_Season, 0);
    	}
	}
};
//----------Permet de gérer le clic sur les saisons vu ou non----------//

//----------Permet de gérer la mise à jour de la BDD lors d'un clic sur vu d'une saison----------//
function updateAllEpisodeSeen(id_Season, seen) {
    var scriptElement = document.createElement('script');
    scriptElement.src = 'updateEpisodeSeen.php?id_Season=' + id_Season + '&seen=' + seen;
    document.body.appendChild(scriptElement);
}
//----------Permet de gérer la mise à jour de la BDD lors d'un clic sur vu d'une saison----------//

function hw(){
	alert('hello world !');
}