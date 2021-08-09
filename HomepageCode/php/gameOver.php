<?php
session_start();
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	$thisPage = "gameOver.php";
	if(strcmp($_SESSION["blockGameOver"], "true") == 0)
	{
		header("Location: " . $_SESSION["currPage"]);
	} 
	else
	{
		$_SESSION["currPage"] = $thisPage;
	}
?>


<!DOCTYPE html>
<html lang ="en-US">
	
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


	<div class="container">
		<div class="row">
			<div class="col-lg-12 my-auto">
				<header>
					Sorry! You reloaded your page, so you automatically lost the game.
				</header>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12 my-auto">
				<section class ="FirstText">
					Now you can close your browser window
				</section>
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

<?php 
	if(isset($_POST['commentSubmit']))
	{
		$file_open = fopen("../dataComment.csv", "a");
	$no_rows = count(file("../dataComment.csv"));
	if($no_rows > 1)
	{
		$no_rows = ($no_rows - 1) + 1;
	}
	else
	{
	
		$headers = array('Comment');
		fputcsv($file_open, $headers);
	}

	$form_data = array(
		'comment' => $_POST["comment"]
	);
	fputcsv($file_open, $form_data);

	}
?>

</body>

</html>