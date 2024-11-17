<?php
	$path='./';
	$page='image';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'image';
	include_once('./assets/inc/nav.php');
?>

<div class="background">
<div id="imageCon">
<h1>Image Gallery</h1>

  
        <figure id="largeImg">
            <img src="./assets/images/munson.png" name="bigpic" alt="main picture" id="bigPic" />
            <figcaption id="cap"></figcaption>
            <a class="prev" onclick="moveImg(-1)">&#10094;</a>
            <a class="next" onclick="moveImg(1)">&#10095;</a>
        </figure>

 
 
    <!--section holding all of the thumbnail pictures-->
    <section class="table">
        <div id="imgHolder">
            <img onclick="changeImg(this,0)" src="./assets/images/munson.png" alt="Explore the island of Big Munson" class="imgA"/> 
            <img onclick="changeImg(this,1)"  src="./assets/images/war2.png" alt="To start your adventure is a two-mile trip in our war canoes" class="imgA"/> 
            <img onclick="changeImg(this,2)" src="./assets/images/Fishing.png" alt="Once your on the island one of the many day trips is deep sea fishing " class="imgA" /> 
            <img onclick="changeImg(this,3)" src="./assets/images/KeyDeer.png" alt="The island is filled with interesting wildlife like the Key Deer" class="imgA" /> 
            <img onclick="changeImg(this,4)" src="./assets/images/scuba.png" alt="Snorkle with your entire troop" class="imgA" /> 
            <img onclick="changeImg(this,5)" src="./assets/images/night.png" alt="finish your days with a sight that can't be matched" class="imgA" />
        </div>
    </section>
</div>
</div>
<script src="./assets/scripts/imgChange.js"></script>
<?php
	include_once('./assets/inc/footer.php'); 
?> 