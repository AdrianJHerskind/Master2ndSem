<?php
session_start();
 
	$thisPage = "personalisation.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockPersonalisation"], "true") == 0)
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
  	          
    <script type="text/javascript">

        function myFunction(){
			document.getElementById("currentName").innerHTML = document.getElementById("robotNameField").value;
		}
    </script>

</head>

<body>
	
<div class="container.fluid" style="margin-left: 20px; margin-right: 20px; margin-top: 10px;">



<form method="post" action="" name="personalisation">
	<input type="hidden" name="whichForm" value="personalisation">
	<div class="row h-100 text-center" style="font-size: 1vw;">
		<div class="col-lg-3 my-auto">
			<div class="row text-center">
				<div class="col-lg-1"></div>

				<div class="col-lg-10 my-auto h2" style="border-width: thin; border-style: solid; border-color: #000000;">
				<b><u>Customise your Robot</u></b>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</div>

		<div class="col-lg-3" style="border-width: thin; border-style: solid; border-color: #000000;">
			<div class="row h-100" style="font-size: 1vw;">
				<label style="width: 100%;" class="h4">Eye Color</label>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_blue_button" value="Blue" onsubmit="return false;" formaction="" class="btn btn-eyesBlue btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_green_button" value="Green" formaction="" class="btn btn-eyesGreen btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_yellow_button" value="Yellow" formaction="" class="btn btn-eyesYellow btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_red_button" value="Red" formaction="" class="btn btn-eyesRed btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_white_button" value="White" formaction="" class="btn btn-eyesWhite btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="eye_black_button" value="Black" formaction="" class="btn btn-eyesBlackOff btn-sm">
				</div>
			</div>
		</div>
		<div class="col-lg-3 my-auto" style="border-width: thin; border-style: solid; border-color: #000000;">
</form>

<form method="post" action="" name="personalisation2" id="formName">

			<input type="hidden" id="currentVariables">
			<label id="currentName"></label>
			<label for="robotName" class="h4" id="displayCurrentName"></label><hr>

			<input type="text" autocomplete="off" id="robotNameField" name="robotName" placeholder="Name" maxlength="10" pattern="[a-zA-Z0-9]+" minlength="3" required><hr>
			<input type="submit" name="submitName" value="Update name">
		</div>
		<div class="col-lg-3">
		</div>
	</div>
</form>
<form method="post" action="handleFormData.php" name="personalisation3">

	<div class="row h-100 text-center" style="min-height: 488px;">
		<div class="col-lg-3" style="border-width: thin; border-style: solid; border-color: #000000;">
			<div class="row h-100 text-center" style="min-height: 100%;">
				<label style="width: 100%;" class="h4">Primary Color</label>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_blueNormal_button" value="Blue" formaction="" class="btn btn-normalBlue btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_blueDark_button" value="Dark Blue" formaction="" class="btn btn-darkBlue btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_greenNormal_button" value="Green" formaction="" class="btn btn-normalGreen btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_greenDark_button" value="Dark Green" formaction="" class="btn btn-darkGreen btn-sm">
				</div>	

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_yellowNormal_button" value="Yellow" formaction="" class="btn btn-normalYellow btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_yellowDark_button" value="Dark Yellow" formaction="" class="btn btn-darkYellow btn-sm">
				</div>
				
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_redNormal_button" value="Red" formaction="" class="btn btn-normalRed btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_redDark_button" value="Dark Red" formaction="" class="btn btn-darkRed btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_pink_button" value="Pink" formaction="" class="btn btn-pink btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_grey_button" value="Grey" formaction="" class="btn btn-grey btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_white_button" value="White" formaction="" class="btn btn-white btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="primary_black_button" value="Black" formaction="" class="btn btn-black btn-sm">
				</div>
			</div>
		</div>

		<div class="col-lg-6" style="border-bottom-width: thin; overflow: hidden; border-style: solid; border-color: #000000;">
			<video width="180%" height="110%" style="margin-left: -40%; margin-top: -5%; margin-bottom: -30%;" id="robotVideo" autoplay muted playsinline loop oncontextmenu="return false;" ><source src="../GameVideos/WhiteRedBlack/StandBy.mp4" id="mp4video"  type="video/mp4"></video>
				 <!--   <x3d width='80%' height='80%'> 
				    <scene>
					<inline url="../naoIndoors1/nao_indoors_1.x3d"> </inline> 
				    </scene> 
				    </x3d>  -->
		</div>

		<div class="col-lg-3" style="border-width: thin; border-style: solid; border-color: #000000;">
			<div class="row h-100 text-center" style="font-size: 1vw;">
				<label style="width: 100%;" class="h4">Secondary Color</label>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_blueNormal_button" value="Blue" formaction="" class="btn btn-normalBlue btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_blueDark_button" value="Dark Blue" formaction="" class="btn btn-darkBlue btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_greenNormal_button" value="Green" formaction="" class="btn btn-normalGreen btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_greenDark_button" value="Dark Green" formaction="" class="btn btn-darkGreen btn-sm">
				</div>	

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_yellowNormal_button" value="Yellow" formaction="" class="btn btn-normalYellow btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_yellowDark_button" value="Dark Yellow" formaction="" class="btn btn-darkYellow btn-sm">
				</div>
				
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_redNormal_button" value="Red" formaction="" class="btn btn-normalRed btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_redDark_button" value="Dark Red" formaction="" class="btn btn-darkRed btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_pink_button" value="Pink" formaction="" class="btn btn-pink btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_grey_button" value="Grey" formaction="" class="btn btn-grey btn-sm">
				</div>

				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_white_button" value="White" formaction="" class="btn btn-white btn-sm">
				</div>
				<div class="col-lg-6" style="padding: 5px;">
					<input type="submit" name="secondary_black_button" value="Black" formaction="" class="btn btn-black btn-sm">
				</div>

			</div>

		</div>
	</div>

	

	</div>


