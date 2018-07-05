<?php include "inc/header.php"; ?>


<?php 

include_once "system/libs/Main.php";
include_once "system/libs/DController.php"; 


$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL) {
	$url = rtrim($url,'/');
	$url = explode("/", $url);
} else {
	unset($url);
}

if (isset($url)) {

	include 'app/controllers/'.$url[0].'.php';
	$ctlr = new $url[0]();
	if (isset($url[2])) {
		$ctlr->$url[1]($url[2]);
	} else {
		if (isset($url[1])) {
			$ctlr->$url[1]();
		} else {
			# code... 
		}
	}
	
} else {
	echo "default";
}




?>





<?php include "inc/footer.php"; ?>