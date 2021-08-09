<?php
session_start();
	$thisPage = "unpersonalIntro.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockUnpersonalisedIntro"], "true") == 0)
	{
		header("Location:" . $_SESSION["currPage"]);
	}
	else
	{
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
  	  <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
            <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/download/x3dom.css'></link> 

</head>

<body>
<style type="text/css">p{font-size: 1.25vw;}</style>	




<div class="container" style="margin-top: 10px;">
	<div class="row">
		<div class="col-2 text-center">
		</div>
				
		<div class="col-8 text-center">
			<p><h2>This is a Nao robot.</h2></p>
		</div>

		<div class="col-2 text-center">
		</div>
	</div>

	<div class="row text-center">

		<div class="col-12">
			<video width="80%" height="80%" id="robotVideo" autoplay playsinline muted oncontextmenu="return false;" ><source src="../img/RobotIntroVideo.mp4" id="mp4video"  type="video/mp4"></video>
		</div>

	</div>

	<div class="row">
		<div class="col-2 text-center">
		</div>
				
		<div class="col-8 text-center" id="naoText" hidden>
			<p>Nao is a programmable humaniod robot developed by Softbank Robotics in 2006.</p><p> It is used for educational and research purposes as well as an assistant by companies and healthcare centers. It has multiple sensors such as touch sensors, microphones and cameras.</p><p> The robot is available in Cyberbotics simulation environment called WeBots, in which the experiment takes place.</p>
		</div>

		<div class="col-2 text-center">
		</div>
	</div>

	<div class="row text-center" style="margin-bottom: 20px;">
		<div class="col-2">

		</div>
				
		<div class="col-8">
				


		</div>

		<div class="col-2">
			<form method="post" action="handleFormData.php" name="nameRobot">
				<input type="hidden" name="whichForm" value="unpersonalisedRobot">
				<input type="submit" hidden class="btn btn-outline-dark" id="sub" name="submit" value="Continue">
			</form>
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
	document.getElementById('robotVideo').addEventListener('ended',myHandler,false);
    function myHandler(e) {
			document.getElementById("sub").removeAttribute("hidden");
			document.getElementById("naoText").removeAttribute("hidden");
	}
</script>