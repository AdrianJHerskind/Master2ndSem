<?php
session_start();
	$thisPage = "intermediateTrust.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockIntermediateTrust"], "true") == 0)
	{
		header("Location:" . $_SESSION["currPage"]);
	}
	else
	{
		$_SESSION["blockRobotIntro"] = "true";

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


<div class="container.fluid" style="margin-top: 30px;">
	<div class="row text-center" style="margin-bottom: 20px;">
		<div class="col-lg-12" style="font-size: 1.5vw;">
			Before we start the interaction please use the sliders to rate the robot
		</div>
	</div>

	<div class="row h-100 text-center" style="font-size: 1.25vw;">
		<div class="col-lg-6">
			<form method="post" action="handleFormData.php" name="intermediateTrust1">
				<input type="hidden" name="whichForm" value="intermediateTrust1">
				<label><b>What % of time do you think the robot will...</b></label><br>
				<label>a) Act consistently</label>
				<div class="slidecontainer">
					<div class="inline">Never</div>
  					<input type="range" min="1" max="100" value="50" name="sliderActCon1" class="slider inline" id="sliderActCon1">
  					<div class="inline">Always</div>
				</div>

				<label>b) Tell the truth</label>
				<div class="slidecontainer">
					<div class="inline">Never</div>
  					<input type="range" min="1" max="100" value="50" name="sliderTellTruth1" class="slider inline" id="slidertellTruth1">
  					<div class="inline">Always</div>
				</div>

				<label>c) Behave Predictably</label>
				<div class="slidecontainer">
					<div class="inline">Never</div>
  					<input type="range" min="1" max="100" value="50" name="sliderBehPre1" class="slider inline" id="sliderBehPre1">
  					<div class="inline">Always</div>
				</div>
		</div>
		<div class="col-lg-6 my-auto">
			<video width="80%" height="80%" id="robotVideo" autoplay muted playsinline loop oncontextmenu="return false;" ><source src="../GameVideos/WhiteRedBlack/StandBy.mp4" id="mp4video"  type="video/mp4"></video>
		</div>

	</div>

	<div class="row text-center" style="margin-top: 30px;">
		<div class="col-2">
		</div>
				
		<div class="col-8">
					
		</div>

		<div class="col-2">
			<input type="submit" class="btn btn-outline-dark" id="sub" name="submit" value="Save">
		</div>
			</form>
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


<script type="text/javascript">	
	var robotRollVideo = "../GameVideos/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/StandBy.mp4";       
	//var robotRollVideo = "../img/video/StandbyWave.mp4";
    var videocontainer = document.getElementById('robotVideo');
    var videosource = document.getElementById('mp4video');
    videosource.setAttribute('src',robotRollVideo);
    videocontainer.load();    
    videocontainer.play();
</script>