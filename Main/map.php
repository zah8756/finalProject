<?php
	$path='./';
	$page='map';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'map';
	include_once('./assets/inc/nav.php');
?>
<h1>Seabase area map</h1>

<div class="background">
    <div class="backgroundCon">
		<div id="mapCon">
			<div id="map"></div>
	</div>
	</div>
</div>


<script src="./assets/scripts/mapSet.js"></script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3M9e_Lo1sTvFf4GwNKU7hQZ-7KSsmyx8&callback=initMap&v=weekly">
</script>

<?php
	include_once('./assets/inc/footer.php'); 
?> 