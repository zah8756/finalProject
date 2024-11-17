<?php
	$path='./';
	$page='booking';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'booking';
	include_once('./assets/inc/nav.php');
?>

<h1>Book your adventure today</h1>
<div class="background">
	<div class="backgroundCon"> 
		<form name="OrderForm" id="orderForm" action="bookingCon.php" onsubmit="return validateForm();" method="get">
			<p>Name:  <input type="text" id="customerName" name="customerName" <?php if(isset($_GET['name'])){echo 'value="'. $_GET['name']. '"';} ?> required/></p>
			<p>Email Adress:  <input type="email" id="customerEmail"  name="customerEmail"  style="<?php if(isset($_GET['name'])){echo 'background-color:blue';}?>"required/></p>

			<p>What type of adventure would you like to go on:</p>
			<select id="customerAdventure" name="customerAdventure" id="customerAdventure">>
				<option value="outIsland">The Out isalnd adventure</option>
				<option value="keys">The Keys adventure</option>
				<option value="fishing">The Florida fishing adventure</option>
			</select></br>

			<p>When do you plan on goin on this adventure:</p>
			<input type="date" name="customerDate"  id="customerDate" required><br/>

			<p>How many scouts are planning on attending this adventure (between 6 and 8 )</p>
			<input type="number" name="customerNumber" id="customerNumber" min="6" max="8"><br/>

			<p>
				<input type="submit" class="buttons" onclick="addUser()" name="Submit"  value="Send Form"/>
			</p>
		</form>
	</div>
</div>
<script src="./assets/scripts/validateForm.js"></script>

<?php
	include_once('./assets/inc/footer.php'); 
?> 