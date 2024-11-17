<?php
	$path='./';
	$page='adventures';
	include_once('./assets/inc/header.php'); 
?>

<?php
	$_GET['currentPage'] = 'data';
	include_once('./assets/inc/nav.php');
?>


<h1>Learn more about what you can experience at Seabase</h1>
<div class="background">
    <div class="backgroundCon">
        <h3>
            While at seabase you can choose what type of adventrue you want to explore. Florida Seabase has three main adventures for scouts to experice while their at seabase each with their own unique feel.
        </h3>    
        <div id="outIsland" class="backgroundC">
            <h2>The Out isalnd adventure</h2>

            <div id="backgroundImg">
                <img src="./assets/images/adventure_1.jpg" class="adventureImg" alt="Learn more Seabase">
            </div>
                <p>
                    The Out isalnd adventure has a group of eight scouts tasked with camping on the island of Big Munson for a week. While on the island scouts are banned from interacing with technology with the sole execption being a hand held camera. To get to the isalnd the scouts are required to to canoe three miles out to sea to reach the island of Big Munson. While camping on the isalnd scouts will be able to partipate in a plethora of activtes including snorkleing, cannoeing, and fishing. This adventure is recomend to those who seek thrills. 
                </p>
        </div>

    
        <div id="keyAdv" class="backgroundC">
            <h2>The Keys adventure</h2>

            <div id="backgroundImg" >
                <img src="./assets/images/adventure_2.jpg" class="adventureImg" alt="Learn more Seabase">
            </div>

                <p>
                    where the The Out isalnd adventure focouses on the island of big munson itself the Keys adventure focouses more on the locaion of the florida keys and the bouties that can be found there. This adventure has you spending your days going on activites similar to the Out isalnd adventure but has you stay the nights time in an airconditioned room at seabase iteslf. During this adventure you will also be able to go to the isalnd of Big Munson but you will only be stayting their for the day. This adventure is recomened for those who are looking for a much more laid-back experience.
                </p>
        </div>

        <div id="fishing" class="backgroundC">
            <h2>The Florida fishing adventure</h2>
            <div id="backgroundImg">
                <img src="./assets/images/adventure_3.jpg" class="adventureImg" alt="Learn more Seabase">
            </div>
                <p>
                    The Florida fishing adventure is unlike our other two adventures because it has you focous on a singular activity that being fishing. During the adventure you and up to seven other scouts will learn how to fish like a pro. Each day your group will choose a target to fish for and what techniques are need to catch whatever target you set your eyes on. This adventure unlike the others is weather permited so if it becomes too stormy the fishing might have to be cancled for the day. on the last day of the adventure you will atempt to fish up a prime predator the sharks that are present the keys area. This adventure is recomened for those who are looking for a new understaing of their favorite pastime.  
                </p>
        </div>
    </div>
</div>


<?php
	include_once('./assets/inc/footer.php'); 
?> 