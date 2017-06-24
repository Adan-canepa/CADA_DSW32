<?php
$opcion=(isset($_REQUEST['opcion'])?$_REQUEST['opcion']:0);

switch($opcion){
	case "pag1":{
		echo "primera pagina";
		break;
	}
		
		case "pag2":{
		echo "segunda pagina";
		break;
	}
		case "pag3":{
		echo "tercera pagina";
		break;
	}
		
		case "pag4":{
		echo "cuarta pagina";
		break;
	}
		default:{
			echo "<h5>Error</h5>"; break;
	}
	?>  