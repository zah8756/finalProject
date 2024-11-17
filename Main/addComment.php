<?php
	include('./assets/inc/dbconf.php'); 
	include('./assets/inc/validations.php'); 

	function sanatize($str,$lenght = 50){
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str,0,$lenght);
	}
	

    if(!empty($_GET['user']) && !empty($_GET['comment'])){

		$user = sanatize($_GET['user']);
		$comment = sanatize($_GET['comment']);

		$sql = "INSERT INTO `seabaseComments` (`user`, `comment`) VALUES (?, ?);";

		$stmt = $conn->prepare($sql);
		$stmt -> bind_param("ss",$user,$comment);
		$stmt -> execute();
	}

	// Code header() is to make sure we get new data - clears the cache!
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/json');

    $sql = "SELECT * FROM `seabaseComments`";
	$results = $conn->query($sql);

	while($row = $results->fetch_assoc()) {
		$records [] = $row;
	}

	echo json_encode($records);
?>
