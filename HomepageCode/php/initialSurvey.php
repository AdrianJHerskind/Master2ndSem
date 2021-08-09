<?php
session_start();
	$thisPage = "initialSurvey.php";
	if(!array_key_exists("ip",$_SESSION))
	{
		header("Location: ../index.php");
	}
	else if(strcmp($_SESSION["blockInitialSurvey"], "true") == 0)
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
</head>

<script type="text/javascript">
	function unhideHowManyRobot(){
		document.getElementById("hiddenHowManyRobot").removeAttribute("hidden");
		document.getElementById("howMany1to4").checked = "true";
	}
	function hideHowManyRobot(){
		document.getElementById("hiddenHowManyRobot").setAttribute("hidden", true); 
		document.getElementById("howManyNever").checked = "true";

	}

	function deselectNoneOfTheAbove(){
		document.getElementById("whereRobotNoneOfTheAbove").checked = "";

		if(!document.getElementById("whereRobotBook").checked && !document.getElementById("whereRobotMovies").checked && !document.getElementById("whereRobotComputerGames").checked && !document.getElementById("whereRobotOwnHome").checked && !document.getElementById("whereRobotOutsideWorld").checked && !document.getElementById("whereRobotSchoolUniversity").checked && !document.getElementById("whereRobotWork").checked)
		{
			document.getElementById("whereRobotNoneOfTheAbove").checked = "true";
		}
	}

	function deselectAllWhereRobotInter(){
		document.getElementById("whereRobotBook").checked = "";
		document.getElementById("whereRobotMovies").checked = "";
		document.getElementById("whereRobotComputerGames").checked = "";
		document.getElementById("whereRobotOwnHome").checked = "";
		document.getElementById("whereRobotOutsideWorld").checked = "";
		document.getElementById("whereRobotWork").checked = "";
		document.getElementById("whereRobotSchoolUniversity").checked = "";

		if(document.getElementById("whereRobotNoneOfTheAbove").checked == "")
		{
			document.getElementById("whereRobotNoneOfTheAbove").checked = "true";
		}
	}

	function setValue(whichRobotClass){
		document.getElementById("whichRobot").value = whichRobotClass;
	}

	function onStartFunction(){
			setInterval("unhideWhichRobot()", 100);
		}

	function unhideWhichRobot(){

		if((document.getElementById("male").checked || document.getElementById("female").checked || document.getElementById("other").checked) && (document.getElementById("simulationYes").checked || document.getElementById("simulationNo").checked) && (document.getElementById("realYes").checked || document.getElementById("realNo").checked) && (document.getElementById("usePersonalYes").checked || document.getElementById("usePersonalNo").checked) && (document.getElementById("haveProgrammedRobotYes").checked || document.getElementById("haveProgrammedRobotNo").checked) && (document.getElementById("education").value != "") && (document.getElementById("nationality").value != ""))
		{	
			document.getElementById("hiddenWhichRobot").removeAttribute("hidden");
		}
	}
</script>

<body onload="onStartFunction()">



