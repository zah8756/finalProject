<?php
	$path='./';
	$page='comments';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'comments';
	include_once('./assets/inc/nav.php');
?>


<h1>Comments section</h1>
	
	<div class="background">
		<div class="backgroundCon">

			<div class="comments">
				User name: <input type="text" id="user" /></br>
				<textarea name="comment" id="comment" placeholder="Write a comment" required></textarea></br>
				<button class="buttons" type="button" onclick="addUser()">submit </button></br>
				<hr/>
				<div id="list"></div>
			</div>
		</div>
	</div>
	<script src="./assets/scripts/comments.js"></script>
<?php
	include_once('./assets/inc/footer.php'); 
?> 