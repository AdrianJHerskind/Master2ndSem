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

Echo session variables

<div class="container.fluid">
	<div class="row text-center" style="margin-top: 20px;">
		<div class="col-12">
			<form method="post">

			 	<label for="varName">Var name</label>
			 	<input type="text" name="varName" pattern="[a-zA-Z0-9]+" required>

			 	<label for="varValue">Var value</label>
			 	<input type="text" name="varValue" pattern="[a-zA-Z0-9]+" required><br>

			 	<input type="submit" id="sub" name="submit" value="Save" class="btn btn-outline-dark" style="font-size: 1.5vw">
				<button onClick="window.location.reload();" class="btn btn-outline-dark">Refresh List</button>
			</form>

		</div>
	</div>
	<div class="row text-center" style="margin-top: 20px;">
		<div class="col-12">
			<?php if(strcmp($_SESSION["admin"], "admin") == 0){echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';}?>
		</div>
	</div>
</div>

<?php
	if(isset( $_POST['submit'] ))
	{
		if(array_key_exists($_POST["varName"], $_SESSION))
		{
			$_SESSION[$_POST["varName"]] = $_POST["varValue"];
		}
		else
		{
			echo "<script type='text/javascript'>alert('Variable does not exist');</script>";		
		}
	}
?>

</body>
</html> 