<?php
session_start();
 
  $thisPage = "gameLayout.php";
  if(!array_key_exists("ip",$_SESSION))
  {
    header("Location: ../index.php");
  }
  else if(strcmp($_SESSION["blockGameLayout"], "true") == 0)
  {
    header("Location:" . $_SESSION["currPage"]);
  }
  else
  {
    $_SESSION["currPage"] = $thisPage;
  } 
?>



<!DOCTYPE html>

<html lang="en">

<head>



  <title>Robot Experiment</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../styles.css">
  <link rel="stylesheet" type="text/css" href="../gameStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
#overlay 
{

  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.9);
  z-index: 2;
  cursor: pointer;
}



 #overlay1 
 {

  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.9);
  z-index: 2;
  cursor: pointer;
}

 #overlay2 
 {

  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.9);
  z-index: 2;
  cursor: pointer;
}


 #text
{

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  font-size: 90px;
  background: -webkit-linear-gradient(45deg, red, blue);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}



.chatwindow
{

  background: #D3D3D3;
  border-radius: 8px;

}

.chatwindow input
{

  border-radius: 8px;
  background: #f1f1f1;
}

.containers
{

  border: 1px;
  border-style: solid;
  border-color: #3291d4;
  overflow-y:scroll;
  overflow-x: hidden;
  background: white;
}



.diceRoll
{
  border-color:rgb(232, 223, 224);
}



.Score

{
  border-style: solid;
  border-color:#3291d4; 
  background:#3291d4;
  color:white;
}



ul
{

  list-style-type: none;
  height: 320px;
  margin:0;
  padding: 0;
  background-color: white;
  border-radius: 8px;
}

.modal-content 
{
  width: 200px;
}

  
 #ChatWindow
{
  background: white;
}

#fromUser
{  
  text-align: right; 
  line-height: 50px;
  text-align: right;
  padding-right: 30px;
  border-radius: 8px;
  background-image:url("bubbleUser.PNG");
  background-position:right;
  background-repeat:no-repeat;
  height:50px;
}



#fromRobot
{
  text-align: left;
  line-height: 50px;
  text-align: left;
  padding-left: 30px;
  border-radius: 8px;
  background-image:url("bubbleRobot.PNG");
  background-position:left;
  background-repeat:no-repeat;  
  height:50px; 
 }

 #UserPannel
 {
  background-image:url("diceBackground.png");
  height: 80px;
  padding-bottom: 10px;
 }

#DicePannel
{
   background-image:url("diceBackground.png");
   height: 100px;
   padding-top: 10px;
}


#info
{
  color:  #292F33;
  background: #FFE2AA;
  text-align: center;
  font-weight: bold; 
}

.btn
{
  background: black;
  color:white;
}

 .btn:hover

 {
  color: #C0C0C0;
 }

.diceRoll img
{
  height:50px;
  width: 50px;
}


#DicePannel img 
{
  height:50px;
  width: 50px;
}

#robotaction
{
  height: 350px;
  width: 680px;
}
</style>
  	

</head>

<body onload="onStartFunction()">
<form method="post" action="handleFormData.php" id="gameReloadLost">
<input type="hidden" name="whichForm" value="gameReloadLostForm">


</form>
<form method="post" action="handleFormData.php" id="gameCompleted">
  <input type="hidden" name="whichForm" value="gameCompletedForm">
  <input type="hidden" name="memoryRound1" id="memoryRound1">
  <input type="hidden" name="memoryRound2" id="memoryRound2">
  <input type="hidden" name="memoryRound3" id="memoryRound3">
  <input type="hidden" name="memoryRound4" id="memoryRound4">
  <input type="hidden" name="memoryRound5" id="memoryRound5">
  <input type="hidden" name="memoryRound6" id="memoryRound6">
  <input type="hidden" name="memoryRound7" id="memoryRound7">
  <input type="hidden" name="timerRound1" id="timerRound1">
  <input type="hidden" name="timerRound2" id="timerRound2">
  <input type="hidden" name="timerRound3" id="timerRound3">
  <input type="hidden" name="timerRound4" id="timerRound4">
  <input type="hidden" name="timerRound5" id="timerRound5">
  <input type="hidden" name="timerRound6" id="timerRound6">
  <input type="hidden" name="timerRound7" id="timerRound7">
</form>


<div class="container" style=" padding-top: 10px;">
	<div class="row text-center" style="padding-bottom: 10px;">
    <div id="overlay" onclick="off()">
  <div id="text">Congratulations ! <br> You win the game <br></div>
</div>



<div id="overlay1" onclick="off()">
  <div id="text">Sorry<br> <?php echo $_SESSION["robotname"]?> wins this game, better luck next time!  <br></div>
</div>

<div id="overlay2" onclick="off()">
  <div id="text">It's a draw <br></div>
