<?php
	include('./assets/inc/dbconf.php'); 

    function sanatize($str,$lenght = 50){
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str,0,$lenght);
	}

    if(!empty($_GET['customerName']) && !empty($_GET['customerEmail']) && !empty($_GET['customerDate']) && !empty($_GET['customerNumber'])){

        $name = sanatize($_GET['customerName']);

        $email = $_GET['customerEmail'];
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        $number = $_GET['customerNumber'];
        $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);

		$sql = "INSERT INTO `seabaseBooking` (`customerName`, `customerEmail`,`customerAdventure`,`customerDate`,`customerNumber`) VALUES (?, ?, ?, ?, ?);";

		$stmt = $conn->prepare($sql);
		$stmt -> bind_param("ssssi",$name,$email,$_GET['customerAdventure'],$_GET['customerDate'],$number);
		$stmt -> execute();
	}

	// Code header() is to make sure we get new data - clears the cache!
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/json');

    $sql = "SELECT * FROM `seabaseBooking`";
	$results = $conn->query($sql);

	while($row = $results->fetch_assoc()) {
		$records [] = $row;
	}

	echo json_encode($records);
?>
