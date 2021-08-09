<?php
session_start();

	if(!array_key_exists("whichForm",$_POST))
	{
		header("Location: ../index.php");
	}
	if(strcmp($_POST["whichForm"], "admin") == 0)
	{
		$_SESSION["admin"] = $_POST["user"];

		header("Location: introduction.php");
	}
	else if(strcmp($_POST["whichForm"], "initialSurvey") == 0)
	{
		$_SESSION["blockIntroduction"] = "true";
		$_SESSION["blockInitialSurvey"] = "true";

		$_SESSION["year"] = 2020 - $_POST["year"];
		$_SESSION["gender"] = $_POST["gender"];
		$_SESSION["nationality"] = $_POST["nationality"];
		$_SESSION["education"] = $_POST["education"];
		$_SESSION["everSimulation"] = $_POST["everSimulation"];
		$_SESSION["everRealRobot"] = $_POST["everRealRobot"];
		$_SESSION["howManyRobot"] = $_POST["howManyRobot"];
	
		$_SESSION["whereRobotInter"]["book"] = $_POST["whereRobotInterBook"];
		$_SESSION["whereRobotInter"]["movies"] = $_POST["whereRobotInterMovies"];
		$_SESSION["whereRobotInter"]["computergames"] = $_POST["whereRobotInterComputerGames"];
		$_SESSION["whereRobotInter"]["ownhome"] = $_POST["whereRobotInterOwnHome"];
		$_SESSION["whereRobotInter"]["outsideworld"] = $_POST["whereRobotInterOutsideWorld"];
		$_SESSION["whereRobotInter"]["work"] = $_POST["whereRobotInterWork"];
		$_SESSION["whereRobotInter"]["schooluniversity"] = $_POST["whereRobotInterSchoolUniversity"];
		$_SESSION["whereRobotInter"]["noneoftheabove"] = $_POST["whereRobotInterNoneOfTheAbove"];




		$_SESSION["usePersonalRobot"] = $_POST["usePersonalRobot"];
		$_SESSION["haveProgrammedRobot"] = $_POST["haveProgrammedRobot"];

		$_SESSION["whichRobot"] = $_POST["whichRobot"];


		$_SESSION["blockRobotIntro"] = "false";
		header("Location: robotIntro.php");

	}
	else if(strcmp($_POST["whichForm"], "schaefer1") == 0)
	{
		$_SESSION["blockSchaefer1"] = "true";

		//Schaefer1 Before
		$_SESSION["actCon1"] = $_POST["actCon"];
		$_SESSION["proPeo1"] = $_POST["proPeo"];
		$_SESSION["actTeam1"] = $_POST["actTeam"];
		$_SESSION["funcSucc1"] = $_POST["funcSucc"];
		$_SESSION["malfunc1"] = $_POST["malfunc"];
		$_SESSION["cleCom1"] = $_POST["cleCom"];
		$_SESSION["reqMain1"] = $_POST["reqMain"];
		$_SESSION["openCom1"] = $_POST["openCom"];
		$_SESSION["haveErr1"] = $_POST["haveErr"];
		$_SESSION["perfBetNov1"] = $_POST["perfBetNov"];
		$_SESSION["knowDifFriFoe1"] = $_POST["knowDifFriFoe"];
		$_SESSION["provFeed1"] = $_POST["provFeed"];
		$_SESSION["possAdeDecCap1"] = $_POST["possAdeDecCap"];
		$_SESSION["warnPeoRisk1"] = $_POST["warnPeoRisk"];
		$_SESSION["meetNeedsMiss1"] = $_POST["meetNeedsMiss"];
		$_SESSION["provAppInf1"] = $_POST["provAppInf"];
		$_SESSION["commPeo1"] = $_POST["commPeo"];
		$_SESSION["workBestTeam1"] = $_POST["workBestTeam"];
		$_SESSION["keepClasInfSec1"] = $_POST["keepClasInfSec"];
		$_SESSION["perfExaInst1"] = $_POST["perfExaInst"];
		$_SESSION["makeSenDec1"] = $_POST["makeSenDec"];
		$_SESSION["workCloProxPeo1"] = $_POST["workCloProxPeo"];
		$_SESSION["tellTruth1"] = $_POST["tellTruth"];
		$_SESSION["perfManFunc1"] = $_POST["perfManFunc"];
		$_SESSION["folDir1"] = $_POST["folDir"];
		$_SESSION["consPartTeam1"] = $_POST["consPartTeam"];
		$_SESSION["resp1"] = $_POST["resp"];
		$_SESSION["supp1"] = $_POST["supp"];
		$_SESSION["inco1"] = $_POST["inco"];
		$_SESSION["depen1"] = $_POST["depen"];
		$_SESSION["frie1"] = $_POST["frie"];
		$_SESSION["reli1"] = $_POST["reli"];
		$_SESSION["pleas1"] = $_POST["pleas"];
		$_SESSION["unres1"] = $_POST["unres"];
		$_SESSION["auton1"] = $_POST["auton"];
		$_SESSION["predi1"] = $_POST["predi"];
		$_SESSION["consc1"] = $_POST["consc"];
		$_SESSION["lifelike1"] = $_POST["lifelike"];
		$_SESSION["goodTeam1"] = $_POST["goodTeam"];
		$_SESSION["ledAst1"] = $_POST["ledAst"];

		if(strcmp($_SESSION["personalisedGroup"], "personalised") == 0)
		{
			$_SESSION["blockPersonalisedIntro"] = "false";
			$_SESSION["blockPersonalisation"] = "false";
			header("Location: personaliseIntro.php");
		}
		else
		{
			$_SESSION["blockUnpersonalisedIntro"] = "false";
			header("Location: unpersonalIntro.php");
		}
	}
	else if(strcmp($_POST["whichForm"], "personalisationDone") == 0)
	{
		$_SESSION["blockPersonalisedIntro"] = "true";
		$_SESSION["blockPersonalisation"] = "true";

		$_SESSION["blockIntermediateTrust"] = "false";
		header("Location: intermediateTrust.php");	
	}
	else if(strcmp($_POST["whichForm"], "unpersonalisedRobot") == 0)
	{
		$_SESSION["blockUnpersonalisedIntro"] = "true";
		$_SESSION["blockIntermediateTrust"] = "false";
		header("Location: intermediateTrust.php");
	}
	else if(strcmp($_POST["whichForm"], "intermediateTrust1") == 0)
	{
		$_SESSION["intermActCon1"] = $_POST["sliderActCon1"];
		$_SESSION["intermTellTruth1"] = $_POST["sliderTellTruth1"];
		$_SESSION["intermBehPre1"] = $_POST["sliderBehPre1"];
		
		$_SESSION["blockIntermediateTrust"] = "true";
		$_SESSION["blockGameIntro"] = "false";
		$_SESSION["blockGameLayout"] = "false";

		header("Location: gameIntro.php");
	}
	else if(strcmp($_POST["whichForm"], "gameReloadLostForm") == 0)
	{

		$_SESSION["blockGameLayout"] = "true";
		$_SESSION["blockGameIntro"] = "true";
		$_SESSION["blockGameOver"] = "false";

		$_SESSION["gameCompleted"] = "false";

		header("Location: gameOver.php");
	}
	else if(strcmp($_POST["whichForm"], "gameCompletedForm") == 0)
	{
		$_SESSION["blockGameLayout"] = "true";
		$_SESSION["blockGameIntro"] = "true";
		$_SESSION["gameRound1"] = $_POST["memoryRound1"];
		$_SESSION["gameRound2"] = $_POST["memoryRound2"];
		$_SESSION["gameRound3"] = $_POST["memoryRound3"];
		$_SESSION["gameRound4"] = $_POST["memoryRound4"];
		$_SESSION["gameRound5"] = $_POST["memoryRound5"];
		$_SESSION["gameRound6"] = $_POST["memoryRound6"];
		$_SESSION["gameRound7"] = $_POST["memoryRound7"];

		$_SESSION["timerRound1"] = $_POST["timerRound1"];;
		$_SESSION["timerRound2"] = $_POST["timerRound2"];;
		$_SESSION["timerRound3"] = $_POST["timerRound3"];;
		$_SESSION["timerRound4"] = $_POST["timerRound4"];;
		$_SESSION["timerRound5"] = $_POST["timerRound5"];;
		$_SESSION["timerRound6"] = $_POST["timerRound6"];;
		$_SESSION["timerRound7"] = $_POST["timerRound7"];;

		$_SESSION["gameCompleted"] = "true";
		$_SESSION["blockSchaefer2"] = "false";

		header("Location: schaefer2.php");
	}
	else if(strcmp($_POST["whichForm"], "schaefer2") == 0)
	{
		$_SESSION["blockSchaefer2"] = "true";

		//Schaefer2 After
		$_SESSION["actCon2"] = $_POST["actCon"];
		$_SESSION["proPeo2"] = $_POST["proPeo"];
		$_SESSION["actTeam2"] = $_POST["actTeam"];
		$_SESSION["funcSucc2"] = $_POST["funcSucc"];
		$_SESSION["malfunc2"] = $_POST["malfunc"];
		$_SESSION["cleCom2"] = $_POST["cleCom"];
		$_SESSION["reqMain2"] = $_POST["reqMain"];
		$_SESSION["openCom2"] = $_POST["openCom"];
		$_SESSION["haveErr2"] = $_POST["haveErr"];
		$_SESSION["perfBetNov2"] = $_POST["perfBetNov"];
		$_SESSION["knowDifFriFoe2"] = $_POST["knowDifFriFoe"];
		$_SESSION["provFeed2"] = $_POST["provFeed"];
		$_SESSION["possAdeDecCap2"] = $_POST["possAdeDecCap"];
		$_SESSION["warnPeoRisk2"] = $_POST["warnPeoRisk"];
		$_SESSION["meetNeedsMiss2"] = $_POST["meetNeedsMiss"];
		$_SESSION["provAppInf2"] = $_POST["provAppInf"];
		$_SESSION["commPeo2"] = $_POST["commPeo"];
		$_SESSION["workBestTeam2"] = $_POST["workBestTeam"];
		$_SESSION["keepClasInfSec2"] = $_POST["keepClasInfSec"];
		$_SESSION["perfExaInst2"] = $_POST["perfExaInst"];
		$_SESSION["makeSenDec2"] = $_POST["makeSenDec"];
		$_SESSION["workCloProxPeo2"] = $_POST["workCloProxPeo"];
		$_SESSION["tellTruth2"] = $_POST["tellTruth"];
		$_SESSION["perfManFunc2"] = $_POST["perfManFunc"];
		$_SESSION["folDir2"] = $_POST["folDir"];
		$_SESSION["consPartTeam2"] = $_POST["consPartTeam"];
		$_SESSION["resp2"] = $_POST["resp"];
		$_SESSION["supp2"] = $_POST["supp"];
		$_SESSION["inco2"] = $_POST["inco"];
		$_SESSION["depen2"] = $_POST["depen"];
		$_SESSION["frie2"] = $_POST["frie"];
		$_SESSION["reli2"] = $_POST["reli"];
		$_SESSION["pleas2"] = $_POST["pleas"];
		$_SESSION["unres2"] = $_POST["unres"];
		$_SESSION["auton2"] = $_POST["auton"];
		$_SESSION["predi2"] = $_POST["predi"];
		$_SESSION["consc2"] = $_POST["consc"];
		$_SESSION["lifelike2"] = $_POST["lifelike"];
		$_SESSION["goodTeam2"] = $_POST["goodTeam"];
		$_SESSION["ledAst2"] = $_POST["ledAst"];

		$_SESSION["blockSaveData"] = "false";

		$_SESSION["blockThankYou"] = "false";
		header("Location: thankYou.php");
	}

?>
