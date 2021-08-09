<?php
session_start();
$thisPage = "introduction.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockIntroduction"], "true") == 0)
	{
		header("Location:" . $_SESSION["currPage"]);
	}
	else
	{
		$_SESSION["currPage"] = $thisPage;

		$_SESSION["blockHome"] = "true";
		$_SESSION["blockInitialSurvey"] = "false";
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
			
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row">
		<div class="col-2">
			<form method="post" action="handleFormData.php">
				<input type="hidden" name="whichForm" value="admin">
			

			 	<input type="text" name="user" pattern="[a-zA-Z]+" required hidden><br><br>
			 	<input type="submit" id="sub" name="submit" value="Submit" class="btn btn-outline-dark btn-sm" hidden>
		 	</form>
		 	<p hidden><?php echo $_SESSION["admin"];?></p>
		</div>
		<style type="text/css">p{font-size: 1.25vw;}</style>	
		<div class="col-8 text-center">
			<p>We are students from the 8th semester of the Master of Robotics at Aalborg University, conducting an experiment for our semester project.
			<p>We hope you can spare some time by participating in this experiment. We expect that the entire experiment takes about 15 minutes.</p>
			<p>First you fill out two surveys, followed by a short interaction with a robot, and in the end there is a final survey.</p><p>To ensure the validity of our data, please take your time to read the instructions and questions carefully and answer them as honestly as you can.</p>
			<p>The collected data will be stored only in anonymized form.</p>
		</div>

		<div class="col-2 text-center">
		</div>
	</div>

	<div class="row text-center">
		<div class="col-2">
		</div>
				
		<div class="col-8">
					
		</div>

		<div class="col-2" id="2">
			<button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'initialSurvey.php'">Next</button>
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