</div>

				

		<div class="col-lg-7">
      <div class="col-12" ><strong>Round :<span id="roundNumber"></span></strong></div>      
		   <img src="Introduction.gif" id="robotaction" class="img-fluid" alt="Loading"> 
		</div>

			

    <div class="col-lg-5">
      <section class="Score">
	    		<div class="row text-center">
            <div class="col-12"><strong>It's <span id="Turn"></span> turn </strong></div>
		        <div class="col-12"><strong>Current score: <span id="Turn"></span></strong></div>
            <div class="col-2"></div>
            <div class="col-4">You: <span id="userScore"></span></div>  
            <div class="col-4"><?php echo $_SESSION["robotname"]?>: <span id='robotScore'></span></div>
            <div class="col-2"></div>
		      </div>
       </section>

       	<section class="containers">
          <div class="row text-center"> 
          	<div id="ChatWindow"class="col-12"><span><ul class='list' id="messages"></ul></span></div>
          </div>
        </section>

       	<section class="chatwindow">
       		<div class="row text-center">
       			<div class="col-8">            
              <input type="text" minlength="2" maxlength="2"  placeholder="Your score" class="textfield" value="" id="declared" name="declared" size="10" onkeypress="return isNumber(event)" />            
            </div>
              <div class="col-2"><button onclick="sendAndClear();DoIWannaCheck()" id="SendButton">SEND</button></div>    				
       		</div>
       	</section>	
		  </div>
	</div>

  <div id = "DicePannel" class = "row text-center">
    <div class="col-4"></div>
    <div class="col-2"><img id="bigpic" src="../img/temporary/Dice6.png" class="img-fluid" alt="Responsive image"> </div>
    <div class="col-2"><img id="bigpic2" src="../img/temporary/Dice6.png" class="img-fluid" alt="Responsive image"> </div>
    <div class="col-4"></div>
  </div>

	<div id = "UserPannel" class="row text-center">
		<div class="col-lg-2">
			<button id="myBtn" class="btn">HELP</button>
		</div>

		<div id="myModal" class="modal">
	 		<div class="modal-content">
	    		<span class="close">&times;</span>
	   			<p>
            <b>HIGHEST</b><br>
            21<br>
            31<br>
            66,55,44,33,22,11<br>
            65,64,63,62,61<br>
            54,53,52,51<br>
            43,42,41<br>
            32<br>
            <b>LOWEST</b><br>
          </p>
	  		</div>
		</div>

		<div class="col-lg-5">
		</div>			

		<div class="col-lg-2">
			<button class="btn" onclick="myStartFunction();TimeFunction();StopTimer()" id="RollingButton" display="none">ROLL</button>
      <button class="btn" onclick="trust21();StopTimer();" id="TrustButton" display="none">TRUST</button>
		</div>

		<div class="col-lg-1">
		</div>

		<div class="col-lg-2">
			<button  onclick="robotCheck();StopTimer();" id="CheckButton" class="btn" display="none">CHECK</button>
		</div>
		

		</div>
	</div>

<script type="text/javascript">

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() 
{
  modal.style.display = "block";
}

modal.onclick = function()
{
  modal.style.display = "none";
}

window.onclick = function(event) 
{

  if (event.target == modal) 
  {

    modal.style.display = "none";

  }

}

</script>

<script type="text/javascript">

var myVar; 
var myVar2;
var startTime;
var turnCheck = 0;
var increment = 0;
      var round = 0;
      var memory = [[""],[""],[""],[""],[""],[""],[""]];
      var chance = 0;
      var  userChecksRobot = 0;
      var turnIncrement = 0;
      var diceIncrement = 0;
      var canIcheck = 0;
      var doIStart=0;
      var letHimSit = 0;
    

      if("unsuspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>')
      {
        var whichCombinationFirstDice_array = [[3,4,3] , [2,5,3] ,[3,4],[3],[4,6,3],[4,6,4],[4,6]];
        var whichCombinationSecondDice_array = [[2,2,1] , [2,4,1] , [3,1],[2],[2,4,2],[1,5,3],[1,5]];

        var whatUserShouldRoll = [[32,42,31],[22,54,31],[33,41],[32],[42,64,32],[41,65,43],[41,65]];
        var whatRobotRolls = [[41,65],[53,41,55],[55,66,43],[21],[53,51,43],[52,43,11],[55]];
        var whatRobotDeclares =[[41,65],[53,41,55],[55,66,43],[21],[53,51,43],[52,43,11],[55]];
        var threshold_array =[65,33,44,21,65,11,55];
      }
      else //CHANGE HERE IF THE SUSCPICIOUS BEHAVIOUR GROUP NEEDS A SPECIAL ROUND
      {
        var whichCombinationFirstDice_array = [[3,4,3] , [2,5,3] ,[3,4],[3],[4,6,3],[4,6,4],[4,6]];
        var whichCombinationSecondDice_array = [[2,2,1] , [2,4,1] , [3,1],[2],[2,4,2],[1,5,3],[1,5]];

        var whatUserShouldRoll = [[32,42,31],[22,54,31],[33,41],[32],[42,64,32],[41,65,43],[41,65]];
        var whatRobotRolls = [[41,65],[53,41,55],[55,66,43],[21],[53,51,43],[52,43,11],[21]];
        var whatRobotDeclares =[[41,65],[53,41,55],[55,66,43],[21],[53,51,43],[52,43,11],[21]];
        var threshold_array =[65,33,66,21,65,11,55];
      }


      var currentDeclaration = 0;
      var numberofRolls = 1;
      var setEmpty = true;
      var buttons = true;
      var userPoints = 0;
      var robotPoints = 0;
      var highestScore = 32;
      var whereXIsInRanking = 0;
      var alreadyPlaying = 0;
      var alreadyWaiting = 0;
      var playCheck  = 0;
      var doesTheRobotCheck = 0;
      var whereIsHeighestScoreInRanking = 0;
      var whereIsRobotsScoreInRanking = 0;
      var willICheck = 0 ;
      var testArray = [1,0,1,0,1,0,1,0];
      var rankingOrder_array = [32,41,42,43,51,52,53,54,61,62,63,64,65,11,22,33,44,55,66,31,21];
      var robotStarts = 0;
      var locked = false;
      var alreadyReaviling=0;
      var doesItShow = 0;
      var performSuspicous = 0;
      var otherMovements = 0;
      var didIsend = 1;
      var timeStart;
      var timeDiff;
      var timer =  [[""],[""],[""],[""],[""],[""],[""]];


      function onStartFunction ()
      {

      	setTimeout("HeSits()",4000);
      	setTimeout("finishSitting()",6000);
      	var checkButton = document.getElementById('CheckButton');
      	var rollButton = document.getElementById("RollingButton");

      	rollButton.style.display = "none"
      	checkButton.style.display = "none"

        turnCheckFunction();

        setInterval("checkButtonsToDisable()", 100); 
        var chatButton = document.getElementById('SendButton');
        var valueUserDeclared = document.getElementById("declared").value;         

        if(valueUserDeclared.length < 2 &&  turnCheck == 0 )
         {
            chatButton.disabled = true;
         }      
        
      }

      function HeSits()
      {      	
        var robotRoll = "../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/SitDown.gif";   
        document.getElementById('robotaction').src =robotRoll.replace();
        document.getElementById('robotaction').style.display='block';      	
      }


      function finishSitting()
      {


      	var checkButton = document.getElementById('CheckButton');
      	var rollButton = document.getElementById("RollingButton");
      	rollButton.style.display = "block"
      	checkButton.style.display = "block"   
        otherMovements = 1;
      }     
     

      function turnCheckFunction()  
      {                 

        if(turnCheck ==1)
        {

          setTimeout("RobotsTurn()", 6000);

        } 

      }

      function disableButtons()
      {

        var checkButton = document.getElementById('CheckButton');
        var chatButton = document.getElementById('SendButton');
        var rollButton = document.getElementById("RollingButton");
        chatButton.disabled = true;
        checkButton.disabled = true;
        rollButton.disabled = true;
      }



      function redirect()

      {

        document.getElementById("gameCompleted").submit(); 
      }



      function displayWinner()
      {

      	if(doesItShow == 0)
        {

          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "info"); 
          NewMessage.innerHTML = "Congratulations ! ";
          var NewMessage1 = document.createElement("Li");
          NewMessage1.setAttribute("id", "info"); 
          NewMessage1.innerHTML = " You win the game ";
          messagesFromRobot.appendChild(NewMessage);
          messagesFromRobot.appendChild(NewMessage1);

   		 }

      doesItShow = 1;

      }



      function displayLoser()
      {

      	if(doesItShow == 0)
      	{
      		var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "info"); 
          NewMessage.innerHTML = "Sorry ! ";
          var NewMessage1 = document.createElement("Li");
          NewMessage1.setAttribute("id", "info"); 
          NewMessage1.innerHTML = "<?php echo $_SESSION['robotname']?> wins the game, better luck next time ";
          messagesFromRobot.appendChild(NewMessage);
          messagesFromRobot.appendChild(NewMessage1);

      	}

        doesItShow = 1;
      }


      function displayDraw()
      {

      	if(doesItShow == 0)
      	{

      	  var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "info"); 
          NewMessage.innerHTML = "It's a draw !  ";    
          messagesFromRobot.appendChild(NewMessage);
      	}

        doesItShow = 1;     

       }


