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
	<video width=78% height=78% autoplay="autoplay" id="robotVideo" oncontextmenu="return false;" muted playsinline loop style="position: -webkit-sticky; position: sticky; padding-top: 20px; align-content: left;"><source src="../GameVideos/WhiteRedBlack/StandBy.mp4" id="mp4video" type="video/mp4"></video>
</body>
</html> 

<script type="text/javascript">
	var robotRollVideo = "../img/video/<?php if(strcmp($_SESSION['personalisedGroup'], 'personalised')==0){echo $_SESSION['eyeColor'];echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];}else{echo'';}?>/SitStandby.mp4";       
    var videocontainer = document.getElementById('robotVideo');
    var videosource = document.getElementById('mp4video');
    videosource.setAttribute('src',robotRollVideo);
    videocontainer.load();    
    videocontainer.play();
</script>