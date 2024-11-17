<?php
	$path='./';
	$page='booking';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'booking';
	include_once('./assets/inc/nav.php');
?>

<?php

 $adventure = $_GET['customerAdventure'];
 $date = $_GET['customerDate'];
 $name = $_GET['customerName'];
 $email = $_GET['customerEmail'];
 $number = $_GET['customerNumber'];

 if(empty($name)){
	header('Location: booking.php');
 }
 else{


?>

<h1>Book your adventure today</h1>
<div class="background" >
	<div class="backgroundCon"> 
		<div class="backgroundC" id="constrainer">
			<?php
			echo "<p>your adventure has been booked</p></br>";
			echo "<p>name: ". $name."</p>";
			echo "<p>Email:". $email ."</p>";
			echo "<p>Which adventure:". $adventure ."</p>";
			echo "<p>Number of people in group:". $number ."</p>";
			echo "<p>The date of your adventure:". $date ."</p> </br>";
			echo "<p>Thank you for comming down to Sebase</p>";
			echo "</div>";
 			}
			?>
	</div>
</div>

<?php
	include_once('./assets/inc/footer.php'); 
?> 