<?php
session_start();
	$thisPage = "robotIntro.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockRobotIntro"], "true") == 0)
	{
		header("Location:" . $_SESSION["currPage"]);
	}
	else
	{
		$_SESSION["blockSchaefer1"] = "false";

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

<style type="text/css">p{font-size: 1.25vw;}</style>	



<div class="container.fluid" style="margin-top: 10px;">
	<div class="row">
		<div class="col-lg-2 text-center">
		</div>
				
		<div class="col-lg-8 text-center">
			<p>This is the robot that you will interact with.</p>
			<p>Please take a good look at it.</p><p> On the next page we will ask you questions regarding your upcoming interaction with the robot.</p>
		</div>

		<div class="col-lg-2 text-center">
		</div>
	</div>

	<div class="row text-center">
		<div class="col-3 text-center">
		</div>

		<div class="col-lg-6" style=" overflow: hidden; border-style: solid; border-color: #000000;">
			<video width="180%" height="110%" style="margin-left: -40%; margin-top: -5%; margin-bottom: -30%;" id="robotVideo" autoplay muted playsinline loop oncontextmenu="return false;" ><source src="../GameVideos/WhiteRedBlack/StandBy.mp4" id="mp4video"  type="video/mp4"></video>
		</div>

		<div class="col-3 text-center">
		</div>
	</div>

	<div class="row text-center" style="margin-bottom: 20px;">
		<div class="col-2">

		</div>
				
		<div class="col-8">
				


		</div>

		<div class="col-2">
			<button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'schaefer1.php'">Next</button>
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

<script type="text/javascript">	
	var robotRollVideo = "../GameVideos/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/StandBy.mp4";       
	//var robotRollVideo = "../img/video/StandbyWave.mp4";
    var videocontainer = document.getElementById('robotVideo');
    var videosource = document.getElementById('mp4video');
    videosource.setAttribute('src',robotRollVideo);
    videocontainer.load();    
    videocontainer.play();
</script>