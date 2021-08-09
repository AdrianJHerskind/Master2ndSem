<?php
session_start();
	$thisPage = "gameIntro.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockGameIntro"], "true") == 0)
	{
		header("Location:" . $_SESSION["currPage"]);
	}
	else
	{
		$_SESSION["blockGame"] = "false";

		$_SESSION["currPage"] = $thisPage;
	} 
?>

<!DOCTYPE html>
<html lang ="en-US">

<html>
	
<head>
	<meta charset="UTF-8">
	<title>Robot Experiment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="../styles.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>


<div class="container.fluid" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row">
		<div class="col-lg-2">
		</div>
				
		<div class="col-lg-8 text-left">
			<h3><b> Mia </b></h3>
			<p>In your interaction with the robot you will play a game against the robot.</p>
			<p>The game is called Mia and many of you might be familiar with it already, but please take a moment to read the rules since there might be small changes to the ones you use to play with.</p>
			<h2>Setup</h2>
			<p>Each player plays with two dices</p>
			<p>During each round the user is unable to see the opponents dices during his roll</p>
			<h2>Game Rules</h2>
			<p>The Game is played in a series of rounds. During each round players can:
			<ul>
				<li>Announce truthfully what has been rolled,</li>
            	<li>Announce (by lying) a greater value than that rolled. </li>
             	<li>Announce (by lying) a lesser value than that rolled.</li>
            	<li> Check the opponents roll
            </ul>
            <p>The user <b>can not</b> announce a value lower than the opponent. All the possible numbers are ordered from high to low, as shown below.</p>
			<p><b>Highest</b><br>21 (Mia)<br>31 (Little Mia)<br>66, 55, 44, 33, 22, 11<br>65, 64, 63, 62, 61<br>54, 53, 52, 51<br>43, 42, 41<br>32<br><b>Lowest</b></p>
			<h3>Start of the round</h3>
			<p>At the beginning of the round the first user rolls the dices and announce the number. The second user can :
			<ul>
				<li>Believe the caller and roll the dice in an attempt to roll something better.</li>
            	<li> Distrust the first player and look at the dice. If the dices of the caller show  greater or equal value to what was declared, first user get the point. If the dice show a lesser value than that announced, the receiver wins the round </li>
            </ul>

            <p><b>Example:</b><br></p>
			<p><b>Player A rolls 41</b> - <b>Player A says: 41 <i>(truth)</i></b><br>
			<b>Player B trusts Player A</b><br>
			<b>Player B rolls 52</b> - <b>Player B says 63 <i>(lie)</i></b><br>
			<b>Player A trusts Player B</b><br>
			<b>Player A rolls 51</b> - <b>Player A says 22 <i>(lie)</i></b><br>
			<b>Player B checks the dice</b> - <b>Player B wins the round</b></p>

            <p>Extra Rules:</p>			
		    <p>If 21 (Mia) is announced, the next player has two choices:</b>
			<ul>
				<li>They may give up (trust) without looking at the dice - the oponent gets a point.</li>
				<li>They may look at the dice. If it was a Mia, the opponent gets two points. If it wasn't, the  player gets two points.</li>
			</ul>
				

            <h2>End of the round</h2>
            <p> Round ends if one of the players decides to check his opponent, or if one of them announces 21(Mia)</p>

            <h2>End of the game</h2>
            <p>The number of rounds is unknown but every round has a chance of 25% to be the last one.

            <h2>Winning the game </h2>
            <p>The winner of the game becomes the player with the higher number of points 
		</div>

		<div class="col-lg-2 text-center">
		</div>
	</div>

	<div class="row text-center">
		<div class="col-2">

		</div>
				
		<div class="col-8">
					
		</div>

		<div class="col-2" id="2">
			<button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'gameLayout.php'">Start Game</button>
		</div>
	</div>
</div>


<div class="container.fluid">
	<div class="row text-center" style="margin-top: 20px;">
		<div class="col-12">
			<?php if(strcmp($_SESSION["admin"], "admin") == 0){?><iframe src="echoSession.php" style="width: 100%; height: 300px;"> </iframe> <head> 	<link rel="stylesheet" type="text/css" href="../stylesAdmin.css"></head> <?php } ?>
		</div>
	</div>
</div>

</body>

</html>