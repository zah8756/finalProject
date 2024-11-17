<?php
	$path='./';
	$page='home';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'home';
	include_once('./assets/inc/nav.php');
?>
<script src="./assets/scripts/button_code.js"></script>

	<div id="container">
		<div id="backdrop">
			<img src="./assets/images/SeaBaseLogo.png" alt="Seabase logo" id="logo">	
		</div>

		<div id="news">
			<div class="imgContainer" id=covidUp>
				<img src="./assets/images/mask.jpg" alt="Updates on covid" class="responsive">
				<h3>Updates on covid</h3>
				<p>As coivd is winding down its is still our duty to keep you safe during your time at Seabase. To this end a vacination form is still required to atend any of the activiites required at seabase. However masks will only be required while you are indoors</p>
			</div>

			<a href="adventure.php" class="indexMove">
				<div class="imgContainer" id=currentE>
					<img src="./assets/images/aImage.jpg" alt="Current events" class="responsive">
					<h3>Seabase & Scouting</h3>
					<p>Learn about the current adventures your troop can enbark on at Seabase.</p>
				</div>
			</a>
		
			<a href="image_gallery.php" class="indexMove">
				<div class="imgContainer" id="imageGala"> 
					<img src="./assets/images/seabaseCamera.jpg" alt="images" class="responsive">
					<h3>Take a look at some of the sights</h3>
					<p>Get a good look at some of the moemories captured here at Seabase.</p>
				</div>
			</a>
			<a href="seabase.php" class="indexMove">
				<div class="imgContainer" id="learn"> 
					<img src="./assets/images/history.png" alt="Learn more about the seabase" class="responsive">
					<h3>Learn more about seabase</h3>
					<p>Learn why scouts have been coming to Seabase for over thirty years</p>
				</div>
			</a>
		</div>	

	</div> 

	<div id="booking">
		<button id="bookingButton" onclick="changePage()"><p>Book a trip to seabase today</p></button>
	</div>
<?php
	include_once('./assets/inc/footer.php'); 
?> 