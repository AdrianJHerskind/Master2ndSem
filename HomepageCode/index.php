<?php
session_start();

	if(!array_key_exists("ip",$_SESSION))
	{
		include("php/startSession.php");
	}
	
	$thisPage = "../index.php";
	if(strcmp($_SESSION["blockHome"], "true") == 0)
	{
		header("Location: php/" . $_SESSION["currPage"]);
	} 
	else
	{
		$_SESSION["currPage"] = $thisPage;
		$_SESSION["blockIntroduction"] = "false"; 

		$currentTimeinSeconds = time();

		if($currentTimeinSeconds % 2 == 0)
		{
			$_SESSION["personalisedGroup"] = 'personalised';
		}	
		else
		{
			$_SESSION["personalisedGroup"] = 'unpersonalised';
		}

		if($currentTimeinSeconds % 4 == 0)
		{
			$_SESSION["suspiciousGroup"] = 'suspicious';
		}	
		else if($currentTimeinSeconds % 4 == 1)
		{
			$_SESSION["suspiciousGroup"] = 'suspicious';
		}
		else
		{
			$_SESSION["suspiciousGroup"] = 'unsuspicious';
		}
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
 	<link rel="stylesheet" type="text/css" href="styles.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>

<body>


	<div class="container.fluid">
		<div class="row">
			<div class="col-12 my-auto">
				<header>
					Welcome to this online robot experiment. 
				</header>
			</div>
		</div>

		<div class="row">
			<div class="col-12 my-auto text-center">
				<section class ="FirstText">
					Press continue when you are ready.
				</section>
				<p>For the best viewing experience please use a computer/laptop</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 my-auto text-center">
				<button type="button" class="btn btn-outline-dark btn-lg" onclick="window.location.href = 'php/introduction.php'">Continue</button>
			</div>
		</div>
	</div>

<div class="container.fluid">
	<div class="row text-center" style="margin-top: 20px;">
		<div class="col-12">
			<?php if(strcmp($_SESSION["admin"], "admin") == 0){?><iframe src="php/echoSession.php" style="width: 100%; height: 300px;"> </iframe> <head> 	<link rel="stylesheet" type="text/css" href="../stylesAdmin.css"></head> <?php } ?>
		</div>
	</div>
</div>


</body>

</html>