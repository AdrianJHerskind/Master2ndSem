<?php
session_start();
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
	<video width="78%" height="78%" id="robotVideo" autoplay muted playsinline loop oncontextmenu="return false;" ><source src="../GameVideos/WhiteRedBlack/StandBy.mp4" id="mp4video"  type="video/mp4"></video>
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