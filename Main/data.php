<?php
	$path='./';
	$page='data';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'data';
	include_once('./assets/inc/nav.php');
?>

<h1 id="dataHead">Information</h1>

<div class="background">
	<div id="contianerData">
		<div id="activites" class="blurb">
			<div class="left">
				<p>Learn more about the many adventures that you can enjoy at Florida Seabase</p>
				<a href="./adventure.php" class="link"><p>Learn more</p></a>
			</div>
			<div class="right">
				<img src="./assets/images/snorkel.png" alt="Learn more about the islands" class="responsive">
			</div>
		</div>

		<div id="islandInfo" class="blurb">
			<div class="leftAlt">
				<img src="./assets/images/munsonDeer.jpg" alt="Learn more about the islands" class="responsive">
		
			</div>
			<div class="right">
				<p>Find out more about the island of big munson and and its historial backgorund</p>
				<a href="./background.php" class="righty link"><p>View backgorund</p></a>
			</div>
		</div>

		<div id="seabaseInfo" class="blurb">
			<div class="left">
				<p>Learn about Seabase and what you might find there</p>
				<a href="./seabase.php" class="link"><p>Learn about Seabase</p></a>
			</div>
			<div class="right">
				<img src="./assets/images/base.jpg" alt="Learn more about the islands" class="responsive">
			</div>
		</div>
	</div>
</div>



<?php
	include_once('./assets/inc/footer.php'); 
?> 