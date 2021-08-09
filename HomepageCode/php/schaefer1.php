<?php
session_start();
	$thisPage = "schaefer1.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockSchaefer1"], "true") == 0)
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


<style type="text/css">p{font-size: 1.25vw;}</style>	


<div class="container.fluid" style="margin-top: 20px;">
	<div class="row">
		<div class="col-lg-2 text-center">
		</div>
				
		<div class="col-lg-8 text-center">
			<p>Imagine you are about to use this robot. Based on your previous experience and looks of the robot, </br>please try to answer the following 40 questions. </p>
		</div>

		<div class="col-lg-2 text-center">
		</div>
	</div>

	<div class="row h-100 text-center" style="font-size: 1vw;">
		<div class="col-7 text-center">



<form method="post" action="handleFormData.php" name="schaefer">
	<input type="hidden" name="whichForm" value="schaefer1">

	<table class="TFtableCol" style="margin: 20px;" border = "1"; >
		<thead>
		<tr style="vertical-align: bottom;">
		    <th width="40%">
		    	&ensp;What % of the time will this robot...&ensp;
		    </th>
		     <th width="6%">
		    	0%
		    </th>
		    <th width="6%">
		    	10%
		    </th>
		    <th width="6%">
		    	20%
		    </th>
		    <th width="6%">
		    	30% 
		    </th>	    
		   	<th width="6%">
		    	40%
		    </th>	   
		   	<th width="6%">
		    	50%
		    </th>	    
			<th width="6%">
		    	60% 
		    </th>	    
		    <th width="6%">
		    	70%
		    </th>	    
		    <th width="6%">
		    	80% 
		    </th>	    
		    <th width="6%">
		    	90% 
		    </th>	    
		    <th width="6%">
		    	100%
		    </th>
		</tr>
		</thead>

		<tbody>

		<!--Row 1 - Act Consistently - * -->
		<tr align="center">
			<td class="firstElement" align="left">
				<label for="actCon">Act consistently</label>
			</td>
			<td>
		    	<input type="radio" name="actCon" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="actCon" value="10" />
		    </td>
		    <td>
		    	<input type="radio" name="actCon" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" id="30" name="actCon" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="40" name="actCon" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" id="50" name="actCon" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="60" name="actCon" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="70" name="actCon" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="80" name="actCon" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="90" name="actCon" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="100" name="actCon" value="100"/>
		    </td>
		</tr>

		<!-- Row 2 - Protect People -->
	  	<tr align="center">
			<td align="left" class="firstElement">
				<label for="proPeo">Protect people</label>
			</td>
			 <td>
		    	<input type="radio" name="proPeo" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="proPeo" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="proPeo" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="proPeo" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="proPeo" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="proPeo" value="100"/>
		    </td>
		</tr>

		<!-- Row 3 - Act as part of the team -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="actTeam">Act as part of the team</label>
			</td>
			 <td>
		    	<input type="radio" name="actTeam" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="actTeam" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="actTeam" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="actTeam" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="actTeam" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="actTeam" value="100"/>
		    </td>
		</tr>

		<!-- Row 4 - Function successfully - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="funcSucc">Function successfully</label>
			</td>
			 <td>
		    	<input type="radio" name="funcSucc" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="funcSucc" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="funcSucc" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="funcSucc" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="funcSucc" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="funcSucc" value="100"/>
		    </td>
		</tr>

		<!-- Row 5 - Malfunction - R* -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="malfunc">Malfunction</label>
			</td>
			 <td>
		    	<input type="radio" name="malfunc" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="malfunc" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="malfunc" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="malfunc" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="malfunc" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="malfunc" value="100"/>
		    </td>
		</tr>

		<!-- Row 6 - Clearly communicate -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="cleCom">Clearly communicate</label>
			</td>
			 <td>
		    	<input type="radio" name="cleCom" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="cleCom" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="cleCom" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="cleCom" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="cleCom" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="cleCom" value="100"/>
		    </td>
		</tr>

		<!-- Row 7 - Require frequent maintenance - R -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="reqMain">Require frequent maintenance</label>
			</td>
			  <td>
		    	<input type="radio" name="reqMain" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="reqMain" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="reqMain" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="reqMain" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="reqMain" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reqMain" value="100"/>
		    </td>
		</tr>

		<!-- Row 8 - Openly communicate -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="openCom">Openly communicate</label>
			</td>
			<td>
		    	<input type="radio" name="openCom" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="openCom" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="openCom" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="openCom" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="openCom" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="openCom" value="100"/>
		    </td>
		</tr>
		</tbody>
	</table>
	<table class="TFtableCol" style="margin: 20px;" border = "1"; >
		<thead>
		<tr style="vertical-align: bottom;">
		    <th width="40%">
		    	&ensp;What % of the time will this robot...&ensp;
		    </th>
		    <th width="6%">
		    	0%
		    </th>

		    <th width="6%">
		    	10%
		    </th>
		    <th width="6%">
		    	20%
		    </th>
		    <th width="6%">
		    	30% 
		    </th>	    
		   	<th width="6%">
		    	40%
		    </th>	   
		   	<th width="6%">
		    	50%
		    </th>	    
			<th width="6%">
		    	60% 
		    </th>	    
		    <th width="6%">
		    	70%
		    </th>	    
		    <th width="6%">
		    	80% 
		    </th>	    
		    <th width="6%">
		    	90% 
		    </th>	    
		    <th width="6%">
		    	100%
		    </th>
		</tr>
		</thead>

		<tbody>
		<!-- Row 9 - Have errors - R* -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="haveErr">Have errors</label>
			</td>
			<td>
		    	<input type="radio" name="haveErr" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="haveErr" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="haveErr" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="haveErr" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="haveErr" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="haveErr" value="100"/>
		    </td>
		</tr>

		<!-- Row 10 - Perform a task better than a novice human user -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="perfBetNov">Perform a task better than a novice human user</label>
			</td>
			 <td>
		    	<input type="radio" name="perfBetNov" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="perfBetNov" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="perfBetNov" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="perfBetNov" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="perfBetNov" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfBetNov" value="100"/>
		    </td>
		</tr>

		<!-- Row 11 - Know the difference between friend and foe -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="knowDifFriFoe">Know the difference between friend and foe</label>
			</td>
			<td>
		    	<input type="radio" name="knowDifFriFoe" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="knowDifFriFoe" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="knowDifFriFoe" value="100"/>
		    </td>
		</tr>

		<!-- Row 12 - Provide feedback - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="provFeed">Provide feedback</label>
			</td>
			  <td>
		    	<input type="radio" name="provFeed" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="provFeed" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="provFeed" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="provFeed" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="provFeed" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provFeed" value="100"/>
		    </td>
		</tr>

		<!-- Row 13 - Possess adequate decision-making capability -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="possAdeDecCap">Possess adequate decision-making capability</label>
			</td>
			 <td>
		    	<input type="radio" name="possAdeDecCap" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="possAdeDecCap" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="possAdeDecCap" value="100"/>
		    </td>
		</tr>


		<!-- Row 14 - Warn people of potential risks in the environment -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="warnPeoRisk">Warn people of potential risks in the environment</label>
			</td>
			<td>
		    	<input type="radio" name="warnPeoRisk" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="warnPeoRisk" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="warnPeoRisk" value="100"/>
		    </td>
		</tr>

		<!-- Row 15 - Meet the needs of the mission - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="meetNeedsMiss">Meet the needs of the mission</label>
			</td>
			  <td>
		    	<input type="radio" name="meetNeedsMiss" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="meetNeedsMiss" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="meetNeedsMiss" value="100"/>
		    </td>
		</tr>

		<!-- Row 16 - Provide appropriate information - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="provAppInf">Provide appropriate information</label>
			</td>
			<td>
		    	<input type="radio" name="provAppInf" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="provAppInf" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="provAppInf" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="provAppInf" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="provAppInf" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="provAppInf" value="100"/>
		    </td>
		</tr>
		</tbody>
	</table>

	<table class="TFtableCol" style="margin: 20px;" border = "1"; >
		<thead>
		<tr style="vertical-align: bottom;">
		    <th width="40%">
		    	&ensp;What % of the time will this robot...&ensp;
		    </th>
		     <th width="6%">
		    	0%
		    </th>
		    <th width="6%">
		    	10%
		    </th>
		    <th width="6%">
		    	20%
		    </th>
		    <th width="6%">
		    	30% 
		    </th>	    
		   	<th width="6%">
		    	40%
		    </th>	   
		   	<th width="6%">
		    	50%
		    </th>	    
			<th width="6%">
		    	60% 
		    </th>	    
		    <th width="6%">
		    	70%
		    </th>	    
		    <th width="6%">
		    	80% 
		    </th>	    
		    <th width="6%">
		    	90% 
		    </th>	    
		    <th width="6%">
		    	100%
		    </th>
		</tr>
		</thead>

		<tbody>
		<!-- Row 17 - Communicate with people - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="commPeo">Communicate with people</label>
			</td>
			<td>
		    	<input type="radio" name="commPeo" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="commPeo" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="commPeo" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="commPeo" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="commPeo" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="commPeo" value="100"/>
		    </td>
		</tr>

		<!-- Row 18 - Work best with a team -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="workBestTeam">Work best with a team</label>
			</td>
			<td>
		    	<input type="radio" name="workBestTeam" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="workBestTeam" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="workBestTeam" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="workBestTeam" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="workBestTeam" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workBestTeam" value="100"/>
		    </td>
		</tr>

		<!-- Row 19 - Keep classified information secure -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="keepClasInfSec">Keep classified information secure</label>
			</td>
			<td>
		    	<input type="radio" name="keepClasInfSec" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="keepClasInfSec" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="keepClasInfSec" value="100"/>
		    </td>
		</tr>

		<!-- Row 20 - Perform exactly as instructed - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="perfExaInst">Perform exactly as instructed</label>
			</td>
			  <td>
		    	<input type="radio" name="perfExaInst" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="perfExaInst" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="perfExaInst" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="perfExaInst" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="perfExaInst" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfExaInst" value="100"/>
		    </td>
		</tr>

		<!-- Row 21 - Make sensible decision -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="makeSenDec">Make sensible decision</label>
			</td>
			<td>
		    	<input type="radio" name="makeSenDec" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="makeSenDec" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="makeSenDec" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="makeSenDec" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="makeSenDec" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="makeSenDec" value="100"/>
		    </td>
		</tr>

		<!-- Row 22 - Work in close proximity with people -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="workCloProxPeo">Work in close proximity with people</label>
			</td>
			 <td>
		    	<input type="radio" name="workCloProxPeo" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="workCloProxPeo" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="workCloProxPeo" value="100"/>
		    </td>
		</tr>

		<!-- Row 23 - Tell the truth -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="tellTruth">Tell the truth</label>
			</td>
			<td>
		    	<input type="radio" name="tellTruth" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="tellTruth" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="tellTruth" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="tellTruth" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="tellTruth" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="tellTruth" value="100"/>
		    </td>
		</tr>

		<!-- Row 24 - Perform many functions at one time -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="perfManFunc">Perform many functions at one time</label>
			</td>
			 <td>
		    	<input type="radio" name="perfManFunc" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="perfManFunc" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="perfManFunc" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="perfManFunc" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="perfManFunc" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="perfManFunc" value="100"/>
		    </td>
		</tr>

		<!-- Row 25 - Follow directions - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="folDir">Follow directions</label>
			</td>
			   <td>
		    	<input type="radio" name="folDir" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="folDir" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="folDir" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="folDir" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="folDir" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="folDir" value="100"/>
		    </td>
		</tr>
		</tbody>
	</table>

	<table class="TFtableCol" style="margin: 20px;" border = "1"; >
		<thead>
		<tr style="vertical-align: bottom;">
		    <th width="40%">
		    	&ensp;What % of the time will this robot be...&ensp;
		    </th>
		    <th width="6%">
		    	0%
		    </th>
		    <th width="6%">
		    	10%
		    </th>
		    <th width="6%">
		    	20%
		    </th>
		    <th width="6%">
		    	30% 
		    </th>	    
		   	<th width="6%">
		    	40%
		    </th>	   
		   	<th width="6%">
		    	50%
		    </th>	    
			<th width="6%">
		    	60% 
		    </th>	    
		    <th width="6%">
		    	70%
		    </th>	    
		    <th width="6%">
		    	80% 
		    </th>	    
		    <th width="6%">
		    	90% 
		    </th>	    
		    <th width="6%">
		    	100%
		    </th>
		</tr>
		</thead>

	
		<!-- Row 26 - Considered part of the team -->
		<tr align="center">
			<td class="firstElement" align="left">
				<label for="consPartTeam">Considered part of the team</label>
			</td>
			 <td>
		    	<input type="radio" id="10" name="consPartTeam" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" id="10" name="consPartTeam" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" id="20" name="consPartTeam" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" id="30" name="consPartTeam" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="40" name="consPartTeam" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" id="50" name="consPartTeam" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="60" name="consPartTeam" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="70" name="consPartTeam" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="80" name="consPartTeam" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="90" name="consPartTeam" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" id="100" name="consPartTeam" value="100"/>
		    </td>
		</tr>

		<!-- Row 27 - Responsible -->
	  	<tr align="center">
			<td align="left" class="firstElement">
				<label for="resp">Responsible</label>
			</td>
			 <td>
		    	<input type="radio" name="resp" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="resp" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="resp" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="resp" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="resp" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="resp" value="100"/>
		    </td>
		</tr>

		<!-- Row 28 - supportive -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="supp">Supportive</label>
			</td>
			<td>
		    	<input type="radio" name="supp" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="supp" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="supp" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="supp" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="supp" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="supp" value="100"/>
		    </td>
		</tr>

		<!-- Row 29 - incompetent - R -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="inco">Incompetent</label>
			</td>
			<td>
		    	<input type="radio" name="inco" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="inco" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="inco" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="inco" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="inco" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="inco" value="100"/>
		    </td>
		</tr>

		<!-- Row 30 - Dependable - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="depen">Dependable</label>
			</td>
			 <td>
		    	<input type="radio" name="depen" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="depen" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="depen" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="depen" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="depen" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="depen" value="100"/>
		    </td>
		</tr>

		<!-- Row 31 - Friendly -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="frie">Friendly</label>
			</td>
			 <td>
		    	<input type="radio" name="frie" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="frie" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="frie" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="frie" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="frie" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="frie" value="100"/>
		    </td>
		</tr>

		<!-- Row 32 - Reliable - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="reli">Reliable</label>
			</td>
			 <td>
		    	<input type="radio" name="reli" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="reli" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="reli" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="reli" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="reli" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="reli" value="100"/>
		    </td>
		</tr>
	</table>

	<table class="TFtableCol" style="margin: 20px;" border = "1"; >
		<thead>
		<tr style="vertical-align: bottom;">
		    <th width="40%">
		    	&ensp;What % of the time will this robot be...&ensp;
		    </th>
		    <th width="6%">
		    	0%
		    </th>
		    <th width="6%">
		    	10%
		    </th>
		    <th width="6%">
		    	20%
		    </th>
		    <th width="6%">
		    	30% 
		    </th>	    
		   	<th width="6%">
		    	40%
		    </th>	   
		   	<th width="6%">
		    	50%
		    </th>	    
			<th width="6%">
		    	60% 
		    </th>	    
		    <th width="6%">
		    	70%
		    </th>	    
		    <th width="6%">
		    	80% 
		    </th>	    
		    <th width="6%">
		    	90% 
		    </th>	    
		    <th width="6%">
		    	100%
		    </th>
		</tr>
		</thead>

		<!-- Row 33 - Pleasant -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="pleas">Pleasant</label>
			</td>
			 <td>
		    	<input type="radio" name="pleas" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="pleas" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="pleas" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="pleas" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="pleas" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="pleas" value="100"/>
		    </td>
		</tr>

		<!-- Row 34 - Unresponsive - R* -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="unres">Unresponsive</label>
			</td>
			 <td>
		    	<input type="radio" name="unres" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="unres" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="unres" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="unres" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="unres" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="unres" value="100"/>
		    </td>
		</tr>

		<!-- Row 35 - Autonomous -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="auton">Autonomous</label>
			</td>
			 <td>
		    	<input type="radio" name="auton" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="auton" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="auton" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="auton" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="auton" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="auton" value="100"/>
		    </td>
		</tr>

		<!-- Row 36 - Predictable - * -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="predi">Predictable</label>
			</td>
			 <td>
		    	<input type="radio" name="predi" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="predi" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="predi" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="predi" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="predi" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="predi" value="100"/>
		    </td>
		</tr>

		<!-- Row 37 - Conscious -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="consc">Conscious</label>
			</td>
			 <td>
		    	<input type="radio" name="consc" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="consc" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="consc" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="consc" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="consc" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="consc" value="100"/>
		    </td>
		</tr>

		<!-- Row 38 - Lifelike -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="lifelike">Lifelike</label>
			</td>
			<td>
		    	<input type="radio" name="lifelike" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="lifelike" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="lifelike" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="lifelike" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="lifelike" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="lifelike" value="100"/>
		    </td>
		</tr>

		<!-- Row 39 - A good teammate -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="goodTeam">A good teammate</label>
			</td>
			<td>
		    	<input type="radio" name="goodTeam" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="goodTeam" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="goodTeam" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="goodTeam" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="goodTeam" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="goodTeam" value="100"/>
		    </td>
		</tr>

		<!-- Row 40 - Led astray by unexpected changes in the environment -->
		<tr align="center">
			<td align="left" class="firstElement">
				<label for="ledAst">Led astray by unexpected changes in the environment</label>
			</td>
			 <td>
		    	<input type="radio" name="ledAst" value="0" required/>
		    </td>
		    <td>
		    	<input type="radio" name="ledAst" value="10"/>
		    </td>
		    <td>
		    	<input type="radio" name="ledAst" value="20"/>
		    </td>
		   	<td>
		    	<input type="radio" name="ledAst" value="30"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="40"/>
		    </td>	   
		    <td>
		    	<input type="radio" name="ledAst" value="50"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="60"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="70"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="80"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="90"/>
		    </td>	    
		    <td>
		    	<input type="radio" name="ledAst" value="100"/>
		    </td>
		</tr>
	</table>	
		</div>

		<div class="col-lg-5 text-center">			
			<iframe src="playVideo.php" style="width: 50%; height: 50%; border: 0; position: fixed; display: block;"> </iframe>
		</div>

	</div>


	<div class="row text-center" style="margin-bottom: 20px;">
		<div class="col-2">
		</div>
				
		<div class="col-8">
		</div>

		<div class="col-2" id="col2">
			<input type="submit" id="sub" name="submit" value="Submit" class="btn btn-outline-dark" style="font-size: 1.5vw">
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