window.onbeforeunload = function() 
{ 

  alert("You wil lose the game");
  window.setTimeout(function () 
  { 
    if(turnCheck != 2)
    {
       document.getElementById("gameReloadLost").submit();
    }
      // window.location.href = 'nameRobot.php';

  }, 0); 

  window.onbeforeunload = null; // necessary to prevent infinite loop, that kills your browser 

}



function lookUp()
{

  var robotRoll = "../img/video/waving/lookdowntest.gif";
  document.getElementById('robotaction').src =robotRoll.replace();
  document.getElementById('robotaction').style.display='block';
  document.getElementById("Help3").innerHTML = "I am here 6";
  var stanby = "../img/video/waving/sittingtest.gif";
  document.getElementById('robotaction').src =standby.replace();
  document.getElementById('robotaction').style.display='block';
}

function diceReveal()
{
	var whichOne= Math.random();
	if(testArray[round] == 0)
	{
		if(whichOne<0.5)
		{
		  var showDices ="../dice/<?php echo $_SESSION['primaryColor'];?>/" + whatRobotRolls[round][turnIncrement] +"_0.jpg";
		}
		else 
		{
			 var showDices ="../dice/<?php echo $_SESSION['primaryColor'];?>/" + whatRobotRolls[round][turnIncrement] +"_1.jpg";
		}
	}

	else 
	{
		if(whichOne<0.5)
		{
			var showDices ="../dice/<?php echo $_SESSION['primaryColor'];?>/" + whatRobotRolls[round][turnIncrement-1] +"_0.jpg";

		}
		else
		{
			var showDices ="../dice/<?php echo $_SESSION['primaryColor'];?>/" + whatRobotRolls[round][turnIncrement-1] +"_1.jpg";

		}
	}

  document.getElementById('robotaction').src =showDices.replace();
  document.getElementById('robotaction').style.display='block';
  document.getElementById("Help3").innerHTML = "I am here 5";

}

function startTimer()
{
   timeStart = new Date();
}

function StopTimer()
{

  if(testArray[round]==1 && turnIncrement == 0)
  {

    document.getElementById('Help1').innerHTML="First round";
  }

 else 
 {
    timeEnd = new Date();
    var timeDiff = timeEnd - timeStart;
    timer[round] = timer[round] + timeDiff +",";
 }
    
}


function standByFor1Second()
{
  
  var stanby = "../img/video/waving/sittingtest.gif";
  document.getElementById('robotaction').src =standby.replace();
  document.getElementById('robotaction').style.display='block';
  document.getElementById("Help3").innerHTML = "I am here 7";
}



function trust21()
{

  robotPoints++;
  var checkButton = document.getElementById('CheckButton');
  checkButton.style.display = "none";
  var  messagesFromRobot =  document.getElementById("messages");
  var NewMessage = document.createElement("Li");  
  NewMessage.setAttribute("id", "info"); 
  NewMessage.innerHTML = " You trust <?php echo $_SESSION['robotname']?> you lose this round ";
  messagesFromRobot.appendChild(NewMessage);
  memory[round] = memory[round] +" User Trusted";
  locked = true;
  disableButtons();
  setTimeout("unlock()",3500); 
  setTimeout("endRound()",3500);

}

