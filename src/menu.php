<?php
switch ($_GET['content']){
	
	case "home" :
		$include = $_GET['content'] . '.php';;
	break;
	
	case "manage_media" :
		$include = $_GET['content'] . '.php';;
	break;
	
	case "search_media" :
		$include = $_GET['content'] . '.php';;
	break;
	
	case "manage_media_sub_type"	 :
		$include = $_GET['content'] . '.php';;
	break;
	
	default:
		$include = "home.php";;
}

include $include;

?>