<div class="container.fluid" style="margin-top: 10px;">

	<div class="row text-center">
		<div class="col-2">
		</div>
		
		<div class="col-8" style="font-size: 1.5vw;"> 
			Please start by giving us some background information about yourself.
		</div>

		<div class="col-2">
		</div>

	</div>


	<div class="row text-center" style="padding-top: 30px;">

		<div class="col-2">
		</div>
		
		<div class="col-8"> 
			<form method="post" action="handleFormData.php" style="font-size: 1.25vw;">
			<hr>
			<input type="hidden" name="whichForm" value="initialSurvey">
			<label for="year">Year of birth:&nbsp;</label>
		 	<select id="year" name="year" ></select>
		<hr>
		 	<label for="gender">Gender: &nbsp;</label>
		 	<input type="radio" id="male" name="gender" value="male" required>
		  	<label for="male">Male &nbsp;</label>
		  	<input type="radio" id="female" name="gender" value="female">
		  	<label for="female">Female &nbsp;</label>
		  	<input type="radio" id="other" name="gender" value="other">
		  	<label for="other">Other &nbsp;</label> 	
		<hr>
		 	<label for="nationality" required>Nationality:&nbsp;</label>
				<select name="nationality" id="nationality">
				  <option value="" disabled selected>Select Nationality</option>
				  <option value="danish">Danish</option>
				  <option value="afghan">Afghan</option>
				  <option value="albanian">Albanian</option>
				  <option value="algerian">Algerian</option>
				  <option value="american">American</option>
				  <option value="andorran">Andorran</option>
				  <option value="angolan">Angolan</option>
				  <option value="antiguans">Antiguans</option>
				  <option value="argentinean">Argentinean</option>
				  <option value="armenian">Armenian</option>
				  <option value="australian">Australian</option>
				  <option value="austrian">Austrian</option>
				  <option value="azerbaijani">Azerbaijani</option>
				  <option value="bahamian">Bahamian</option>
				  <option value="bahraini">Bahraini</option>
				  <option value="bangladeshi">Bangladeshi</option>
				  <option value="barbadian">Barbadian</option>
				  <option value="barbudans">Barbudans</option>
				  <option value="batswana">Batswana</option>
				  <option value="belarusian">Belarusian</option>
				  <option value="belgian">Belgian</option>
				  <option value="belizean">Belizean</option>
				  <option value="beninese">Beninese</option>
				  <option value="bhutanese">Bhutanese</option>
				  <option value="bolivian">Bolivian</option>
				  <option value="bosnian">Bosnian</option>
				  <option value="brazilian">Brazilian</option>
				  <option value="british">British</option>
				  <option value="bruneian">Bruneian</option>
				  <option value="bulgarian">Bulgarian</option>
				  <option value="burkinabe">Burkinabe</option>
				  <option value="burmese">Burmese</option>
				  <option value="burundian">Burundian</option>
				  <option value="cambodian">Cambodian</option>
				  <option value="cameroonian">Cameroonian</option>
				  <option value="canadian">Canadian</option>
				  <option value="cape verdean">Cape Verdean</option>
				  <option value="central african">Central African</option>
				  <option value="chadian">Chadian</option>
				  <option value="chilean">Chilean</option>
				  <option value="chinese">Chinese</option>
				  <option value="colombian">Colombian</option>
				  <option value="comoran">Comoran</option>
				  <option value="congolese">Congolese</option>
				  <option value="costa rican">Costa Rican</option>
				  <option value="croatian">Croatian</option>
				  <option value="cuban">Cuban</option>
				  <option value="cypriot">Cypriot</option>
				  <option value="czech">Czech</option>
				  <option value="djibouti">Djibouti</option>
				  <option value="dominican">Dominican</option>
				  <option value="dutch">Dutch</option>
				  <option value="east timorese">East Timorese</option>
				  <option value="ecuadorean">Ecuadorean</option>
				  <option value="egyptian">Egyptian</option>
				  <option value="emirian">Emirian</option>
				  <option value="equatorial guinean">Equatorial Guinean</option>
				  <option value="eritrean">Eritrean</option>
				  <option value="estonian">Estonian</option>
				  <option value="ethiopian">Ethiopian</option>
				  <option value="fijian">Fijian</option>
				  <option value="filipino">Filipino</option>
				  <option value="finnish">Finnish</option>
				  <option value="french">French</option>
				  <option value="gabonese">Gabonese</option>
				  <option value="gambian">Gambian</option>
				  <option value="georgian">Georgian</option>
				  <option value="german">German</option>
				  <option value="ghanaian">Ghanaian</option>
				  <option value="greek">Greek</option>
				  <option value="grenadian">Grenadian</option>
				  <option value="guatemalan">Guatemalan</option>
				  <option value="guinea-bissauan">Guinea-Bissauan</option>
				  <option value="guinean">Guinean</option>
				  <option value="guyanese">Guyanese</option>
				  <option value="haitian">Haitian</option>
				  <option value="herzegovinian">Herzegovinian</option>
				  <option value="honduran">Honduran</option>
				  <option value="hungarian">Hungarian</option>
				  <option value="icelander">Icelander</option>
				  <option value="indian">Indian</option>
				  <option value="indonesian">Indonesian</option>
				  <option value="iranian">Iranian</option>
				  <option value="iraqi">Iraqi</option>
				  <option value="irish">Irish</option>
				  <option value="israeli">Israeli</option>
				  <option value="italian">Italian</option>
				  <option value="ivorian">Ivorian</option>
				  <option value="jamaican">Jamaican</option>
				  <option value="japanese">Japanese</option>
				  <option value="jordanian">Jordanian</option>
				  <option value="kazakhstani">Kazakhstani</option>
				  <option value="kenyan">Kenyan</option>
				  <option value="kittian and nevisian">Kittian and Nevisian</option>
				  <option value="kuwaiti">Kuwaiti</option>
				  <option value="kyrgyz">Kyrgyz</option>
				  <option value="laotian">Laotian</option>
				  <option value="latvian">Latvian</option>
				  <option value="lebanese">Lebanese</option>
				  <option value="liberian">Liberian</option>
				  <option value="libyan">Libyan</option>
				  <option value="liechtensteiner">Liechtensteiner</option>
				  <option value="lithuanian">Lithuanian</option>
				  <option value="luxembourger">Luxembourger</option>
				  <option value="macedonian">Macedonian</option>
				  <option value="malagasy">Malagasy</option>
				  <option value="malawian">Malawian</option>
				  <option value="malaysian">Malaysian</option>
				  <option value="maldivan">Maldivan</option>
				  <option value="malian">Malian</option>
				  <option value="maltese">Maltese</option>
				  <option value="marshallese">Marshallese</option>
				  <option value="mauritanian">Mauritanian</option>
				  <option value="mauritian">Mauritian</option>
				  <option value="mexican">Mexican</option>
				  <option value="micronesian">Micronesian</option>
				  <option value="moldovan">Moldovan</option>
				  <option value="monacan">Monacan</option>
				  <option value="mongolian">Mongolian</option>
				  <option value="moroccan">Moroccan</option>
				  <option value="mosotho">Mosotho</option>
				  <option value="motswana">Motswana</option>
				  <option value="mozambican">Mozambican</option>
				  <option value="namibian">Namibian</option>
				  <option value="nauruan">Nauruan</option>
				  <option value="nepalese">Nepalese</option>
				  <option value="new zealander">New Zealander</option>
				  <option value="ni-vanuatu">Ni-Vanuatu</option>
				  <option value="nicaraguan">Nicaraguan</option>
				  <option value="nigerien">Nigerien</option>
				  <option value="north korean">North Korean</option>
				  <option value="northern irish">Northern Irish</option>
				  <option value="norwegian">Norwegian</option>
				  <option value="omani">Omani</option>
				  <option value="pakistani">Pakistani</option>
				  <option value="palauan">Palauan</option>
				  <option value="panamanian">Panamanian</option>
				  <option value="papua new guinean">Papua New Guinean</option>
				  <option value="paraguayan">Paraguayan</option>
				  <option value="peruvian">Peruvian</option>
				  <option value="polish">Polish</option>
				  <option value="portuguese">Portuguese</option>
				  <option value="qatari">Qatari</option>
				  <option value="romanian">Romanian</option>
				  <option value="russian">Russian</option>
				  <option value="rwandan">Rwandan</option>
				  <option value="saint lucian">Saint Lucian</option>
				  <option value="salvadoran">Salvadoran</option>
				  <option value="samoan">Samoan</option>
				  <option value="san marinese">San Marinese</option>
				  <option value="sao tomean">Sao Tomean</option>
				  <option value="saudi">Saudi</option>
				  <option value="scottish">Scottish</option>
				  <option value="senegalese">Senegalese</option>
				  <option value="serbian">Serbian</option>
				  <option value="seychellois">Seychellois</option>
				  <option value="sierra leonean">Sierra Leonean</option>
				  <option value="singaporean">Singaporean</option>
				  <option value="slovakian">Slovakian</option>
				  <option value="slovenian">Slovenian</option>
				  <option value="solomon islander">Solomon Islander</option>
				  <option value="somali">Somali</option>
				  <option value="south african">South African</option>
				  <option value="south korean">South Korean</option>
				  <option value="spanish">Spanish</option>
				  <option value="sri lankan">Sri Lankan</option>
				  <option value="sudanese">Sudanese</option>
				  <option value="surinamer">Surinamer</option>
				  <option value="swazi">Swazi</option>
				  <option value="swedish">Swedish</option>
				  <option value="swiss">Swiss</option>
				  <option value="syrian">Syrian</option>
				  <option value="taiwanese">Taiwanese</option>
				  <option value="tajik">Tajik</option>
				  <option value="tanzanian">Tanzanian</option>
				  <option value="thai">Thai</option>
				  <option value="togolese">Togolese</option>
				  <option value="tongan">Tongan</option>
				  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
				  <option value="tunisian">Tunisian</option>
				  <option value="turkish">Turkish</option>
				  <option value="tuvaluan">Tuvaluan</option>
				  <option value="ugandan">Ugandan</option>
				  <option value="ukrainian">Ukrainian</option>
				  <option value="uruguayan">Uruguayan</option>
				  <option value="uzbekistani">Uzbekistani</option>
				  <option value="venezuelan">Venezuelan</option>
				  <option value="vietnamese">Vietnamese</option>
				  <option value="welsh">Welsh</option>
				  <option value="yemenite">Yemenite</option>
				  <option value="zambian">Zambian</option>
				  <option value="zimbabwean">Zimbabwean</option>
				</select>
		<hr>
			<label for="education">Level of education:&nbsp;</label>
			<select id="education" name="education" required>
				<option value="" disabled selected>Select your option</option>
				<option value="phd">Ph.d.</option>
				<option value="longsec">Long Secondary Education / Masters (5+ Years)</option>
				<option value="middlesec">Medium Secondary Education / Bachelor (3-4 Years)</option>
				<option value="shortsec">Short Secondary Education (1-2 Years)</option>
				<option value="highschool">High School Diploma</option>
				<option value="currSchool">Currently in school</option>
			</select> 
		<hr>
			<label for="everSimulation">Have you ever interacted with a <b title="digital version of a real robot">simulated</b> robot?</label><br>
			<input type="radio" name="everSimulation" id="simulationYes" value="1" required>
			<label for="simulationYes">Yes&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="everSimulation" id="simulationNo" value="0">
			<label for="simulationNo">No</label>
			<hr>
			<label for="everRealRobot">Have you ever interacted with a <b>physical</b> robot?</label><br>
			<input type="radio" name="everRealRobot" id="realYes" value="1" onchange="unhideHowManyRobot();" required>
			<label for="realYes">Yes&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="everRealRobot" id="realNo" value="0" onchange="hideHowManyRobot();">
			<label for="realNo">No</label>
			<div hidden id="hiddenHowManyRobot"> 
				<label for="howManyRobot"> How many times? &nbsp;</label><br>
				<input type="radio" id="howMany1to4" name="howManyRobot" value="1-4" required>
			  	<label for="howMany1to4">1-4 &nbsp;</label>
			  	<input type="radio" id="howMany5to10" name="howManyRobot" value="5-10">
			  	<label for="howMany5to10">5-10 &nbsp;</label>
			  	<input type="radio" id="howManyMoreThan10" name="howManyRobot" value="More than 10">
			  	<label for="howManyMoreThan10">More than 10 &nbsp;</label>
			  	<input type="radio" id="howManyMoreThan30" name="howManyRobot" value="More than 30">
			  	<label for="howManyMoreThan30">More than 30 &nbsp;</label> 	
			  	<input type="radio" id="howManyNever" name="howManyRobot" value="Never" hidden>
			</div>	
		<hr>
			<label for="whereRobotInter">Where do you know robots from? (Multiple answers allowed)</label><br>

			<input type="checkbox" name="whereRobotInterBook" id="whereRobotBook" value="books" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotBook">Books</label><br>

			<input type="checkbox" name="whereRobotInterMovies" id="whereRobotMovies" value="movies" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotMovies">Movies</label><br>

			<input type="checkbox" name="whereRobotInterComputerGames" id="whereRobotComputerGames" value="computergames" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotComputerGames">Computer Games</label><br>

			<input type="checkbox" name="whereRobotInterOwnHome" id="whereRobotOwnHome" value="ownhome" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotOwnHome">My own home</label><br>

			<input type="checkbox" name="whereRobotInterOutsideWorld" id="whereRobotOutsideWorld" value="outsideworld" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotOutsideWorld">Outside my home</label><br>

			<input type="checkbox" name="whereRobotInterWork" id="whereRobotWork" value="work" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotWork">Work</label><br>

			<input type="checkbox" name="whereRobotInterSchoolUniversity" id="whereRobotSchoolUniversity" value="schooluniversity" onclick="deselectNoneOfTheAbove();">
			<label for="whereRobotSchoolUniversity">School / University</label><br>

			<input type="checkbox" name="whereRobotInterNoneOfTheAbove" id="whereRobotNoneOfTheAbove" checked value="noneoftheabove" onchange="deselectAllWhereRobotInter();">
			<label for="whereRobotNoneOfTheAbove">None of the above</label><br>
		<hr>

			<label for="usePersonalRobot">Could you imagine using a robot at home?</label><br>
			<input type="radio" name="usePersonalRobot" id="usePersonalYes" value="1" required>
			<label for="usePersonalYes">Yes&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="usePersonalRobot" id="usePersonalNo" value="0">
			<label for="usePersonalYes">No</label>
		<hr>

			<label for="haveProgrammedRobot">Have you tried to program a robot before?</label><br>
			<input type="radio" name="haveProgrammedRobot" id="haveProgrammedRobotYes" value="1" required>
			<label for="haveProgrammedRobotYes">Yes&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="haveProgrammedRobot" id="haveProgrammedRobotNo" value="0">
			<label for="haveProgrammedRobotNo">No</label>
		<hr>
		</div>



		<div class="row h-100 text-center" style="font-size: 1.5vw; margin-left: 20px; margin-right: 20px;" hidden id="hiddenWhichRobot">
			<div class="col-12 my-auto">When answering the questions, which kind of robot fit best to the robot you imagined?</div>
			<div class="col-3 my-auto">
				<input id="whichRobot" type="hidden" name="whichRobot" value="">
				<input type="image" src="../img/robotTypes/robotDrone.jpg" style="max-width: 100%" alt="Submit" title="Text" onclick="setValue('robotDrone');"> 
			</div>
			<div class="col-2 my-auto">
				<input type="image" src="../img/robotTypes/robotGirl.png" style="max-width: 100%; " name="submit"alt="Submit" value="robotGirl" title="Text" onclick="setValue('robotGirl');"> 
			</div>
			<div class="col-2 my-auto">
				<input type="image" src="../img/robotTypes/robotIndustrial.jpg" style="max-width: 100%" alt="Submit" title="Text" onclick="setValue('robotIndustrial');"> 
			</div>
			<div class="col-2 my-auto">
				<input type="image" src="../img/robotTypes/robotMarsRover.jpg" style="max-width: 100%;" alt="Submit" title="Text" onclick="setValue('robotMarsRover');"> 
			</div>
			<div class="col-3 my-auto">
				<input type="image" src="../img/robotTypes/robotVacuum.jpg" style="max-width: 100%;" alt="Submit" title="Text" onclick="setValue('robotVacuum');"> 
			</div>
		</div>
	</div>

		<div class="col-2">

		</div>

	</div>

	<div class="row text-center">
		<div class="col-2">
			<button type="button" class="btn btn-outline-dark" onclick="window.location.href = '<?php if(strcmp($_SESSION["admin"], "admin") == 0){ ?>personalisationOrNot.php<?php }else{ ?>introduction.php<?php }?>'">Previous</button>

		</div>
				
		<div class="col-8">
					
		</div>

		<div class="col-2">
		</div>
</form>

	</div>
</div>



<SCRIPT LANGUAGE="JavaScript">
	var end = 1930;
	var start = new Date().getFullYear() - 14;
	var options = "";
	for(var year = start ; year >=end; year--){
	  options += "<option>"+ year +"</option>";
	}
	document.getElementById("year").innerHTML = options;

</script>

<div class="container.fluid">
	<div class="row text-center" style="margin-top: 20px;">
		<div class="col-12">
			<?php if(strcmp($_SESSION["admin"], "admin") == 0){?><iframe src="echoSession.php" style="width: 100%; height: 300px;"> </iframe> <head> 	<link rel="stylesheet" type="text/css" href="../stylesAdmin.css"></head> <?php } ?>
		</div>
	</div>
</div>

</body>

</html>

