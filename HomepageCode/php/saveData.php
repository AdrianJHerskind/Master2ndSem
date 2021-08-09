<?php
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	$thisPage = "saveData.php";
	if(strcmp($_SESSION["blockSaveData"], "true") == 0)
	{
		header("Location: " . $_SESSION["currPage"]);
	} 
?>

<!DOCTYPE html>
<html lang ="en-US">
	
<head>
</head>

<body>
<?php
	if(!file_exists("../file/".$_SESSION["ip"].".csv"))
	{
		$file_open = fopen("../file/".$_SESSION["ip"].".csv", "a");
			$no_rows = count(file("../file/".$_SESSION["ip"].".csv", "a"));
		

		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		else
		{
			$headers = array('SrNo', 'ip', 'admin', 'personalisedGroup', 'suspiciousGroup', 'year', 'gender', 'nationality', 'education', 'everSimulation', 'everRealRobot', 'howManyRobot', 'whereRobotInterBook', 'whereRobotInterMovies', 'whereRobotInterComputergames', 'whereRobotInterOwnHome', 'whereRobotInterOutsideWorld', 'whereRobotInterWork', 'whereRobotInterSchoolUniversity', 'whereRobotInterNoneOfTheAbove', 'usePersonalRobot', 'haveProgrammedRobot', 'whichRobot', 'T-ActConsistently1', 'N-ProtectPeople1', 'N-ActAsPartOfTeam1', 'T-FunctionSuccessfully1', 'T-R-Malfunction1', 'N-ClearlyCommunicate1', 'N-R-RequireFrequentMaintenance1', 'N-OpenlyCommunicate1', 'T-R-HaveErrors1', 'N-PerformTaskBetterThanNoviceHuman1', 'N-KnowDifferenceBetweenFriendFoe1', 'T-ProvideFeedback1', 'N-PossessAdequateDecisionMakingCapability1', 'N-WarnPeopleOfPotentialRisksInEnvironment1', 'T-MeetNeedsOfMission1', 'T-ProvideAppropriateInformation1', 'T-CommunicateWithPeople1', 'N-WorkBestWithATeam1', 'N-KeepClassifiedInformationSecure1', 'T-PerformAsInstructed1', 'N-MakeSensibleDecisions1', 'N-WorkInCloseProximityToPeople1', 'N-TellTruth1', 'N-PerformManyFunctionsAtOneTime1', 'T-FollowDirections1', 'N-ConsideredPartOfTheTeam1', 'N-Responsible1', 'N-Supportive1', 'N-R-Incompetent1', 'T-Dependable1', 'N-Friendly1', 'T-Reliable1', 'N-Pleasant1', 'T-R-Unresponsive1', 'N-Autonomous1', 'T-Predictable1', 'N-Conscious1', 'N-Lifelike1', 'N-GoodTeammate1', 'N-LedAstrayByUnexpectedChangesInEnvironment1', 'robotname', 'eyeColor', 'primaryColor', 'secondaryColor', 'intermActCon1', 'intermTellTruth1', 'intermBehPre1', 'gameVariables', 'gameCompleted', 'gameRound1', 'gameRound2', 'gameRound3', 'gameRound4', 'gameRound5', 'gameRound6', 'gameRound7', 'timerRound1', 'timerRound2', 'timerRound3', 'timerRound4', 'timerRound5', 'timerRound6', 'timerRound7', 'T-ActConsistently2', 'N-ProtectPeople2', 'N-ActAsPartOfTeam2', 'T-FunctionSuccessfully2', 'T-R-Malfunction2', 'N-ClearlyCommunicate2', 'N-R-RequireFrequentMaintenance2', 'N-OpenlyCommunicate2', 'T-R-HaveErrors2', 'N-PerformTaskBetterThanNoviceHuman2', 'N-KnowDifferenceBetweenFriendFoe2', 'T-ProvideFeedback2', 'N-PossessAdequateDecisionMakingCapability2', 'N-WarnPeopleOfPotentialRisksInEnvironment2', 'T-MeetNeedsOfMission2', 'T-ProvideAppropriateInformation2', 'T-CommunicateWithPeople2', 'N-WorkBestWithATeam2', 'N-KeepClassifiedInformationSecure2', 'T-PerformAsInstructed2', 'N-MakeSensibleDecisions2', 'N-WorkInCloseProximityToPeople2', 'N-TellTruth2', 'N-PerformManyFunctionsAtOneTime2', 'T-FollowDirections2', 'N-ConsideredPartOfTheTeam2', 'N-Responsible2', 'N-Supportive2', 'N-R-Incompetent2', 'T-Dependable2', 'N-Friendly2', 'T-Reliable2', 'N-Pleasant2', 'T-R-Unresponsive2', 'N-Autonomous2', 'T-Predictable2', 'N-Conscious2', 'N-Lifelike2', 'N-GoodTeammate2', 'N-LedAstrayByUnexpectedChangesInEnvironment2');
			fputcsv($file_open, $headers);
		}

		$form_data = array(
			'sr_no'	=> $no_rows,
			'ip' 	=> $_SESSION["ip"],
			'admin'=> $_SESSION["admin"],
			'personalisedGroup'	=> $_SESSION["personalisedGroup"],
			'suspiciousGroup' => $_SESSION["suspiciousGroup"],
			'year' => $_SESSION["year"],
	 		'gender' => $_SESSION["gender"],
	 		'nationality' => $_SESSION["nationality"],
	 		'education' => $_SESSION["education"],
	 		'everSimulation' => $_SESSION["everSimulation"],
	 		'everRealRobot' => $_SESSION["everRealRobot"],
	 		'howManyRobot' => $_SESSION["howManyRobot"],
	 		'whereRobotInterBook' => $_SESSION["whereRobotInter"]["book"],
	 		'whereRobotInterMovies' => $_SESSION["whereRobotInter"]["movies"],
	  		'whereRobotInterComputergames' => $_SESSION["whereRobotInter"]["computergames"],
	 		'whereRobotInterOwnHome' => $_SESSION["whereRobotInter"]["ownhome"],
	  		'whereRobotInterOutsideWorld' => $_SESSION["whereRobotInter"]["outsideworld"],
	   		'whereRobotInterWork' => $_SESSION["whereRobotInter"]["work"],
	 		'whereRobotInterSchoolUniversity' => $_SESSION["whereRobotInter"]["schooluniversity"],
	 		'whereRobotInterNoneOfTheAbove' => $_SESSION["whereRobotInter"]["noneoftheabove"],
	 		'usePersonalRobot' => $_SESSION["usePersonalRobot"],
	 		'haveProgrammedRobot' => $_SESSION["haveProgrammedRobot"],
	 		'whichRobot' => $_SESSION["whichRobot"],
	 		'actCon1' => $_SESSION["actCon1"],
	 		'proPeo1' => $_SESSION["proPeo1"],
	 		'actTeam1' => $_SESSION["actTeam1"],
	 		'funcSucc1' => $_SESSION["funcSucc1"],
	 		'malfunc1' => $_SESSION["malfunc1"],
	 		'cleCom1' => $_SESSION["cleCom1"],
	 		'reqMain1' => $_SESSION["reqMain1"],
	 		'openCom1' => $_SESSION["openCom1"],
	 		'haveErr1' => $_SESSION["haveErr1"],
	 		'perfBetNov1' => $_SESSION["perfBetNov1"],
	 		'knowDifFriFoe1' => $_SESSION["knowDifFriFoe1"],
	 		'provFeed1' => $_SESSION["provFeed1"],
	 		'possAdeDecCap1' => $_SESSION["possAdeDecCap1"],
	 		'warnPeoRisk1' => $_SESSION["warnPeoRisk1"],
	 		'meetNeedsMiss1' => $_SESSION["meetNeedsMiss1"],
	 		'provAppInf1' => $_SESSION["provAppInf1"],
	 		'commPeo1' => $_SESSION["commPeo1"],
	 		'workBestTeam1' => $_SESSION["workBestTeam1"],
	 		'keepClasInfSec1' => $_SESSION["keepClasInfSec1"],
	 		'perfExaInst1' => $_SESSION["perfExaInst1"],
	 		'makeSenDec1' => $_SESSION["makeSenDec1"],
	 		'workCloProxPeo1' => $_SESSION["workCloProxPeo1"],
	 		'tellTruth1' => $_SESSION["tellTruth1"],
	 		'perfManFunc1' => $_SESSION["perfManFunc1"],
	 		'folDir1' => $_SESSION["folDir1"],
	 		'consPartTeam1' => $_SESSION["consPartTeam1"],
	 		'resp1' => $_SESSION["resp1"],
	 		'supp1' => $_SESSION["supp1"],
	 		'inco1' => $_SESSION["inco1"],
	 		'depen1' => $_SESSION["depen1"],
	 		'frie1' => $_SESSION["frie1"],
	 		'reli1' => $_SESSION["reli1"],
	 		'pleas1' => $_SESSION["pleas1"],
	 		'unres1' => $_SESSION["unres1"],
	 		'auton1' => $_SESSION["auton1"],
	 		'predi1' => $_SESSION["predi1"],
	 		'consc1' => $_SESSION["consc1"],
	 		'lifelike1' => $_SESSION["lifelike1"],
	 		'goodTeam1' => $_SESSION["goodTeam1"],
	 		'ledAst1' => $_SESSION["ledAst1"],
	 		'robotname' => $_SESSION["robotname"],
	 		'eyeColor' => $_SESSION["eyeColor"],
	 		'primaryColor' => $_SESSION["primaryColor"],
	 		'secondaryColor' => $_SESSION["secondaryColor"],
	 		'intermActCon1' => $_SESSION["intermActCon1"],
	 		'intermTellTruth1' => $_SESSION["intermTellTruth1"],
	 		'intermBehPre1' => $_SESSION["intermBehPre1"],
	 		'gameVariables' => 'ENTERGAMEVARIABLES',
	 		'gameCompleted' => $_SESSION["gameCompleted"],
	 		'gameRound1' => $_SESSION["gameRound1"],
	 		'gameRound2' => $_SESSION["gameRound2"],
	 		'gameRound3' => $_SESSION["gameRound3"],
	 		'gameRound4' => $_SESSION["gameRound4"],
	 		'gameRound5' => $_SESSION["gameRound5"],
	 		'gameRound6' => $_SESSION["gameRound6"],
	 		'gameRound7' => $_SESSION["gameRound7"],
	  		'timerRound1' => $_SESSION["timerRound1"],
	  		'timerRound2' => $_SESSION["timerRound2"],
	  		'timerRound3' => $_SESSION["timerRound3"],
	  		'timerRound4' => $_SESSION["timerRound4"],
	  		'timerRound5' => $_SESSION["timerRound5"],
	  		'timerRound6' => $_SESSION["timerRound6"],
	  		'timerRound7' => $_SESSION["timerRound7"],
	 		'actCon2' => $_SESSION["actCon2"],
	 		'proPeo2' => $_SESSION["proPeo2"],
	 		'actTeam2' => $_SESSION["actTeam2"],
	 		'funcSucc2' => $_SESSION["funcSucc2"],
	 		'malfunc2' => $_SESSION["malfunc2"],
	 		'cleCom2' => $_SESSION["cleCom2"],
	 		'reqMain2' => $_SESSION["reqMain2"],
	 		'openCom2' => $_SESSION["openCom2"],
	 		'haveErr2' => $_SESSION["haveErr2"],
	 		'perfBetNov2' => $_SESSION["perfBetNov2"],
	 		'knowDifFriFoe2' => $_SESSION["knowDifFriFoe2"],
	 		'provFeed2' => $_SESSION["provFeed2"],
	 		'possAdeDecCap2' => $_SESSION["possAdeDecCap2"],
	 		'warnPeoRisk2' => $_SESSION["warnPeoRisk2"],
	 		'meetNeedsMiss2' => $_SESSION["meetNeedsMiss2"],
	 		'provAppInf2' => $_SESSION["provAppInf2"],
	 		'commPeo2' => $_SESSION["commPeo2"],
	 		'workBestTeam2' => $_SESSION["workBestTeam2"],
	 		'keepClasInfSec2' => $_SESSION["keepClasInfSec2"],
	 		'perfExaInst2' => $_SESSION["perfExaInst2"],
	 		'makeSenDec2' => $_SESSION["makeSenDec2"],
	 		'workCloProxPeo2' => $_SESSION["workCloProxPeo2"],
	 		'tellTruth2' => $_SESSION["tellTruth2"],
	 		'perfManFunc2' => $_SESSION["perfManFunc2"],
	 		'folDir2' => $_SESSION["folDir2"],
	 		'consPartTeam2' => $_SESSION["consPartTeam2"],
	 		'resp2' => $_SESSION["resp2"],
	 		'supp2' => $_SESSION["supp2"],
	 		'inco2' => $_SESSION["inco2"],
	 		'depen2' => $_SESSION["depen2"],
	 		'frie2' => $_SESSION["frie2"],
	 		'reli2' => $_SESSION["reli2"],
	 		'pleas2' => $_SESSION["pleas2"],
	 		'unres2' => $_SESSION["unres2"],
	 		'auton2' => $_SESSION["auton2"],
	 		'predi2' => $_SESSION["predi2"],
	 		'consc2' => $_SESSION["consc2"],
	 		'lifelike2' => $_SESSION["lifelike2"],
	 		'goodTeam2' => $_SESSION["goodTeam2"],
	 		'ledAst2' => $_SESSION["ledAst2"],
		);
		fputcsv($file_open, $form_data);
		fclose($file_open);
	}
	$_SESSION["blockSaveData"] = "true";
?>

</body>

</html>


