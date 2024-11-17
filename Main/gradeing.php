<?php
	$path='./';
	$page='grades';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'data';
	include_once('./assets/inc/nav.php');
?>

<h1>Gradeing page</h1>

<div class="background">
    <div class="backgroundCon">
		<div class="backgroundC">
        <p>
            Original JavaScript component: For my Original javascrip element I created a simple image gallery that has smaller and laerger images that one can change either by cliking on the smaller image or by using arrow buttons to go to the next or previous picture.
        </p>
        <p>
            DHTML component: For my dhtml component I did two things first and formost I made it so that many of my important buttons press down when they are active to show that they are changeing. the second thing i did was that my comment section text area moves in response to the movemnt of the comment seciton itslef. I dont think these too elements were super impactfull but they gave the website a bit of flair. 
        </p>
        <p>
        Extras: 
        1. My first extra was the implementation of a map using google map api. on the map i am currenlty using two way pints to show off both seabasse and the isalnd associated with it.</br>
        2. The second extra I created was a form that first aquires data from user inputs then send the data up to the server storing the data. After it has sucessfully store the data the data is then spit out so that the user knows that they have prople booked a trip using the site</br> 
        3. my last extra is that the site is nearly entierly responsive expect the nav bar which I ran out of time to make responsive 
        </p>
	</div>
	</div>
</div>



<?php
	include_once('./assets/inc/footer.php'); 
?> 