</form>


	<div class="row text-center" style="margin-top: 10px;">
		<div class="col-2">
			<button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'personaliseIntro.php'">Previous</button>
		</div>
				
		<div class="col-8">
					
		</div>

		<div class="col-2">
			<form method="post" action="handleFormData.php" name="personalisationSubmit">
				<input type="hidden" name="whichForm" value="personalisationDone">
			<input type="submit" name="submit" id="saveAndCon" value="Save & Continue" class="btn btn-outline-dark">

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




<?php 

	if(isset($_POST['submitName']))
	{
		$_SESSION["robotname"] = $_POST["robotName"];
	}

	if(isset($_POST['eye_blue_button']))
	{
		$_SESSION["eyeColor"] = "Blue";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['eye_green_button']))
	{
		$_SESSION["eyeColor"] = "Green";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['eye_yellow_button']))
	{
		$_SESSION["eyeColor"] = "Yellow";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['eye_white_button']))
	{
		$_SESSION["eyeColor"] = "White";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['eye_red_button']))
	{
		$_SESSION["eyeColor"] = "Red";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['eye_black_button']))
	{
		$_SESSION["eyeColor"] = "Black";
		$_SESSION["colorPersonalised"] = "true";
	}


	else if(isset($_POST['primary_blueNormal_button']))
	{
		$_SESSION["primaryColor"] = "Blue";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_blueDark_button']))
	{
		$_SESSION["primaryColor"] = "DarkBlue";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['primary_greenNormal_button']))
	{
		$_SESSION["primaryColor"] = "Green";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_greenDark_button']))
	{
		$_SESSION["primaryColor"] = "DarkGreen";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['primary_yellowNormal_button']))
	{
		$_SESSION["primaryColor"] = "Yellow";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_yellowDark_button']))
	{
		$_SESSION["primaryColor"] = "DarkYellow";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['primary_white_button']))
	{
		$_SESSION["primaryColor"] = "White";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_black_button']))
	{
		$_SESSION["primaryColor"] = "Black";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['primary_redNormal_button']))
	{
		$_SESSION["primaryColor"] = "Red";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_redDark_button']))
	{
		$_SESSION["primaryColor"] = "DarkRed";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['primary_pink_button']))
	{
		$_SESSION["primaryColor"] = "Pink";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['primary_grey_button']))
	{
		$_SESSION["primaryColor"] = "Grey";
		$_SESSION["colorPersonalised"] = "true";
	}


	else if(isset($_POST['secondary_blueNormal_button']))
	{
		$_SESSION["secondaryColor"] = "Blue";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_blueDark_button']))
	{
		$_SESSION["secondaryColor"] = "DarkBlue";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['secondary_greenNormal_button']))
	{
		$_SESSION["secondaryColor"] = "Green";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_greenDark_button']))
	{
		$_SESSION["secondaryColor"] = "DarkGreen";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['secondary_yellowNormal_button']))
	{
		$_SESSION["secondaryColor"] = "Yellow";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_yellowDark_button']))
	{
		$_SESSION["secondaryColor"] = "DarkYellow";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['secondary_white_button']))
	{
		$_SESSION["secondaryColor"] = "White";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_black_button']))
	{
		$_SESSION["secondaryColor"] = "Black";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['secondary_pink_button']))
	{
		$_SESSION["secondaryColor"] = "Pink";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_grey_button']))
	{
		$_SESSION["secondaryColor"] = "Grey";
		$_SESSION["colorPersonalised"] = "true";
	}

	else if(isset($_POST['secondary_redNormal_button']))
	{
		$_SESSION["secondaryColor"] = "Red";
		$_SESSION["colorPersonalised"] = "true";
	}
	else if(isset($_POST['secondary_redDark_button']))
	{
		$_SESSION["secondaryColor"] = "DarkRed";
		$_SESSION["colorPersonalised"] = "true";
	}
		
?>

</html>

<script type="text/javascript"> 

document.getElementById('saveAndCon').disabled = <?php if(strcmp($_SESSION['robotname'], '')==0 || strcmp($_SESSION['robotname'], 'Nao')==0 || strcmp($_SESSION['colorPersonalised'], 'false') == 0){?>true <?php }else{?>false <?php }?>; 

document.getElementById('displayCurrentName').innerHTML = "Change <?php echo $_SESSION['robotname']?>'s name:"; 
</script>

<script type="text/javascript">	
	var robotRollVideo = "../GameVideos/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/StandBy.mp4";       
	//var robotRollVideo = "../img/video/StandbyWave.mp4";
    var videocontainer = document.getElementById('robotVideo');
    var videosource = document.getElementById('mp4video');
    videosource.setAttribute('src',robotRollVideo);
    videocontainer.load();    
    videocontainer.play();
</script>