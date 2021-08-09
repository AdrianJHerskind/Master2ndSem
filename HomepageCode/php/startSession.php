
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];
$_SESSION["whichForm"] = "";
$_SESSION["currPage"] = "";
$_SESSION["blockHome"] = "false";

// Admin?
$_SESSION["admin"] = "user";
$_SESSION["blockIntroduction"] = "true";

//Personalised or not?
$_SESSION["personalisedGroup"] = "";
$_SESSION["suspiciousGroup"] = "";

//Initial Survey
$_SESSION["blockInitialSurvey"] = "true";
$_SESSION["year"] = "";
$_SESSION["gender"] = "";
$_SESSION["nationality"] = "";
$_SESSION["education"] = "";
$_SESSION["everSimulation"] = "";
$_SESSION["everRealRobot"] = "";
$_SESSION["howManyRobot"] = "";
$_SESSION["whereRobotInter"] = ["book" => "", "movies" => "", "computergames" => "", "ownhome" => "", "outsideworld" => "", "work" => "", "schooluniversity" => "", "noneoftheabove" => ""];
$_SESSION["usePersonalRobot"] = "";
$_SESSION["haveProgrammedRobot"] = "";
$_SESSION["whichRobot"] = "";

//Robot Intro
$_SESSION["blockRobotIntro"] = "true";

//Schaefer1 Before
$_SESSION["blockSchaefer1"] = "true";

$_SESSION["actCon1"] = "";
$_SESSION["proPeo1"] = "";
$_SESSION["actTeam1"] = "";
$_SESSION["funcSucc1"] = "";
$_SESSION["malfunc1"] = "";
$_SESSION["cleCom1"] = "";
$_SESSION["reqMain1"] = "";
$_SESSION["openCom1"] = "";
$_SESSION["haveErr1"] = "";
$_SESSION["perfBetNov1"] = "";
$_SESSION["knowDifFriFoe1"] = "";
$_SESSION["provFeed1"] = "";
$_SESSION["possAdeDecCap1"] = "";
$_SESSION["warnPeoRisk1"] = "";
$_SESSION["meetNeedsMiss1"] = "";
$_SESSION["provAppInf1"] = "";
$_SESSION["commPeo1"] = "";
$_SESSION["workBestTeam1"] = "";
$_SESSION["keepClasInfSec1"] = "";
$_SESSION["perfExaInst1"] = "";
$_SESSION["makeSenDec1"] = "";
$_SESSION["workCloProxPeo1"] = "";
$_SESSION["tellTruth1"] = "";
$_SESSION["perfManFunc1"] = "";
$_SESSION["folDir1"] = "";
$_SESSION["consPartTeam1"] = "";
$_SESSION["resp1"] = "";
$_SESSION["supp1"] = "";
$_SESSION["inco1"] = "";
$_SESSION["depen1"] = "";
$_SESSION["frie1"] = "";
$_SESSION["reli1"] = "";
$_SESSION["pleas1"] = "";
$_SESSION["unres1"] = "";
$_SESSION["auton1"] = "";
$_SESSION["predi1"] = "";
$_SESSION["consc1"] = "";
$_SESSION["lifelike1"] = "";
$_SESSION["goodTeam1"] = "";
$_SESSION["ledAst1"] = "";

//Personalised Intro
$_SESSION["blockPersonalisedIntro"] = "true";

	//Personalisation
	$_SESSION["blockPersonalisation"] = "true";

	//Robot name
	$_SESSION["robotname"] = "Nao";

	//Robot eyecolor
	$_SESSION["eyeColor"] = "Black";

	//Robot Primary Color
	$_SESSION["primaryColor"] = "White";

	//Robot Secondary Color
	$_SESSION["secondaryColor"] = "Red";

	$_SESSION["colorPersonalised"] = "false";

//Unpersonalised Intro
$_SESSION["blockUnpersonalisedIntro"] = "true";


//Intermediate Trust
$_SESSION["blockIntermediateTrust"] = "true";
$_SESSION["intermActCon1"] = "";
$_SESSION["intermTellTruth1"] = "";
$_SESSION["intermBehPre1"] = "";

//Game Intro
$_SESSION["blockGameIntro"] = "true";

//Game
$_SESSION["blockGameLayout"] = "true";
$_SESSION["gameCompleted"] = "false";
$_SESSION["gameRound1"] = "";
$_SESSION["gameRound2"] = "";
$_SESSION["gameRound3"] = "";
$_SESSION["gameRound4"] = "";
$_SESSION["gameRound5"] = "";
$_SESSION["gameRound6"] = "";
$_SESSION["gameRound7"] = "";

$_SESSION["timerRound1"] = "";
$_SESSION["timerRound2"] = "";
$_SESSION["timerRound3"] = "";
$_SESSION["timerRound4"] = "";
$_SESSION["timerRound5"] = "";
$_SESSION["timerRound6"] = "";
$_SESSION["timerRound7"] = "";

//Game over due to reload
$_SESSION["blockGameOver"] = "true";

//Schaefer2 After
$_SESSION["blockSchaefer2"] = "true";

$_SESSION["actCon2"] = "";
$_SESSION["proPeo2"] = "";
$_SESSION["actTeam2"] = "";
$_SESSION["funcSucc2"] = "";
$_SESSION["malfunc2"] = "";
$_SESSION["cleCom2"] = "";
$_SESSION["reqMain2"] = "";
$_SESSION["openCom2"] = "";
$_SESSION["haveErr2"] = "";
$_SESSION["perfBetNov2"] = "";
$_SESSION["knowDifFriFoe2"] = "";
$_SESSION["provFeed2"] = "";
$_SESSION["possAdeDecCap2"] = "";
$_SESSION["warnPeoRisk2"] = "";
$_SESSION["meetNeedsMiss2"] = "";
$_SESSION["provAppInf2"] = "";
$_SESSION["commPeo2"] = "";
$_SESSION["workBestTeam2"] = "";
$_SESSION["keepClasInfSec2"] = "";
$_SESSION["perfExaInst2"] = "";
$_SESSION["makeSenDec2"] = "";
$_SESSION["workCloProxPeo2"] = "";
$_SESSION["tellTruth2"] = "";
$_SESSION["perfManFunc2"] = "";
$_SESSION["folDir2"] = "";
$_SESSION["consPartTeam2"] = "";
$_SESSION["resp2"] = "";
$_SESSION["supp2"] = "";
$_SESSION["inco2"] = "";
$_SESSION["depen2"] = "";
$_SESSION["frie2"] = "";
$_SESSION["reli2"] = "";
$_SESSION["pleas2"] = "";
$_SESSION["unres2"] = "";
$_SESSION["auton2"] = "";
$_SESSION["predi2"] = "";
$_SESSION["consc2"] = "";
$_SESSION["lifelike2"] = "";
$_SESSION["goodTeam2"] = "";
$_SESSION["ledAst2"] = "";

//Save Data
$_SESSION["blockSaveData"] = "true";

//Thank you page
$_SESSION["blockThankYou"] = "true";

?>



</body>
</html> 