function checkButtonsToDisable()
{  
  document.getElementById("memoryRound1").value = memory[0];
  document.getElementById("memoryRound2").value = memory[1];
  document.getElementById("memoryRound3").value = memory[2];
  document.getElementById("memoryRound4").value = memory[3];
  document.getElementById("memoryRound5").value = memory[4];
  document.getElementById("memoryRound6").value = memory[5];
  document.getElementById("memoryRound7").value = memory[6];
  document.getElementById("timerRound1").value = timer[0];
  document.getElementById("timerRound2").value = timer[1];
  document.getElementById("timerRound3").value = timer[2];
  document.getElementById("timerRound4").value = timer[3];
  document.getElementById("timerRound5").value = timer[4];
  document.getElementById("timerRound6").value = timer[5];
  document.getElementById("timerRound7").value = timer[6];
  var checkButton = document.getElementById('CheckButton');
  var chatButton = document.getElementById('SendButton');
  var rollButton = document.getElementById("RollingButton");
  var valueUserDeclared = document.getElementById("declared").value;
  var trustButton = document.getElementById("TrustButton");
  document.getElementById("Help2").innerHTML = highestScore;     
  document.getElementById("roundNumber").innerHTML = round+1;
  document.getElementById("Help5").innerHTML = turnCheck;
  document.getElementById("userScore").innerHTML = userPoints;
  document.getElementById("robotScore").innerHTML = robotPoints;
  document.getElementById('Help1').innerHTML=timer[0] + "round1" + timer[1] + "round2" + timer[2] + "round3" + timer[3] + "round4" + timer[4];
  document.getElementById("Help2").innerHTML = "rounds" + round;
  trustButton.style.display = "none";

  if(highestScore == 21 && turnCheck ==0)
  {

    var rollButton = document.getElementById("RollingButton");

    if(locked  == true)
    {
      trustButton.disabled = true;
    }
          
    if(turnCheck == 0)
    {
      document.getElementById("Help5").innerHTML = "Highest score is 21 and user decides";
      rollButton.style.display = "none"
      trustButton.style.display = "block"

    }


    if(turnCheck == 1)
    {
      document.getElementById("Help5").innerHTML = "Highest score is 21 and robot decides";
    }



   }

   if(round == 7)
   {

      if(userPoints > robotPoints && doesItShow == 0)

      {

           setTimeout("displayWinner()",3000);
           setTimeout("redirect()",5000);
           turnCheck = 2;
           userChecksRobot = 0;

      }

      if( userPoints == robotPoints && doesItShow ==0)
      {
        	setTimeout("displayDraw()",3000);
          setTimeout("redirect()",5000);
          turnCheck = 2;
      }



        if(robotPoints > userPoints && doesItShow ==0)

        {

          setTimeout("displayLoser()",3000);
          setTimeout("redirect()",5000);
          turnCheck = 2;

        }

    }

    if (turnCheck ==1 && alreadyPlaying == 0  && playCheck == 0 && userChecksRobot == 0 && locked == false)
    {

      if("unsuspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>')
      {
          var robotRoll ="../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/Rolling.gif";
      }

      else if("suspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>'&& round==6 )
      {
          var robotRoll ="../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/Cheating.gif";
          performSuspicous = 1;
      }

      else if("suspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>'&& round==2 )
      {
          var robotRoll ="../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/Cheating.gif";
          performSuspicous = 1;
      }

      else 
      {
          var robotRoll ="../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/Rolling.gif";
      }
          

      document.getElementById('robotaction').src =robotRoll.replace();
      document.getElementById('robotaction').style.display='block';
      document.getElementById("Help3").innerHTML = "I am here 0";
      document.getElementById("Turn").innerHTML = "<?php echo $_SESSION['robotname']?>\'s";       

      alreadyPlaying = 1;
      alreadyWaiting=0;
      chatButton.disabled = true;
      rollButton.disabled = true;
      alreadyReaviling=0;

    }

    if (turnCheck ==1 && alreadyPlaying == 0  && playCheck == 1 && userChecksRobot ==0 && locked == false && otherMovements == 1)
    {

      var robotRoll = "../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/SitStandby.gif";
      document.getElementById('robotaction').src =robotRoll.replace();
      document.getElementById('robotaction').style.display='block';
      document.getElementById("Help3").innerHTML = "I am here 1"; 
      alreadyPlaying = 1;
      alreadyWaiting=0;

    }

    if(turnCheck == 0 && alreadyWaiting==0 && userChecksRobot == 0 && otherMovements ==1)
    {

      var robotRoll = "../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/SitStandby.gif";   
      document.getElementById('robotaction').src =robotRoll.replace();
      document.getElementById('robotaction').style.display='block';
      document.getElementById("Help3").innerHTML = "I am here 2";
      alreadyPlaying = 0;
      alreadyWaiting = 1;
      alreadyReaviling=0;

    }



    if(userChecksRobot == 1 && alreadyReaviling ==0)

    {

      var robotRoll =  "../GameGifs/<?php echo $_SESSION['primaryColor'];echo $_SESSION['secondaryColor'];echo $_SESSION['eyeColor'];?>/LookDown.gif";
      document.getElementById('robotaction').src =robotRoll.replace();
      document.getElementById('robotaction').style.display='block';
      setTimeout("diceReveal()",800);         
      setTimeout("standByFor1Second()",3800); 
      document.getElementById("Help3").innerHTML = "I am here 3";
      alreadyWaiting = 0;
      alreadyPlaying = 0;
      playCheck = 0;
      alreadyReaviling = 1;

    }



    if (turnCheck==0 && doIStart == 1 || robotStarts == 0 && locked == false )
    {

      checkButton.disabled = true;
      if( numberofRolls ==1 && didIsend == 0 || doesTheRobotCheck == 1 || locked == true)
      {
          chatButton.disabled = true;
      }

      if( numberofRolls == 0 && didIsend == 1)
      {

        chatButton.disabled = false;
      }

      if (numberofRolls == 1)
      {

        rollButton.disabled = false
      }



      if (numberofRolls == 0)
      {
          rollButton.disabled = true;
      }

    }

    if (buttons == true)
    { 

      if(valueUserDeclared.length <2 && numberofRolls ==1 && locked == false )
      {

          chatButton.disabled = true;
      }

      if(turnCheck == 1)

      {
          checkButton.disabled = true;
          chatButton.disabled = true;        
          document.getElementById("Turn").innerHTML = "<?php echo $_SESSION['robotname']?>\'s";
      }


      if ( turnCheck == 0 && locked == false  )
      {

          checkButton.disabled = false;     
          rollButton.disabled = false;
          document.getElementById("Turn").innerHTML = "Your";

      }      

      if (valueUserDeclared.length == 2 && turnCheck == 0 && numberofRolls == 0 && locked == false )
      {

        chatButton.disabled = false;

      }



      if(turnCheck == 1 || numberofRolls ==0 && locked == false)
      {

          rollButton.disabled=true;
          checkButton.disabled=true;

      }



      if(canIcheck == 0)
      {

        checkButton.disabled = true;

      }

      if(canIcheck == 1)
      {

         checkButton.disabled = false;

      }

    }

}

function TimeFunction()
{

  if(turnCheck == 0)
  {
    setTimeout("myStopFunction()", 1000);
    if(whichCombinationFirstDice_array[round][diceIncrement] == 1)
    {
      setTimeout("display11()", 1100);
    }

    if(whichCombinationFirstDice_array[round][diceIncrement] == 2)
    {
      setTimeout("display12()", 1100);
    }

    if(whichCombinationFirstDice_array[round][diceIncrement] == 3)
    {
      setTimeout("display13()", 1100);
    }

    if(whichCombinationFirstDice_array[round][diceIncrement] == 4)
    {
      setTimeout("display14()", 1100);
    }

    if(whichCombinationFirstDice_array[round][diceIncrement] == 5)
    {
      setTimeout("display15()", 1100);
    }

    if(whichCombinationFirstDice_array[round][diceIncrement] == 6)
    {
      setTimeout("display16()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 1)
    {
      setTimeout("display21()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 2)
    {
      setTimeout("display22()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 3)
    {
      setTimeout("display23()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 4)
    {
      setTimeout("display24()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 5)
    {
      setTimeout("display25()", 1100);
    }

    if(whichCombinationSecondDice_array[round][diceIncrement] == 6)
    {
      setTimeout("display26()", 1100);
    }
  }
}


function myStopFunction() 
{

  clearInterval(myVar);
  clearInterval(myVar2);

}

    	 

function myStartFunction() 
{

  if(turnCheck == 0 && numberofRolls == 1)
  {

    myVar = setInterval("diceRoll()", 100); 
    myVar2 = setInterval("diceRoll2()", 100); 
    numberofRolls = 0;
    canIcheck = 0;
    didIsend=1;

  }


}

function display11 ()
{
  var diceNumber1 = "../img/temporary/Dice1.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}

function display12 ()
{
  var diceNumber1 = "../img/temporary/Dice2.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}

function display13 ()
{
  var diceNumber1 = "../img/temporary/Dice3.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}


function display14 ()
{
  var diceNumber1 = "../img/temporary/Dice4.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}

function display15 ()
{
  var diceNumber1 = "../img/temporary/Dice5.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}


function display16 ()
{
  var diceNumber1 = "../img/temporary/Dice6.png";
  document.getElementById('bigpic').src =diceNumber1.replace();
  document.getElementById('bigpic').style.display='block';
}

function display21 ()

{
  var diceNumber2 = "../img/temporary/Dice1.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function display22 ()
{
  var diceNumber2 = "../img/temporary/Dice2.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function display23 ()
{
  var diceNumber2 = "../img/temporary/Dice3.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function display24 ()
{
  var diceNumber2 = "../img/temporary/Dice4.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function display25 ()
{
  var diceNumber2 = "../img/temporary/Dice5.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function display26 ()

{
  var diceNumber2 = "../img/temporary/Dice6.png";
  document.getElementById('bigpic2').src =diceNumber2.replace();
  document.getElementById('bigpic2').style.display='block';
}

function diceRoll()
{
  var random_images_array = ["../img/temporary/Dice1.png", "../img/temporary/Dice2.png","../img/temporary/Dice3.png","../img/temporary/Dice4.png","../img/temporary/Dice5.png","../img/temporary/Dice6.png"];
  var num = Math.floor( Math.random() * random_images_array.length );
  var img = random_images_array[ num ];
  document.getElementById('bigpic').src =img.replace();
  document.getElementById('bigpic').style.display='block';
}

    	


function diceRoll2()
{
  var random_images_array = ["../img/temporary/Dice1.png", "../img/temporary/Dice2.png","../img/temporary/Dice3.png","../img/temporary/Dice4.png","../img/temporary/Dice5.png","../img/temporary/Dice6.png"];
  var num = Math.floor( Math.random() * random_images_array.length );
  var img = random_images_array[ num ];
  document.getElementById('bigpic2').src =img.replace();
  document.getElementById('bigpic2').style.display='block';
}


function isNumber(evt)
{

  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 49 || charCode > 54)) 
  {
    return false;
  }
  return true;

}





function DoIWannaCheck()
{
  var probability  = Math.random();
  var whereIsThreshold =0;
  var whereIsCurrentDeclaration1;
  chance = chance + diceIncrement*0.05;

  for (j = 0; j <= rankingOrder_array.length;j++)
  {
    if(currentDeclaration==rankingOrder_array[j])
    {
      whereIsCurrentDeclaration1 = j;
    }
  }


  for (j = 0; j <= rankingOrder_array.length;j++)
  {
    if(threshold_array[round]==rankingOrder_array[j])
    {
      whereIsThreshold = j;
    }

  }

  if (whereIsThreshold<=whereIsCurrentDeclaration1)
  {
    willICheck = 1;
    playCheck= 1;
  }

  else 
  {
    willICheck = 0;
    playCheck = 0;
  }

}



function RobotsTurn()
{

  buttons=true;  
  var probability  = Math.random(); 
  var whereIsCurrentDeclaration = 0; 
  var whereIsRoll = 0; 
  for (i = 0; i <= rankingOrder_array.length;i++)
  {
   if(currentDeclaration==rankingOrder_array[i])
    {

      whereIsCurrentDeclaration = i;

    }
  }

  for (i = 0; i <= rankingOrder_array.length;i++)
  {
    if(whatUserShouldRoll[round][turnIncrement]==rankingOrder_array[i])
    {
      whereIsRoll = i;
    }

  }


  if(highestScore == 21)

  {
    disableButtons(); 
    buttons=false;

    if(whatUserShouldRoll[round][turnIncrement]!=21)
    {

        var  messagesFromRobot =  document.getElementById("messages");
        var NewMessage = document.createElement("Li");  
        NewMessage.setAttribute("id", "info"); 
        NewMessage.innerHTML = "<?php echo $_SESSION['robotname']?> wants to check ";
        var NewMessage1 = document.createElement("Li");
        NewMessage1.setAttribute("id", "info"); 
        NewMessage1.innerHTML = " You said " + currentDeclaration + " but you rolled " + whatUserShouldRoll[round][turnIncrement] + " you lose this round ";
        messagesFromRobot.appendChild(NewMessage);
        messagesFromRobot.appendChild(NewMessage1);
        robotPoints = robotPoints +2;
    }

    if(whatUserShouldRoll[round][turnIncrement]==21)
    {

        var  messagesFromRobot =  document.getElementById("messages");
        var NewMessage = document.createElement("Li");  
        NewMessage.setAttribute("id", "info");         NewMessage.innerHTML = "<?php echo $_SESSION['robotname']?> wants to check ";

        var NewMessage1 = document.createElement("Li");
        NewMessage1.setAttribute("id", "info"); 
        NewMessage1.innerHTML = " You said " + currentDeclaration + " and you rolled " + whatUserShouldRoll[round][turnIncrement] + " you win this round ";
        messagesFromRobot.appendChild(NewMessage);
        messagesFromRobot.appendChild(NewMessage1);
        userPoints = userPoints +2;
    }

    setTimeout("endRound()",3000);
  }   
  {

  if( robotStarts == 1 )
  {
        document.getElementById("Turn").innerHTML = "<?php echo $_SESSION['robotname']?>\'s";
        var robotsRoll = whatRobotDeclares[round][turnIncrement];
        var  messagesFromRobot =  document.getElementById("messages");
        var NewMessage = document.createElement("Li");
        NewMessage.setAttribute("id", "fromRobot");        
        NewMessage.innerHTML =  robotsRoll;
        messagesFromRobot.appendChild(NewMessage); 
        var audio = document.getElementById("audio");
        audio.play();
        memory[round] = robotsRoll + ",";    
        turnCheck = 0;              
        increment ++;
        numberofRolls = 1;
        highestScore = robotsRoll;
        robotStarts = 0;
        turnIncrement--;
        didIsend =1;    
  }

  if(whatUserShouldRoll[round][turnIncrement]!=currentDeclaration && setEmpty == false && whereIsRoll < whereIsCurrentDeclaration && highestScore!=21)
  {

    if (willICheck == 1)
    {

          buttons=false;
          disableButtons();        
          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "info"); 
          NewMessage.innerHTML = "<?php echo $_SESSION['robotname']?> wants to check ";
          var NewMessage1 = document.createElement("Li");
          NewMessage1.setAttribute("id", "info"); 
          NewMessage1.innerHTML = " You said " + currentDeclaration + " but you rolled " + whatUserShouldRoll[round][turnIncrement] + " you lose this round ";
          messagesFromRobot.appendChild(NewMessage);
          messagesFromRobot.appendChild(NewMessage1);
          robotPoints++;
          locked = true;
          setTimeout("unlock()",3000);
          setTimeout("endRound()",3000);
          doesTheRobotCheck = 1;
      }    
      else 
      {
        var robotsRoll = whatRobotDeclares[round][turnIncrement];
        for (i = 0; i <= rankingOrder_array.length;i++)
        {
          if(robotsRoll==rankingOrder_array[i])
          {
            whereIsRobotsScoreInRanking = i;
          }

        }

        for (j = 0; j <= rankingOrder_array.length;j++)
        {
          if(highestScore==rankingOrder_array[j])

          {
            whereIsHeighestScoreInRanking = j;
          }

        }

    
        if(whereIsHeighestScoreInRanking > whereIsRobotsScoreInRanking)
        {

          var howMuchToLastElement = (rankingOrder_array.length-1) - whereIsHeighestScoreInRanking;
          if(howMuchToLastElement < 1)
          {
            Lie = rankingOrder_array[whereIsHeighestScoreInRanking];
          }

          else if(howMuchToLastElement >= 1)
          {

            var howMuchLie = Math.floor(Math.random() * howMuchToLastElement) + 1;
            Lie = rankingOrder_array[whereIsHeighestScoreInRanking+howMuchLie];
          }       

          whatRobotDeclares[round][turnIncrement] = Lie;         
          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "fromRobot");       
          NewMessage.innerHTML = Lie;
          messagesFromRobot.appendChild(NewMessage);
          var audio = document.getElementById("audio");
          audio.play();
          memory[round] =memory[round] +Lie + ",";
          highestScore = Lie;
          turnCheck = 0;                     
          increment ++;
          numberofRolls = 1;       
         }

         if(whereIsHeighestScoreInRanking <= whereIsRobotsScoreInRanking)
         {              
            var  messagesFromRobot =  document.getElementById("messages");
            var NewMessage = document.createElement("Li");  
            NewMessage.setAttribute("id", "fromRobot");         
            NewMessage.innerHTML = robotsRoll;
            messagesFromRobot.appendChild(NewMessage);
            var audio = document.getElementById("audio");
            audio.play();
            highestScore = robotsRoll;
            memory[round] =memory[round] + robotsRoll + ",";
            turnCheck = 0;               
            increment ++;
            numberofRolls = 1;
          }
         }
        } 

      if(whereIsRoll >= whereIsCurrentDeclaration && setEmpty == false && highestScore!=21)
      {
        if (willICheck == 1 )       
        {

          buttons=false;
          disableButtons();         
          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");        
          NewMessage.setAttribute("id", "info"); 
          NewMessage.innerHTML = "<?php echo $_SESSION['robotname']?> wants to check ";
          var NewMessage1 = document.createElement("Li");
          NewMessage1.setAttribute("id", "info"); 
          NewMessage1.innerHTML = " You said " + currentDeclaration + " and you rolled " + whatUserShouldRoll[round][turnIncrement] + " you win this round";
          messagesFromRobot.appendChild(NewMessage);
          messagesFromRobot.appendChild(NewMessage1);
          userPoints++;
          locked = true;
          setTimeout("unlock()",3000);
          setTimeout("endRound()",3000);
          doesTheRobotCheck = 1;

        }



        else
        {

          var robotsRoll = whatRobotDeclares[round][turnIncrement];
          for (i = 0; i <= rankingOrder_array.length;i++)
          {

            if(robotsRoll==rankingOrder_array[i])
            {
              whereIsRobotsScoreInRanking = i;
            }

          }

          for (j = 0; j <= rankingOrder_array.length;j++)

          {

            if(highestScore==rankingOrder_array[j])
            {

              whereIsHeighestScoreInRanking = j;
            }

          }

        if(whereIsHeighestScoreInRanking > whereIsRobotsScoreInRanking)

         {

          var howMuchToLastElement = (rankingOrder_array.length-1) - whereIsHeighestScoreInRanking;
          if(howMuchToLastElement < 1)

          {

            Lie = rankingOrder_array[whereIsHeighestScoreInRanking];

          }

          else if(howMuchToLastElement >= 1)

          {

            var howMuchLie = Math.floor(Math.random() * howMuchToLastElement) + 1;
            Lie = rankingOrder_array[whereIsHeighestScoreInRanking+howMuchLie];

          }       

            
          whatRobotDeclares[round][turnIncrement] = Lie;
          document.getElementById('Help1').innerHTML='I have to lie im sorry ' + Lie + " But I should tell you " + robotsRoll;
          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li");  
          NewMessage.setAttribute("id", "fromRobot");         
          NewMessage.innerHTML = Lie;
          messagesFromRobot.appendChild(NewMessage);
          var audio = document.getElementById("audio");
          audio.play();
          memory[round] = memory[round] +  Lie + ",";
          highestScore = Lie;
          turnCheck = 0;                     
          increment ++;
          numberofRolls = 1
         
        }

        if(whereIsHeighestScoreInRanking <= whereIsRobotsScoreInRanking)
        {

          var  messagesFromRobot =  document.getElementById("messages");
          var NewMessage = document.createElement("Li"); 
          NewMessage.setAttribute("id", "fromRobot");      
          NewMessage.innerHTML = robotsRoll;
          messagesFromRobot.appendChild(NewMessage);
          var audio = document.getElementById("audio");
          audio.play();
          memory[round] = memory[round] + robotsRoll + ",";
          highestScore = robotsRoll;
          turnCheck = 0;               
          increment ++;
          numberofRolls = 1;
        }
      }           
    }
  }

  turnIncrement++;
  canIcheck = 1;
  didIsend = 1;
  startTimer();
  if(highestScore == 21)
  {
      
    doesTheRobotCheck = 1;
  }

  else 
  {
    turnCheck = 0;

  }


}

function disableButtonsOnCheck()
{

  var checkButton = document.getElementById('CheckButton');
  var chatButton = document.getElementById('SendButton');
  var rollButton = document.getElementById("RollingButton");
  checkButton.disabled = true;
  rollButton.disabled = true;
  chatButton.disabled = true;
   enable =false;
  setTimeout("enableButtonAfterCheck()" , 7000);
}


function enableButtonAfterCheck()
{
  enable = true;
}

function sendAndClear()
{

  setEmpty = false;
  const button = document.querySelector('SendButton');
  var x = document.getElementById("declared").value;
  var isFound = 0;
  var cannotPass = 0 ;
  var already = 0;
  for (i = 0; i <= rankingOrder_array.length;i++)
  {
    if(x==rankingOrder_array[i])
    {
      whereXIsInRanking = i;
      isFound = 1;
    }
   }
   for (j = 0; j <= rankingOrder_array.length;j++)
  {

    if(highestScore==rankingOrder_array[j])
    {
      whereIsHeighestScoreInRanking = j;
    }
  }

  if  (isFound ==0)
  {

    alert("Please select a valid number")
    cannotPass = 1;
    already = 1 
  }

  if ( whereXIsInRanking < whereIsHeighestScoreInRanking && already!=1)
  {
    alert("Please select a number higher or equal than the highest score ")
    cannotPass = 1;
    already = 1;
  }

  if(cannotPass!=1)
  {

    var  messagesFromUser =  document.getElementById("messages");
    var NewMessage = document.createElement("Li");	
    NewMessage.setAttribute("id", "fromUser");	
    NewMessage.innerHTML = x;
    messagesFromUser.appendChild(NewMessage);
    var audio = document.getElementById("audio");
    audio.play();
    memory[round] = memory[round] + x + ",";
    document.getElementById("declared").value = ""; 
    turnCheck = 1;  
    diceIncrement++;
    if("suspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>'&& round==6 )
    {
      setTimeout("RobotsTurn()",8500);   
    }

    else if("suspicious" == '<?php echo $_SESSION["suspiciousGroup"]?>'&& round==2 )
    {
      setTimeout("RobotsTurn()",8500);   
    }

    else
      setTimeout("RobotsTurn()",5000);

    currentDeclaration = x;
    highestScore = x;
    isFound = 0;
    doIStart = 0;
    didIsend = 0;

  }
}

 function endRound()
{
  var ul = document.getElementById('messages');     
  if(round < 7)
  {
    if (ul)
    { 
      while (ul.firstChild)
      { 
        ul.removeChild(ul.firstChild); 
      }
    }

    setEmpty = true;
  }
   
  increment = 0;
  diceIncrement = 0;
  turnIncrement = 0;
  round ++;

  if(testArray[round] == 1)
  {

    turnCheck = 0;         
    document.getElementById("Turn").innerHTML = "Your";
    doIStart =1;
  }

  if(testArray[round] == 0 )
  {

    turnCheck = 1;
    robotStarts = 1;
    document.getElementById("Turn").innerHTML = "<?php echo $_SESSION['robotname']?>\'s";
  }

  turnCheckFunction();
  highestScore = 32;
  whereIsHeighestScoreInRanking = 0;
  whereXIsInRanking =0;
  alreadyPlaying=0;
  playCheck=0;  
  userChecksRobot = 0; 
  canIcheck = 0;
  chance = 0;
  numberofRolls = 1;
  didIsend = 0;
  var rollButton = document.getElementById("RollingButton");
  var trustButton = document.getElementById("TrustButton");
  var checkButton = document.getElementById('CheckButton');
  checkButton.style.display = "block"
  rollButton.style.display = "block"
  trustButton.disabled = false;
  trustButton.style.display = "none"
}


function robotCheck()
{

  disableButtons();
  var trustButton = document.getElementById("TrustButton");
  trustButton.disabled = true;
  buttons=false;
  userChecksRobot = 1;
  var  messagesFromUser =  document.getElementById("messages");
  var NewMessage = document.createElement("Li");  
  NewMessage.setAttribute("id", "info");  
  NewMessage.innerHTML = "You decide to check <?php echo $_SESSION['robotname']?>\'s roll";
  messagesFromUser.appendChild(NewMessage);
  if(testArray[round] == 0 && turnIncrement == 0)
  {
    if(whatRobotRolls[round][turnIncrement] == whatRobotDeclares[round][turnIncrement])

      {
        var TrustMessage = document.createElement("Li");
        TrustMessage.setAttribute("id", "info");  
        TrustMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement] + " and declared " + whatRobotDeclares[round][turnIncrement] + " you lose this round";
        messagesFromUser.appendChild(TrustMessage);
        if(highestScore == 21)
        {
          robotPoints = robotPoints +2;
        }
        else 
        {
          robotPoints++;
        }
      }

      if(whatRobotRolls[round][turnIncrement] != whatRobotDeclares[round][turnIncrement])
      {

        var LieMessage = document.createElement("Li");
        LieMessage.setAttribute("id", "info"); 
        LieMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement] + " but declared " + whatRobotDeclares[round][turnIncrement] + " you win this round";
        messagesFromUser.appendChild(LieMessage);      
        if(highestScore == 21)
        {
          userPoints = userPoints +2;
        }
        else 
        {
          userPoints++;
        }

      } 
  }

  if(turnIncrement > 0 && testArray[round] ==0)
  {
    if(whatRobotRolls[round][turnIncrement] == whatRobotDeclares[round][turnIncrement-1])
    {
      var TrustMessage = document.createElement("Li");
      TrustMessage.setAttribute("id", "info");  
      TrustMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement] + " and declared " + whatRobotDeclares[round][turnIncrement-1] + " you lose this round";
      messagesFromUser.appendChild(TrustMessage);
      if(highestScore == 21)
      {
          robotPoints = robotPoints +2;
      }

      else 
      {
          robotPoints++;
      }
    }

    if(whatRobotRolls[round][turnIncrement] != whatRobotDeclares[round][turnIncrement-1])

    {

      var LieMessage = document.createElement("Li");
      LieMessage.setAttribute("id", "info"); 
      LieMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement] + " but declared " + whatRobotDeclares[round][turnIncrement-1] + " you win this round";
      messagesFromUser.appendChild(LieMessage);
      if(highestScore == 21)
      {
        userPoints = userPoints +2;
      }
      else 
      {
        userPoints++;
      }
    } 
  }
  else if (testArray[round] == 1)
  {
  if(whatRobotRolls[round][turnIncrement-1] == whatRobotDeclares[round][turnIncrement-1])
  {

    var TrustMessage = document.createElement("Li");
    TrustMessage.setAttribute("id", "info");  
    TrustMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement-1] + " and declared " + whatRobotDeclares[round][turnIncrement-1] + " you lose this round";
    messagesFromUser.appendChild(TrustMessage);
    if(highestScore == 21)
    {
      robotPoints = robotPoints +2;
    }
    else 
    {   
      robotPoints++;
    }
  }

if(whatRobotRolls[round][turnIncrement-1] != whatRobotDeclares[round][turnIncrement-1])
  {

    var LieMessage = document.createElement("Li");
    LieMessage.setAttribute("id", "info"); 
    LieMessage.innerHTML = "<?php echo $_SESSION['robotname']?> rolled " + whatRobotRolls[round][turnIncrement-1] + " but declared " + whatRobotDeclares[round][turnIncrement-1] + " you win this round";
    messagesFromUser.appendChild(LieMessage);
    if(highestScore == 21)
    {
      userPoints = userPoints +2;
    }
    else 
    {
       userPoints++;

    }
  }  
 }
locked = true;
setTimeout("unlock()",6000);
setTimeout("endRound()" , 6000);
}

function unlock()
{
  locked = false;
}

</script>
<div class="container.fluid">
  <div class="row text-center" style="margin-top: 20px;">
    <div class="col-12">
      <?php if(strcmp($_SESSION["admin"], "admin") == 0){?><iframe src="echoSession.php" style="width: 100%; height: 300px;"> </iframe> <head>  <link rel="stylesheet" type="text/css" href="../stylesAdmin.css"></head> <?php } ?>
    </div>
  </div>
</div>

<audio id="audio" src="chat.mp3"></audio>



</body>

</html>