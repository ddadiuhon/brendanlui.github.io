<?php include 'get_ip_address_and_insert_in_database.php';?>
<?php
if ($_POST){
	include 'config_database_value.php';
	$con=mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($con,"SELECT * FROM database_comment");
	$code_real = "";
	while($row = mysqli_fetch_array($result))
	{
		$save = $row['id'];
		if( isset($_POST[$save]) ){	
			$GLOBALS['code_real'] = $row['keyword'];
			break;
		}
	}

	
	
	
	//view comment
	date_default_timezone_set('Asia/Hong_Kong');
	$date = date("Y-m-d");
	$name = $_POST['name'];
	$content = $_POST['commentContent'];
	$code_user_type = $_POST['code'];
	if(strcmp($code_user_type,  $code_real) != 0)
		 echo "<script type='text/javascript'>alert('Not match code. Type again.');</script>";
	else{
		$handle = fopen("view_comment.php","a");
		fwrite ($handle,"<dt>" . $name . ": </dt><dd>" . $content . "</dd><dd style='font-size:8px;'>".$date."</dd></br>");
		fclose ($handle);
		echo "<script type='text/javascript'>alert('Done.');</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
	<link id="stylecall" rel="stylesheet" href="/academic_style.css" />
	<link id="stylecall" rel="stylesheet" href="/logo_dadiu.css" />
	<link rel="icon" 
	  type="image/png" 
	  href="/img/d01.png">
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
</head>

<title>Dadiu | Academic</title>

<body>
	<div id="page0">
		<a id="toppest" class="smooth"></a>
	</div>


	<div id="head">
		<a href="/">
		<div id="logo">
			<img src="/img/dadiu.png" alt="dai01" class="logo_dadiu">
		</div>
		</a>
			<!-- <div id="nav_home">
				<ul>
					 <li><a href="/">Home</a></li>
				</ul>
			</div> --->
			<!--
			<div id="nav_subtitle">
				 <ul>
					 <li><a href="#about" >About</a></li>
					 <li><a href="#lecturenote">Lecture Note</a></li>
					 <li><a href="#album">Album</a></li>
					 <li><a href="#calculator">Calculator</a></li>
					 <li><a href="#liar">Liar Dice</a></li>
					 <li><a href="#lucky">Lucky</a></li>
					 <li><a href="#contact">Contact</a></li>
				 </ul>
			</div>
			-->
	</div>
	
<link rel="stylesheet" href="/responsive_bar_style.css">
<div class="topnav" id="myTopnav">
  <a href="/">Home</a>
  
  <!-- <a href="/movie_warning.php">This Tube</a> -->
  <a href="/movie_no_pre.php">This Tube</a>
  
  <a href="/piano.php">Music Studio</a>
  <a href="/login_not_yet.php">Login</a>
  <a href="#toppest" onclick="openNav()">Shortcut</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>




	
<link rel="stylesheet" href="/side_bar_style.css">
<div id="nav_subtitle">
	<div id="mySidenav" class="sidenav">
		 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		 <a href="#about"onclick="closeNav()" >About</a>
		 <a href="#lecturenote"onclick="closeNav()">Lecture Note</a>
		 <a href="#album"onclick="closeNav()">Album</a>
		 <a href="#calculator"onclick="closeNav()">Calculator</a>
		 <a href="#liar"onclick="closeNav()">Liar Dice</a>
		 <a href="#lucky"onclick="closeNav()">Lucky</a>
		 <a href="#contact"onclick="closeNav()">Contact</a>	
	</div>
</div>
<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}
</script>	
	
	
	
	
	
	
	
	
	
	
	
	<div id="page1">
	  <a id="about" class="smooth" style="clear:both;color:#888;"></a>
		<h2> About </h2></br>
		<h4><font style="font-size:30px;">This Tube</font> is a movie channel
	, and in <font style="font-size:30px;">Music Studio</font> you can compose songs and save it to play
	, and in <font style="font-size:30px;">Login</font> you can order everything.</h4>
	</div></br>
	
	<div class="divider1">&nbsp;</div>
	
	
	<div class="config">
	    <div class="innerconfig">
	        <dl class="content">
				<div id="page3">
				  <a id="lecturenote" class="smooth" style="clear:both;color:#888;"></a>
					<h2> Lecture Note </h2></br>
						<dt>COMP3111</dt>
							<dd>Lecture Note <a href='/comp3111/lecture_note/L01Introduction'>Ch1</a>
								<a href='/comp3111/lecture_note/L02UMLModeling'>Ch2</a>
								<a href='/comp3111/lecture_note/L03UMLModeling'>Ch3</a>
								<a href='/comp3111/lecture_note/L04Development'>Ch4</a>
								<a href='/comp3111/lecture_note/L05Development'>Ch5</a>
								<a href='/comp3111/lecture_note/L06Requirements'>Ch6</a>
								<a href='/comp3111/lecture_note/L08Requirements'>Ch8</a>
								<a href='/comp3111/lecture_note/L09Requirements'>Ch9</a>
								<a href='/comp3111/lecture_note/L10Requirements'>Ch10</a>
								<a href='/comp3111/lecture_note/L11Implementation'>Ch11</a>
								<a href='/comp3111/lecture_note/L12Implementation'>Ch12</a>
								<a href='/comp3111/lecture_note/L13Testing'>Ch13</a>
								<a href='/comp3111/lecture_note/L14Testing'>Ch14</a>
								<a href='/comp3111/lecture_note/L15Testing'>Ch15</a>
								<a href='/comp3111/lecture_note/L16Analysis&Design'>Ch16</a>
								<a href='/comp3111/lecture_note/L17Analysis&Design'>Ch17</a>
								<a href='/comp3111/lecture_note/L18Analysis&Design'>Ch18</a>
								<a href='/comp3111/lecture_note/L19Analysis&Design'>Ch19</a>
								<a href='/comp3111/lecture_note/L20SQA'>Ch20</a>
								<a href='/comp3111/lecture_note/L21ProjectMgmt'>Ch21</a>
							</dd></br>
							<dd>Exercise <a href='/comp3111/exercise/L02Exercise-UMLModeling'>Ch2</a>
								<a href='/comp3111/exercise/L03Exercise-UMLModeling'>Ch3</a>
								<a href='/comp3111/exercise/L04Exercise-UMLModeling'>Ch4</a>
								<a href='/comp3111/exercise/L05Exercise-Development'>Ch5</a>
								<a href='/comp3111/exercise/L06Exercise-RequirementsDomainModeling'>Ch6</a>
								<a href='/comp3111/exercise/L07Exercise-RequirementsDomainModeling'>Ch7</a>
								<a href='/comp3111/exercise/L08Exercise-VideoShopUM'>Ch8</a>
								<a href='/comp3111/exercise/L09Exercise-CitygasUM'>Ch9</a>
								<a href='/comp3111/exercise/L10Exercise-Requirements'>Ch10</a>
								<a href='/comp3111/exercise/L11Exercise-Refactoring'>Ch11</a>
								<a href='/comp3111/exercise/L13Exercise-MovieShopBasisPathTesting'>Ch13</a>
								<a href='/comp3111/exercise/L14Exercise-MovieShopBlackBoxTesting'>Ch14</a>
								<a href='/comp3111/exercise/L15Exercise-MovieShopAcceptanceTesting'>Ch15</a>
								<a href='/comp3111/exercise/L16Exercise-ClassDesign'>Ch16</a>
								<a href='/comp3111/exercise/L17Exercise-MovieShopSMD'>Ch17</a>
								<a href='/comp3111/exercise/L18Exercise-DesignPatterns'>Ch18</a>
								<a href='/comp3111/exercise/L19Exercise-DesignPatterns'>Ch19</a>
							</dd></br>
							<dd>Lab <a href='/comp3111/lab.zip'>ZipFile</a>
							</dd></br>
						<dt>COMP3511</dt>
							<dd>Lecture Note <a href='/comp3511/ch01_spring17'>Ch1</a>
								<a href='/comp3511/ch02_spring17'>Ch2</a>
								<a href='/comp3511/ch03_spring17'>Ch3</a>
								<a href='/comp3511/ch04_spring17'>Ch4</a>
								<a href='/comp3511/ch05_spring17'>Ch5</a>
								<a href='/comp3511/ch06_spring17'>Ch6</a>
								<a href='/comp3511/ch07_spring17'>Ch7</a>
								<a href='/comp3511/ch08_spring17'>Ch8</a>
								<a href='/comp3511/ch09_spring17'>Ch9</a>
								<a href='/comp3511/ch10_spring17'>Ch10</a>
								<a href='/comp3511/ch11_spring17'>Ch11</a>
								<a href='/comp3511/ch12_spring17'>Ch12</a>
							</dd></br>
							<dd>Summary <a href='/comp3511/Chp1_Summary'>Ch1</a>
								<a href='/comp3511/Chp2_Summary'>Ch2</a>
								<a href='/comp3511/Chp3_Summary'>Ch3</a>
								<a href='/comp3511/Chp4_Summary'>Ch4</a>
								<a href='/comp3511/Chp5_Summary'>Ch5</a>
								<a href='/comp3511/Chp6_Summary'>Ch6</a>
								<a href='/comp3511/Chp7_Summary'>Ch7</a>
								<a href='/comp3511/Chp8_Summary'>Ch8</a>
								<a href='/comp3511/Chp9_Summary'>Ch9</a>
								<a href='/comp3511/Chp10-11_Summary'>Ch10-11</a>
								<a href='/comp3511/Chp12_Summary'>Ch12</a>
							</dd></br>
							<dd>Homework Solution <a href='/comp3511/comp3511_hw1_spring17_solution'>Hw1</a>
								<a href='/comp3511/comp3511_hw2_spring17_solution'>Hw2</a>
								<a href='/comp3511/comp3511_hw3_spring17_solution'>Hw3</a>
								<a href='/comp3511/comp3511_hw4_spring17_solution'>Hw4</a>
							</dd></br>
							<dd>Past Paper <a href='/comp3511/comp3511_midterm_spring17_solution'>Midterm</a>
								<a href='/comp3511/comp3511_final_fall16'>FinalF</a>
								<a href='/comp3511/comp3511_final_spring16'>FinalS</a>
							</dd></br>
							<dd>Review <a href='/comp3511/review_spring17'>Ch1-12</a>
							</dd></br>
						<dt>COMP4021</dt>
							<dd>Lecture Note (Before Midterm) <a href='/comp4021/1.done 303_intro'>Ch1</a>
								<a href='/comp4021/2.done 303_html_intro'>Ch2</a>
								<a href='/comp4021/3.done 303_javascript1'>Ch3</a>
								<a href='/comp4021/4.done 303_javascript2'>Ch4</a>
								<a href='/comp4021/5.done 4021_divs_maps'>Ch5</a>
								<a href='/comp4021/6.done 4021_CSS'>Ch6</a>
								<a href='/comp4021/7.done 4021_jquery_intro'>Ch7</a>
								<a href='/comp4021/8.done 4021_jquery_more'>Ch8</a>
								<a href='/comp4021/9.done 303_svg_basics'>Ch9</a>
								<a href='/comp4021/10.done 303_dynamic_svg'>Ch10</a>
								<a href='/comp4021/11.done 303-matrix-transform'>Ch11</a>
								<a href='/comp4021/12.done 303_javascript3'>Ch12</a>
								<a href='/comp4021/13. 303_more_web_browser_programming'>Ch13</a>
								<a href='/comp4021/14. 303_dynamic_svg_using_javascript'>Ch14</a>
								</dd></br>
							<dd>Lecture Note (After Midterm) <a href='/comp4021/17. 4021_cookies_js'>Ch15</a>
								<a href='/comp4021/18. 303_dom'>Ch16</a>
								<a href='/comp4021/19. 303_browser_process'>Ch17</a>
								<a href='/comp4021/20. 303_php'>Ch18</a>
								<a href='/comp4021/21. 303_forms'>Ch19</a>
								<a href='/comp4021/22. 303_ajax'>Ch20</a>
								<a href='/comp4021/23. 4021-ajax-jquery'>Ch21</a>
								<a href='/comp4021/24. 303_php2'>Ch22</a>
								<a href='/comp4021/25. 303_php3'>Ch23</a>
								<a href='/comp4021/26. 303_php_sessions'>Ch24</a>
								<a href='/comp4021/27. 4021_css (1)'>Ch25</a>
								<a href='/comp4021/28. 303_xml_xsl_short'>Ch26</a>
								<a href='/comp4021/29. 303_xml_dtd_schema'>Ch27</a>
								<a href='/comp4021/30. 4021-web-services-short'>Ch28</a>
								<a href='/comp4021/31. govt_web_accessibility_short'>Ch29</a>
								<a href='/comp4021/32. 4021-conclusion'>Ch30</a>
							</dd></br>
							<dd>Past Paper <a href='/comp4021/15. 4021_example_midterm_exam_answers'>Midterm1</a>
								<a href='/comp4021/16. 4021_svg_game_array_review_answer'>Midterm2</a>
								<a href='/comp4021/33. 4021_quick_review_question-s'>Final1</a>
								<a href='/comp4021/34. 4021_review_questions'>Final2</a>
							</dd>
				</div>
	        </dl>
        </div>
    </div></br></br>

	 <div class="divider1">&nbsp;</div>
	 
	<div id="page2">
	  <a id="album" class="smooth" style="clear:both;color:#888;"></a>
		<h2>Album</h2></br>
		<dt><p><a href="/album">Album1</a></p></dt></br></br>
		
	</div>
	
	<div class="divider1">&nbsp;</div>	 
	 
	<div id="page4">
	  <a id="calculator" class="smooth"></a>
		<h2>Calculator</h2></br>	
					<h4> Get the Probability of Liar Dice: </h4></br>
		
					<h4> e.g. If there are 20 dice under the cups, and you want to know what the probability of more than or equal 8 numbers of 4-point dice is, then you type "20" into "TOTAL", "8" into "NUMBER", and "4" into "POINT", and then press "Get Value".</h4></br>
					
					<form id="form" onsubmit="return false;">
						<input style="clear:both;color:#888;text-align: center;" type="text" id="userInput1" value="TOTAL (MAX: 170)" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						<input style="clear:both;color:#888;text-align: center;" type="text" id="userInput2" value="NUMBER" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						<input style="clear:both;color:#888;text-align: center;" type="text" id="userInput3" value="POINT" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br></br>
						<button style="clear:both;" type="submit" value="Submit" onclick="cal_get_value();">Get Value</button>
							<script>	
								function inputFocus(i){
									if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
								}
								function inputBlur(i){
									if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
								}
							</script>
					</form>
					<script>

						function factorial(n){
							rval=1;
							for (i = 2; i <= n; i++)
								rval = rval * i;
							return rval;
						}
						
						function exact_prob(total, your_want, prob) {
							// both need
							temp1 = 1;
							for (i = 0; i < your_want; i++) {
								temp1 = temp1 * prob;
							}
							temp2 = 1;
							for (i = 0; i < total - your_want; i++) {
								temp2 = temp2 * (1 - prob);
							}
							probability = 0;
							nCr = factorial(total)	/ (factorial(your_want) * factorial(total - your_want));
							probability = nCr;
							result_prob = probability * temp1 * temp2;
							return result_prob;
						}
						
						function binomial(total, probability, larger_or_equal_to, prob, printing) {
							total = parseInt(total);
							larger_or_equal_to = parseInt(larger_or_equal_to);
							printing = exact_prob(total, larger_or_equal_to, prob);
							for (j = larger_or_equal_to + 1; j < total + 1; j++) {
								printing = printing + exact_prob(total, j, prob);
							}
							return printing;
						}
						
						function cal_get_value() {
							total = 10;
							probability = 0;
							larger_or_equal_to = 4;
							prob = 1 / 3;
							printing = 0;
							dice = 0;
							
							var total = document.getElementById("userInput1").value;
							var larger_or_equal_to = document.getElementById("userInput2").value;
							var dice = document.getElementById("userInput3").value;
							var save = 0;

							if (dice > 6 || dice < 1) {
								save = 0;
								dice = 0;
							}
							else {
								if(dice == 1){
									prob = 1 / 6;
								}
								save = binomial(total, probability, larger_or_equal_to, prob, printing);
							}
							alert(save);
						}		
					</script>		
	</div></br></br>
	
	<div class="divider1">&nbsp;</div>	

	<div id="page7">
	  <a id="liar" class="smooth" style="clear:both;color:#888;"></a>
		<h2>Liar Dice 1</h2>
		
			<h4> (Beginner) </h4></br>
			
			<h4> Press "Start" to restart the game. Type the number you call in the following boxes, and then press "Call". Press "Open" if you do not trust the calling of the computer. Tick "Only" if the 1-point dice are no longer generic. Press "Result" to view your score. </h4>

			<h4> *LOSER GOES FIRST</h4></br>
					<form name = "f1"> 
						<input style="clear:both;color:#888;" type="radio" id="startradio" Name = "r2" Value = "start" onClick="StartLiarDice(this)"> Start &emsp;
						<input style="clear:both;color:#888;" type="radio" id="resultradio" Name = "r2" value="result" onclick="resultaction();"> Result </br>
						<input style="clear:both;color:#888;" type="radio" id="callradio" Name = "r2" value="Call" onclick="callaction();"> Call &emsp;
						<input style="clear:both;color:#888;" type="radio" id="openradio" Name = "r2" value="Open" onclick="openaction();"> Open </br>
						
						Number: </br><input style="clear:both;color:#888;text-align: center;" type = "text" id="userCallNum1" Name = "call1" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						Point: </br><input style="clear:both;color:#888;text-align: center;" type = "text" id="userCallNum2" Name = "call2" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						<input type="checkbox" id="userCallOnly" name="only" value="Only"> Only<br><br>
					</form></br>
					<div id="output2"></div>
					
<script>			

var array_dice = output2.innerHTML.split(" ");  
var player = new Array(5);
var computer = new Array(5);

var comp_start_first = false;
var number = 1;
var point = 6;
var is_only = false;

var start_is_clicked = false;

var computer_score_1 = 0;
var player_score_1 = 0;

function resultaction(){
	alert("(BEGINNER) You v.s Computer is " + player_score_1 + " : " + computer_score_1 + ".")
}
		
function StartLiarDice(el) {
	number = 1;
	point = 6;
	is_only = false;
	start_is_clicked = true;
	
	document.getElementById("userCallNum1").value = "";
	document.getElementById("userCallNum2").value = "";
	document.getElementById("userCallOnly").checked = false;
	document.getElementById("callradio").checked = false;
	document.getElementById("openradio").checked = false;
	
	
	
	for (i = 0; i < 5; i++) {
		player[i] = Math.floor((Math.random() * 6) + 1);
		computer[i] = Math.floor((Math.random() * 6) + 1);
	}
	
	output2.innerHTML = "You: ";
	for (i = 0; i < 5; i++) {
		output2.innerHTML += player[i]; // set its content to the value of the "el"
		output2.innerHTML += " ";
	}
	output2.innerHTML += "<br/><br/>";
	output2.innerHTML += "Computer: ";

	if (comp_start_first) {
		alert("Computer goes first.");
		if (Math.floor((Math.random() * 4) + 1) != 3) {
			number = 2;
			point = 1;
			is_only = true;
		}
		else{
			number = 4;
			point = 6;
			is_only = false;
		}
		if (is_only)
			alert("Computer called " + number + " - " + point + " ONLY.");
		else
			alert("Computer called " + number + " - " + point + ".");
	}
	else
		alert("You go first.");
}


function callaction() {
	document.getElementById("startradio").checked = false;
	if(start_is_clicked == true){
		var num_call = document.getElementById("userCallNum1").value;
		var point_call = document.getElementById("userCallNum2").value;
			if ((document.getElementById("userCallOnly").checked == false && is_only != document.getElementById("userCallOnly").checked && parseInt(num_call) < 2 * number)
					|| (parseInt(num_call) < number)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) < point && parseInt(point_call) != 1)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) == point && document.getElementById("userCallOnly").checked == false)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) == point
							&& document.getElementById("userCallOnly").checked == true && is_only == true)
					|| (parseInt(num_call) == number && point == 1)
					|| point_call > 6 || point_call < 1 || isNaN(num_call) || isNaN(point_call)) {
				alert("Error. Please type again.");
			} else {

				number = parseInt(num_call);
				point = parseInt(point_call);
				is_only = document.getElementById("userCallOnly").checked;

				if (point == 1)
					is_only = true;

				if (is_only)
					alert("You called " + number + " - " + point + " ONLY.");
				else
					alert("You called " + number + " - " + point + ".");

				//comp_do_think
				comp_number = 4;
				comp_point = 6;
				comp_is_only = false;

				if ((comp_is_only == false && is_only != comp_is_only && comp_number < 2 * number)
						|| (comp_number < number)
						|| (comp_number == number && comp_point < point && parseInt(point_call) != 1)
						|| (comp_number == number && comp_point == point && comp_is_only == false)
						|| (comp_number == number && comp_point == point
								&& comp_is_only == true && is_only == true)
						|| (comp_number == number && point == 1)) {

					comp_number = 2;
					comp_point = 1;
					comp_is_only = true;

					if ((comp_is_only == false && is_only != comp_is_only && comp_number < 2 * number)
							|| (comp_number < number)
							|| (comp_number == number && comp_point < point && parseInt(point_call) != 1)
							|| (comp_number == number && comp_point == point && comp_is_only == false)
							|| (comp_number == number && comp_point == point
									&& comp_is_only == true && is_only == true)
							|| (comp_number == number && point == 1)) {
						//comp_judge_action
						count = 0;
						if (is_only) {
							for (i = 0; i < 5; i++) {
								if (player[i] == point)
									count++;
								if (computer[i] == point)
									count++;
							}
						} else {
							for (i = 0; i < 5; i++) {
								if (player[i] == point || player[i] == 1)
									count++;
								if (computer[i] == point || computer[i] == 1)
									count++;
							}
						}
						
						//print the data if open
						output2.innerHTML = "You: ";
						for (i = 0; i < 5; i++) {
							output2.innerHTML += player[i]; // set its content to the value of the "el"
							output2.innerHTML += " ";
						}
						output2.innerHTML += "<br/><br/>";
						output2.innerHTML += "Computer: ";
						for (i = 0; i < 5; i++) {
							output2.innerHTML += computer[i]; // set its content to the value of the "el"
							output2.innerHTML += " ";
						}
						
						if (count >= number) {
							alert("Computer opened. You win.");
							player_score_1++;
							comp_start_first = true;
						} else {
							alert("Computer opened. You lose.");
							computer_score_1++;
							comp_start_first = false;
						}
						start_is_clicked = false;
						document.getElementById("start_radio_lucky").checked = false;
					} else {
						document.getElementById("userCallNum1").value = "";
						document.getElementById("userCallNum2").value = "";
						if (comp_is_only)
							alert("Computer called " + comp_number + " - " + comp_point + " ONLY.");
						else
							alert("Computer called " + comp_number + " - " + comp_point + ".");
					}
				} else {
					document.getElementById("userCallNum1").value = "";
					document.getElementById("userCallNum2").value = "";
					if (comp_is_only)
						alert("Computer called " + comp_number + " - " + comp_point + " ONLY.");
					else
						alert("Computer called " + comp_number + " - " + comp_point + ".");
				}
				number = comp_number;
				point = comp_point;
				is_only = comp_is_only;
			}
	}
}


function openaction() {
	document.getElementById("startradio").checked = false;
	if(start_is_clicked == true){
		array_dice = output2.innerHTML.split(" ");  
		if(array_dice[8] == null){
			count = 0;
			if (document.getElementById("userCallOnly").checked == true) {
				for (i = 0; i < 5; i++) {
					if (player[i] == point)
						count++;
					if (computer[i] == point)
						count++;
				}
			} else {
				for (i = 0; i < 5; i++) {
					if (player[i] == point || player[i] == 1)
						count++;
					if (computer[i] == point || computer[i] == 1)
						count++;
				}
			}

			output2.innerHTML = "You: ";
			for (i = 0; i < 5; i++) {
				output2.innerHTML += player[i]; // set its content to the value of the "el"
				output2.innerHTML += " ";
			}
			output2.innerHTML += "<br/><br/>";
			output2.innerHTML += "Computer: ";
			for (i = 0; i < 5; i++) {
				output2.innerHTML += computer[i]; // set its content to the value of the "el"
				output2.innerHTML += " ";
			}

			if (count >= number) {
				alert("You lose.");
				computer_score_1++;
				comp_start_first = false;
			} else {
				alert("You win.");
				player_score_1++;
				comp_start_first = true;
			}
			start_is_clicked = false;
		}
	}
}
</script>	
	
	</div></br>
				
<div class="divider1">&nbsp;</div>	







	<div id="page8">
	  <a id="liar2" class="smooth" style="clear:both;color:#888;"></a>
		<h2>Liar Dice 2</h2>
		
			<h4> (Intermediate) </h4></br>
			

			
					<form name = "f1"> 
						<input style="clear:both;color:#888;" type = "radio" id="startradio2" Name = "r2" Value = "start" onClick="StartLiarDice2(this)"> Start &emsp;
						<input style="clear:both;color:#888;" type="radio" id="resultradio2" Name = "r2" value="result" onclick="resultaction2();"> Result </br>
						<input style="clear:both;color:#888;" type="radio" id="callradio2" Name = "r2" value="Call" onclick="callaction2();"> Call &emsp;
						<input style="clear:both;color:#888;" type="radio" id="openradio2" Name = "r2" value="Open" onclick="openaction2();"> Open </br>
						
						Number: </br><input style="clear:both;color:#888;text-align: center;" type = "text" id="userCallNum12" Name = "call12" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						Point: </br><input style="clear:both;color:#888;text-align: center;" type = "text" id="userCallNum22" Name = "call22" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
						<input type="checkbox" id="userCallOnly2" name="only" value="Only"> Only<br><br>
					</form></br>
					<div id="output22"></div>
					
<script>			

var array_dice = output22.innerHTML.split(" ");  
var player = new Array(5);
var computer = new Array(5);

var comp_start_first = false;
var number = 1;
var point = 6;
var is_only = false;

var start_is_clicked = false;

var computer_score_2 = 0;
var player_score_2 = 0;

function resultaction2(){
	alert("(INTERMEDIATE) You v.s Computer is " + player_score_2 + " : " + computer_score_2 + ".")
}
		
function StartLiarDice2(el) {
	number = 1;
	point = 6;
	is_only = false;
	start_is_clicked = true;
	
	document.getElementById("userCallNum12").value = "";
	document.getElementById("userCallNum22").value = "";
	document.getElementById("userCallOnly2").checked = false;
	document.getElementById("callradio2").checked = false;
	document.getElementById("openradio2").checked = false;
	document.getElementById("resultradio2").checked = false;
	
	for (i = 0; i < 5; i++) {
		player[i] = Math.floor((Math.random() * 6) + 1);
		computer[i] = Math.floor((Math.random() * 6) + 1);
	}
	
	output22.innerHTML = "You: ";
	for (i = 0; i < 5; i++) {
		output22.innerHTML += player[i]; 
		output22.innerHTML += " ";
	}
	output22.innerHTML += "<br/><br/>";
	output22.innerHTML += "Computer: ";

	if (comp_start_first) {
		alert("Computer goes first.");
		is_only = false;
		number = 2;
		point = Math.floor((Math.random() * 6) + 1);
		if (point == 1)
			is_only = true;
		if (is_only)
			alert("Computer called " + number + " - " + point + " ONLY.");
		else
			alert("Computer called " + number + " - " + point + ".");
	}
	else
		alert("You go first.");
}


function callaction2() {
	document.getElementById("startradio2").checked = false;
	if(start_is_clicked == true){
		var num_call = document.getElementById("userCallNum12").value;
		var point_call = document.getElementById("userCallNum22").value;
			if ((document.getElementById("userCallOnly2").checked == false && is_only != document.getElementById("userCallOnly2").checked && parseInt(num_call) < 2 * number)
					|| (parseInt(num_call) < number)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) < point && parseInt(point_call) != 1)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) == point && document.getElementById("userCallOnly2").checked == false)
					|| (parseInt(num_call) == number
							&& parseInt(point_call) == point
							&& document.getElementById("userCallOnly2").checked == true && is_only == true)
					|| (parseInt(num_call) == number && point == 1)
					|| point_call > 6 || point_call < 1 || isNaN(num_call) || isNaN(point_call)) {
				alert("Error. Please type again.");
			} else {

				number = parseInt(num_call);
				point = parseInt(point_call);
				is_only = document.getElementById("userCallOnly2").checked;

				if (point == 1)
					is_only = true;
				if (is_only)
					alert("You called " + number + " - " + point + " ONLY.");
				else
					alert("You called " + number + " - " + point + ".");
	
				//below: comp_do_think (cpp to javascript by hand)
				var believe = 50;
				var computer_numOf = new Array(6);
				var computer_choice = new Array(50);	//MAX_CHOICE = 50
				max_numOF_choice = 0;
				for (i = 0; i < 6; i++) {
					computer_numOf[i] = 0;
				}
				for (i = 0; i < 50; i++) {
					computer_choice[i] = new Array(2);
				}

				var computer_numOf_NOT_ONE = new Array(6);
				var computer_choice_NOT_ONE = new Array(50);	//MAX_CHOICE = 50
				max_numOF_choice_NOT_ONE = 0;
				for (i = 0; i < 6; i++) {
					computer_numOf_NOT_ONE[i] = 0;
				}
				for (i = 0; i < 50; i++) {
					computer_choice_NOT_ONE[i] = new Array(2);
				}
				
				for (i = 0; i < 5; i++) {	
					if (computer[i] == 1) {
						for (j = 0; j < 6; j++)
							computer_numOf[j]++;
					} else
						computer_numOf[computer[i] - 1]++;
					computer_numOf_NOT_ONE[computer[i] - 1]++;
				}
				
				start = 999;
				save_i_should_be_a_liar = i_should_be_a_liar(computer_numOf);
				save_i_should_be_a_liar_NOT_ONE = i_should_be_a_liar_NOT_ONE(computer_numOf_NOT_ONE);
				if (save_i_should_be_a_liar)
					max_numOF_choice = first_faker(computer_numOf, computer_choice);
				else
					max_numOF_choice = first_check_the_method(computer_numOf,
							computer_choice);
				if (save_i_should_be_a_liar_NOT_ONE)
					max_numOF_choice_NOT_ONE = first_faker_NOT_ONE(computer_numOf_NOT_ONE,
							computer_choice_NOT_ONE);
				else
					max_numOF_choice_NOT_ONE = first_check_method_NOT_ONE(
							computer_numOf_NOT_ONE, computer_choice_NOT_ONE);

				number_of = number;
				dice = point;
				dice_one_is_called = is_only;
				
				save_number_of = number;
				save_dice = point;
				
				max_numOF_choice = re_check_the_method(computer_numOf, computer_choice,
						number_of, dice, max_numOF_choice);
				max_numOF_choice_NOT_ONE = re_check_method_NOT_ONE(
						computer_numOf_NOT_ONE, computer_choice_NOT_ONE, number_of,
						dice, max_numOF_choice_NOT_ONE);
						
				if (save_dice == 1 || dice_one_is_called) {			//ONE is not GENERIC
					dice_one_is_called = true;
					computer_dice_most_NOT_ONE = find_computer_which_dice_most_NOT_ONE(
							computer_choice_NOT_ONE, max_numOF_choice_NOT_ONE);
					computer_dice_least_NOT_ONE =
							find_computer_which_dice_least_NOT_ONE(computer_numOf_NOT_ONE);
					if (save_dice != 1) {
						if (Math.floor(Math.random() * 2) == 0) {
							for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
								if (computer_choice_NOT_ONE[i][0] > save_number_of && computer_choice_NOT_ONE[i][1] == save_dice) {
									start = i;
									save_number_of = computer_choice_NOT_ONE[start][0];
									save_dice = computer_choice_NOT_ONE[start][1];
									break;
								}
							}
						}
						if (start == 999) {
							if (!save_i_should_be_a_liar_NOT_ONE) {
								for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
									if ((computer_dice_most_NOT_ONE != 0 //priority2		calling our most first if same number of
											&& computer_choice_NOT_ONE[i][1]
													== computer_dice_most_NOT_ONE
											&& computer_choice_NOT_ONE[i][0]
													> save_number_of)
											|| (computer_dice_most_NOT_ONE > save_dice
													&& computer_choice_NOT_ONE[i][1]
															== computer_dice_most_NOT_ONE
													&& computer_choice_NOT_ONE[i][0]
															== save_number_of)) {
										start = i;
										save_number_of = computer_choice_NOT_ONE[start][0];
										save_dice = computer_choice_NOT_ONE[start][1];
										break;
									}
								}
							} else {
								for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
									if ((computer_dice_least_NOT_ONE != 0 //priority2.5	calling our least first if same number of (liar version)
											&& computer_choice_NOT_ONE[i][1]
													== computer_dice_least_NOT_ONE
											&& computer_choice_NOT_ONE[i][0]
													> save_number_of)
											|| (computer_dice_least_NOT_ONE > save_dice
													&& computer_choice_NOT_ONE[i][1]
															== computer_dice_least_NOT_ONE
													&& computer_choice_NOT_ONE[i][0]
															== save_number_of)
											|| (computer_dice_least_NOT_ONE == 1
													&& save_dice != 1
													&& computer_choice_NOT_ONE[i][1]
															== computer_dice_least_NOT_ONE
													&& computer_choice_NOT_ONE[i][0]
															== save_number_of)) {
										start = i;
										save_number_of = computer_choice_NOT_ONE[start][0];
										save_dice = computer_choice_NOT_ONE[start][1];
										break;
									}
								}
							}
						}
						if (start == 999) {
							for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
								if ((computer_choice_NOT_ONE[i][0] == save_number_of //priority3		normal rule
								&& computer_choice_NOT_ONE[i][1] > save_dice)
										|| computer_choice_NOT_ONE[i][0]
												> save_number_of) {
									start = i;
									save_number_of = computer_choice_NOT_ONE[start][0];
									save_dice = computer_choice_NOT_ONE[start][1];
									break;
								} else if (computer_choice[i][0]
										>= 2 * save_number_of) { //break the "only" rule
									dice_one_is_called = false;
									start = i;
									save_number_of = computer_choice=[start][0];
									save_dice = computer_choice=[start][1];
									break;
								}
							}
						}
					}
					else if (save_dice == 1) {
						if (Math.floor(Math.random() * 2) == 0) {
							for (i = 0; i < max_numOF_choice_NOT_ONE; i++) { //priority1 	look at player's calling	if save_dice == 1
								if (computer_choice_NOT_ONE[i][0] > save_number_of
										&& computer_choice_NOT_ONE[i][1] == 1)
									start = i;
									save_number_of = computer_choice_NOT_ONE[start][0];
									save_dice = computer_choice_NOT_ONE[start][1];
								break;
							}
						}
						if (start == 999) {
							if (!save_i_should_be_a_liar_NOT_ONE) {
								for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
									if ((computer_dice_most_NOT_ONE != 0 //priority2		calling our most first if same number of
											&& computer_choice_NOT_ONE[i][1]
													== computer_dice_most_NOT_ONE
											&& computer_choice_NOT_ONE[i][0]
													> save_number_of)) {
										start = i;
										save_number_of = computer_choice_NOT_ONE[start][0];
										save_dice = computer_choice_NOT_ONE[start][1];
										break;
									}
								}
							} else {
								for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
									if ((computer_dice_least_NOT_ONE != 0 //priority2.5	calling our least first if same number of (liar version)
											&& computer_choice_NOT_ONE[i][1]
													== computer_dice_least_NOT_ONE
											&& computer_choice_NOT_ONE[i][0]
													> save_number_of)) {
										start = i;
										save_number_of = computer_choice_NOT_ONE[start][0];
										save_dice = computer_choice_NOT_ONE[start][1];
										break;
									}
								}
							}
						}
						if (start == 999) {
							for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
								if (computer_choice_NOT_ONE[i][0] > save_number_of) { //priority3		normal rule
									start = i;
									break;
								} else if (computer_choice[i][0]
										>= 2 * save_number_of) { //break the "only" rule
									dice_one_is_called = false;
									start = i;
									save_number_of = computer_choice_NOT_ONE[start][0];
									save_dice = computer_choice_NOT_ONE[start][1];
									break;
								}
							}
						}
					}
					if (!true_for_trust_the_player_NOT_ONE(number_of, dice,	//break		
							computer_numOf_NOT_ONE, believe))
						start = 999;
					if (dice_one_is_called == true) {
						if (start != 999) {
							save_number_of = computer_choice_NOT_ONE[start][0];
							save_dice = computer_choice_NOT_ONE[start][1];
						} else {
							////////////////////////////////
							}
					}else {
						if (start != 999) {
							save_number_of = computer_choice[start][0];
							save_dice = computer_choice[start][1];
							if (computer_choice[start][1] == 1)
								dice_one_is_called = true;
						} else {
							/////////////////////////////
						}
					}
				}
				else {												//ONE is GENERIC
					computer_dice_most = find_computer_which_dice_most(computer_choice,
							max_numOF_choice);
					computer_dice_least = find_computer_which_dice_least(
							computer_numOf);
					if (Math.floor(Math.random() * 3) == 0) {
						for (i = 0; i < max_numOF_choice; i++) {
							if (computer_choice[i][0] > save_number_of//priority1		look at player's calling
							&& computer_choice[i][1] == save_dice) {
								start = i;
								save_number_of = computer_choice[start][0];
								save_dice = computer_choice[start][1];
								break;
							}
						}
					}
					if (start == 999) {
						if (!save_i_should_be_a_liar) {
							for (i = 0; i < max_numOF_choice; i++) {
								if (computer_dice_most > save_dice)	//priority2		calling our most first if same number of
										{
									if (computer_choice[i][1] == computer_dice_most
											&& computer_choice[i][0]
													>= save_number_of) {
										start = i;
										save_number_of = computer_choice[start][0];
										save_dice = computer_choice[start][1];
										break;
									}
								} else {
									if (computer_choice[i][1] == computer_dice_most
											&& computer_choice[i][0] > save_number_of) {
										start = i;
										save_number_of = computer_choice[start][0];
										save_dice = computer_choice[start][1];
										break;
									}
								}
							}
						} else {
							for (i = 0; i < max_numOF_choice; i++) {
								if (computer_dice_least > save_dice)//priority2.5		calling our least first if same number of (liar version)
										{
									if (computer_choice[i][1] == computer_dice_least
											&& computer_choice[i][0]
													>= save_number_of) {
										start = i;
										save_number_of = computer_choice[start][0];
										save_dice = computer_choice[start][1];
										break;
									}
								} else {
									if (computer_choice[i][1] == computer_dice_least
											&& computer_choice[i][0] > save_number_of) {
										start = i;
										save_number_of = computer_choice[start][0];
										save_dice = computer_choice[start][1];
										break;
									}
								}
							}
						}
					}
					if (start == 999) {
						for (i = 0; i < max_numOF_choice; i++) {
							if ((computer_choice[i][0] == save_number_of///priority3		normal rule
							&& computer_choice[i][1] > save_dice)
									|| computer_choice[i][0] > save_number_of) {
								start = i;
								save_number_of = computer_choice[start][0];
								save_dice = computer_choice[start][1];
								break;
							}
						}
					}
					
					if (!true_for_trust_the_player(number_of, dice,	//break
							computer_numOf, believe))
						start = 999;
					if (start != 999) { 
						save_number_of = computer_choice[start][0];
						save_dice = computer_choice[start][1];
						if (computer_choice[start][1] == 1)
							dice_one_is_called = true;
					}else{
						////////////////////////////////;
					}
				}
				//above: comp_to_think 
				
		
				comp_number = save_number_of;
				comp_point = save_dice;
				comp_is_only = dice_one_is_called;
				
				if ((comp_is_only == false && is_only != comp_is_only && comp_number < 2 * number)
						|| (comp_number < number)
						|| (comp_number == number && comp_point < point && parseInt(point_call) != 1)
						|| (comp_number == number && comp_point == point && comp_is_only == false)
						|| (comp_number == number && comp_point == point
								&& comp_is_only == true && is_only == true)
						|| (comp_number == number && point == 1) || start == 999) {
						count = 0;
						if (is_only) {
							for (i = 0; i < 5; i++) {
								if (player[i] == point)
									count++;
								if (computer[i] == point)
									count++;
							}
						} else {
							for (i = 0; i < 5; i++) {
								if (player[i] == point || player[i] == 1)
									count++;
								if (computer[i] == point || computer[i] == 1)
									count++;
							}
						}
						
						//print the data if open
						output22.innerHTML = "You: ";
						for (i = 0; i < 5; i++) {
							output22.innerHTML += player[i]; // set its content to the value of the "el"
							output22.innerHTML += " ";
						}
						output22.innerHTML += "<br/><br/>";
						output22.innerHTML += "Computer: ";
						for (i = 0; i < 5; i++) {
							output22.innerHTML += computer[i]; // set its content to the value of the "el"
							output22.innerHTML += " ";
						}
						
						if (count >= number) {
							alert("Computer opened. You win.");
							player_score_2++;
							comp_start_first = true;
						} else {
							alert("Computer opened. You lose.");
							computer_score_2++;
							comp_start_first = false;
						}
						start_is_clicked = false;
						document.getElementById("start_radio_lucky").checked = false;
						
						//below: printing
						/*
						output22.innerHTML += "</br></br>---TESTING LOG---</br></br>Let me check the computer: </br>";						
						output22.innerHTML += "comp_number = "	+ comp_number +"</br>comp_point = " + comp_point+"</br>comp_is_only = " + comp_is_only + "</br>start = " + start+ "</br>";						
						if (dice_one_is_called) {
							output22.innerHTML += "Using NOT_ONE method</br>";
							if (save_i_should_be_a_liar_NOT_ONE)
								output22.innerHTML += "Using i_should_be_a_liar_NOT_ONE method</br>";
							else
								output22.innerHTML += "Tell you the truth.</br>";
							for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
								output22.innerHTML += computer_choice_NOT_ONE[i][0] + " number of "
										+ computer_choice_NOT_ONE[i][1] + " only</br>";
							}
						} else {
							output22.innerHTML += "Using includeONE method</br>";
							if (save_i_should_be_a_liar)
								output22.innerHTML += "Using i_should_be_a_liar method</br>";
							else
								output22.innerHTML += "Tell you the truth.</br>";
							for (i = 0; i < max_numOF_choice; i++) {
								output22.innerHTML += computer_choice[i][0] + " number of "
										+ computer_choice[i][1] + "</br>";
							}
						}
						output22.innerHTML += "Player's Credibility is " + believe + "</br>";
						*/
						//above printing
						
						
						
				} else {
					document.getElementById("userCallNum12").value = "";
					document.getElementById("userCallNum22").value = "";
					if (comp_is_only)
						alert("Computer called " + comp_number + " - " + comp_point + " ONLY.");
					else
						alert("Computer called " + comp_number + " - " + comp_point + ".");
				}
				number = comp_number;
				point = comp_point;
				is_only = comp_is_only;
			}
	}
}



//below is the function cpp to javascript
function i_should_be_a_liar(computer_numOf) {
	if (computer_numOf[1] >= 4 || computer_numOf[2] >= 4			//priority
	|| computer_numOf[3] >= 4 || computer_numOf[4] >= 4
			|| computer_numOf[5] >= 4) 			//100% no lie
		return false;
	if (computer_numOf[1] <= 2 && computer_numOf[2] <= 2
			&& computer_numOf[3] <= 2 && computer_numOf[4] <= 2
			&& computer_numOf[5] <= 2) 			//100% lie
		return true;
	if ((computer_numOf[1] >= 3 || computer_numOf[2] >= 3
			|| computer_numOf[3] >= 3 || computer_numOf[4] >= 3
			|| computer_numOf[5] >= 3) && computer_numOf[0] > 1) //100% no lie
		return false;
	return true;									//otherwise it should be a liar
}

function i_should_be_a_liar_NOT_ONE(computer_numOf_NOT_ONE) {
	if (computer_numOf_NOT_ONE[0] >= 3 || computer_numOf_NOT_ONE[1] >= 3
			|| computer_numOf_NOT_ONE[2] >= 3 || computer_numOf_NOT_ONE[3] >= 3
			|| computer_numOf_NOT_ONE[4] >= 3 || computer_numOf_NOT_ONE[5] >= 3)//100% no lie
		return false;
	if (computer_numOf_NOT_ONE[0] <= 1 && computer_numOf_NOT_ONE[1] <= 1
			&& computer_numOf_NOT_ONE[2] <= 1 && computer_numOf_NOT_ONE[3] <= 1
			&& computer_numOf_NOT_ONE[4] <= 1 && computer_numOf_NOT_ONE[5] <= 1)//100% lie
		return true;
	return true;
}

function first_faker(computer_numOf, computer_choice) {
	save = 0;
	for (i = 1, j = 0; i < 6; i++) { //i = 1 since we don't want computer to call 1 first than 2 -6
		if (computer_numOf[i] == 0) {			//include 2, 3, 4
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			if (Math.floor(Math.random() * 100) >= 13) {				//1 - 13% lie more
				computer_choice[j][0] = 3;
				computer_choice[j][1] = i + 1;
				j++;
			}
			if (Math.floor(Math.random() * 100) >= 46) {				//1 - 46% lie more
				computer_choice[j][0] = 4;
				computer_choice[j][1] = i + 1;
				j++;
			}
		} else if (computer_numOf[i] == 1) {
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			if (Math.floor(Math.random() * 100) >= 13) {				//1 - 13% lie more
				computer_choice[j][0] = 3;
				computer_choice[j][1] = i + 1;
				j++;
			}
			if (Math.floor(Math.random() * 100) >= 46) {				//1 - 46% lie more
				computer_choice[j][0] = 4;
				computer_choice[j][1] = i + 1;
				j++;
			}
		} else if (computer_numOf[i] == 2) {
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
			if (Math.floor(Math.random() * 100) >= 79) {				//1 - 79% lie more
				computer_choice[j][0] = 5;
				computer_choice[j][1] = i + 1;
				j++;
			}
		} else if (computer_numOf[i] == 3) {//human not easy to know what i thought
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 4) {//human not easy to know what i thought
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 5) {//human not easy to know what i thought
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 5;
			computer_choice[j][1] = i + 1;
			j++;
		}
		save = j;
	}
	return save;
}

function first_faker_NOT_ONE(computer_numOf_NOT_ONE, computer_choice_NOT_ONE) {
	save = 0;

	for (i = 1, j = 0; i < 6; i++) { //i = 1 since we don't want computer to call 1 first than 2 -6///////////////////
		if (computer_numOf_NOT_ONE[i] == 0) {
			if (Math.floor(Math.random() * 100) >= 40) {				//1 - 40% lie more
				computer_choice_NOT_ONE[j][0] = 2;
				computer_choice_NOT_ONE[j][1] = i + 1;
				j++;
			}
			if (Math.floor(Math.random() * 100) >= 80) {				//1 - 80% lie more
				computer_choice_NOT_ONE[j][0] = 3;
				computer_choice_NOT_ONE[j][1] = i + 1;
				j++;
			}
		} else if (computer_numOf_NOT_ONE[i] == 1) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			if (Math.floor(Math.random() * 100) >= 80) {				//1 - 80% lie more
				computer_choice_NOT_ONE[j][0] = 3;
				computer_choice_NOT_ONE[j][1] = i + 1;
				j++;
			}
			if (Math.floor(Math.random() * 100) >= 96) {				//1 - 80% lie more
				computer_choice_NOT_ONE[j][0] = 4;
				computer_choice_NOT_ONE[j][1] = i + 1;
				j++;
			}
		} else if (computer_numOf_NOT_ONE[i] == 2) {//human not easy to know what i thought
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 3) {//human not easy to know what i thought
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 4) {//human not easy to know what i thought
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 4;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 5) {//human not easy to know what i thought
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 4;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 5;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		}
		save = j;
	}
	return save;
}

function first_check_the_method(computer_numOf, computer_choice) {
	save = 0;
	for (i = 1, j = 0; i < 6; i++) { //i = 1 since we don't want computer to call 1 first than 2 -6
		if (computer_numOf[i] == 0) {
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 1) {
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;			//	may delete -0.21
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 2) {
			computer_choice[j][0] = 2;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 4;			//	may delete -0.21
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 3) {
			computer_choice[j][0] = 3;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 5;			//	may delete -0.10
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 4) {
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 5;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 6;			// 0.00 fit
			computer_choice[j][1] = i + 1;
			j++;
		} else if (computer_numOf[i] == 5) {
			computer_choice[j][0] = 4;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 5;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 6;
			computer_choice[j][1] = i + 1;
			j++;
			computer_choice[j][0] = 7;
			computer_choice[j][1] = i + 1;
			j++;
		}
		save = j;
	}
	return save;
}

function first_check_method_NOT_ONE(computer_numOf_NOT_ONE, computer_choice_NOT_ONE) {
	save = 0;
	for (i = 0, j = 0; i < 6; i++) {
		if (computer_numOf_NOT_ONE[i] == 1) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 2) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;		// 0.00 fit
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 3) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 4;		//0.12 fit
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 4) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 4;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 5;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		} else if (computer_numOf_NOT_ONE[i] == 5) {
			computer_choice_NOT_ONE[j][0] = 2;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 3;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 4;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 5;//How to make me to be able to call SADDLE POINT
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
			computer_choice_NOT_ONE[j][0] = 6;
			computer_choice_NOT_ONE[j][1] = i + 1;
			j++;
		}
		save = j;
	}
	return save;
}

function re_check_the_method(computer_numOf, computer_choice, player_calling, player_dice, max_numOF_choice) {
	save = 0;
	for (i = 0, j = max_numOF_choice; i < 6; i++) {
		if (player_calling != 0 && player_dice != 0) {		//HUMAN PART
			if (player_dice - 1 == i) {
				if (player_calling == 2) {
					computer_choice[j][0] = 1 + computer_numOf[i];
					computer_choice[j][1] = i + 1;
					j++;
				} else if (player_calling == 3) {
					computer_choice[j][0] = 1 + computer_numOf[i];
					computer_choice[j][1] = i + 1;
					j++;
					if (Math.floor(Math.random() * 100) < 54) {	//54% he has at least two
						computer_choice[j][0] = 2 + computer_numOf[i];
						computer_choice[j][1] = i + 1;
						j++;
					}
				} else if (player_calling == 4) {
					computer_choice[j][0] = 2 + computer_numOf[i];
					computer_choice[j][1] = i + 1;
					j++;
					if (Math.floor(Math.random() * 100) < 21) {	//21% he has at least three
						computer_choice[j][0] = 3 + computer_numOf[i];
						computer_choice[j][1] = i + 1;
						j++;
					}
				} else if (player_calling == 5) {
					computer_choice[j][0] = 2 + computer_numOf[i];
					computer_choice[j][1] = i + 1;
					j++;
					computer_choice[j][0] = 3 + computer_numOf[i];
					computer_choice[j][1] = i + 1;
					j++;
					if (Math.floor(Math.random() * 100) < 5) {	//5% he has at least three
						computer_choice[j][0] = 4 + computer_numOf[i];
						computer_choice[j][1] = i + 1;
						j++;
					}
				}
			}
		}
		save = j;
	}
	return save;
}

function re_check_method_NOT_ONE(computer_numOf_NOT_ONE, computer_choice_NOT_ONE, player_calling, player_dice, max_numOF_choice_NOT_ONE) {
	save = 0;
	for (i = 0, j = max_numOF_choice_NOT_ONE; i < 6; i++) {
		if (player_calling != 0 && player_dice != 0) {		//HUMAN PART
			if (player_dice - 1 == i) {
				if (player_calling == 2) {
					if (Math.floor(Math.random() * 100) < 60) {			//20% he has at least 2
						computer_choice_NOT_ONE[j][0] = 1
								+ computer_numOf_NOT_ONE[i];
						computer_choice_NOT_ONE[j][1] = i + 1;
						j++;
					}
				} else if (player_calling == 3) {
					computer_choice_NOT_ONE[j][0] = 1 + computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
					if (Math.floor(Math.random() * 100) < 20) {			//20% he has at least 2
						computer_choice_NOT_ONE[j][0] = 2 + computer_numOf_NOT_ONE[i];
						computer_choice_NOT_ONE[j][1] = i + 1;
						j++;
					}
				} else if (player_calling == 4) {
					computer_choice_NOT_ONE[j][0] = 1
							+ computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
					computer_choice_NOT_ONE[j][0] = 2 + computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
					if (Math.floor(Math.random() * 100) < 4) {			//4% he has at least three
						computer_choice_NOT_ONE[j][0] = 3 + computer_numOf_NOT_ONE[i];
						computer_choice_NOT_ONE[j][1] = i + 1;
						j++;
					}
				} else if (player_calling == 5) {
					computer_choice_NOT_ONE[j][0] = 1
							+ computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
					computer_choice_NOT_ONE[j][0] = 2
							+ computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
					computer_choice_NOT_ONE[j][0] = 3
							+ computer_numOf_NOT_ONE[i];
					computer_choice_NOT_ONE[j][1] = i + 1;
					j++;
				}
			}
		}
		save = j;
	}
	return save;
}

function true_for_trust_the_player(number, di, computer_numOf, believe) {
	if (computer_numOf[di - 1] + 3 == number && Math.floor(Math.random() * 100) >= believe)//50% not trust	by heart
		return false;
	if (computer_numOf[di - 1] + 4 == number && Math.floor(Math.random() * 100) >= believe - 40)//90%  not trust 
		return false;
	if (computer_numOf[di - 1] + 5 <= number)	//100%  not trust
		return false;
	return true;
}

function true_for_trust_the_player_NOT_ONE(number, di, computer_numOf_NOT_ONE, believe) {
	if (computer_numOf_NOT_ONE[di - 1] + 1 == number
			&& Math.floor(Math.random() * 100) >= believe + 50)	//100% trust
		return false;
	if (computer_numOf_NOT_ONE[di - 1] + 2 == number && Math.floor(Math.random() * 100) >= believe)//50% trust
		return false;
	if (computer_numOf_NOT_ONE[di - 1] + 3 == number
			&& Math.floor(Math.random() * 100) >= believe - 35)	//15% trust
		return false;
	if (computer_numOf_NOT_ONE[di - 1] + 4 <= number)	//0% trust
		return false;
	return true;
}

function find_computer_which_dice_least(computer_numOf) {
	saving_dice = 2;
	saving_calling = computer_numOf[1];
	for (i = 1; i < 6; i++) {
		if (saving_calling >= computer_numOf[i]) {
			saving_calling = computer_numOf[i];
			saving_dice = i + 1;
		}
	}
	return saving_dice;
}

function find_computer_which_dice_least_NOT_ONE(computer_numOf_NOT_ONE) {
	saving_dice = 1;
	saving_calling = computer_numOf_NOT_ONE[0];
	for (i = 0; i < 6; i++) {
		if (saving_calling >= computer_numOf_NOT_ONE[i]) {
			saving_calling = computer_numOf_NOT_ONE[i];
			saving_dice = i + 1;
		}
	}
	return saving_dice;
}

function find_computer_which_dice_most(computer_choice, max_numOF_choice) {
	saving_dice = 2;
	saving_calling = computer_choice[1][0];
	for (i = 1; i < max_numOF_choice; i++) {
		if (saving_calling <= computer_choice[i][0]
				&& saving_dice <= computer_choice[i][1]) {
			saving_calling = computer_choice[i][0];
			saving_dice = computer_choice[i][1];
		}
	}
	return saving_dice;
}

function find_computer_which_dice_most_NOT_ONE(computer_choice_NOT_ONE, max_numOF_choice_NOT_ONE) {
	saving_dice = 1;
	saving_calling = computer_choice_NOT_ONE[0][0];
	for (i = 0; i < max_numOF_choice_NOT_ONE; i++) {
		if (saving_calling <= computer_choice_NOT_ONE[i][0]
				&& saving_dice <= computer_choice_NOT_ONE[i][1]) {
			saving_calling = computer_choice_NOT_ONE[i][0];
			saving_dice = computer_choice_NOT_ONE[i][1];
		}
	}
	return saving_dice;
}
//above is the function cpp to javascript




function openaction2() {
	document.getElementById("startradio2").checked = false;
	if(start_is_clicked == true){
		array_dice = output22.innerHTML.split(" ");  
		if(array_dice[8] == null){
			count = 0;
			if (document.getElementById("userCallOnly2").checked == true) {
				for (i = 0; i < 5; i++) {
					if (player[i] == point)
						count++;
					if (computer[i] == point)
						count++;
				}
			} else {
				for (i = 0; i < 5; i++) {
					if (player[i] == point || player[i] == 1)
						count++;
					if (computer[i] == point || computer[i] == 1)
						count++;
				}
			}

			output22.innerHTML = "You: ";
			for (i = 0; i < 5; i++) {
				output22.innerHTML += player[i]; // set its content to the value of the "el"
				output22.innerHTML += " ";
			}
			output22.innerHTML += "<br/><br/>";
			output22.innerHTML += "Computer: ";
			for (i = 0; i < 5; i++) {
				output22.innerHTML += computer[i]; // set its content to the value of the "el"
				output22.innerHTML += " ";
			}

			if (count >= number) {
				alert("You lose.");
				computer_score_2++;
				comp_start_first = false;
			} else {
				alert("You win.");
				player_score_2++;
				comp_start_first = true;
			}
			start_is_clicked = false;
		}
	}
}
</script>	
	
	</div></br>


<div class="divider1">&nbsp;</div>	

			<div id="page6">
				  <a id="lucky" class="smooth" style="clear:both;color:#888;"></a>
					<h2>Lucky</h2></br>
								
								<h4> Press "Start" to restart the game. Type the number you keep in the box. One number for one box, and then press "Shake". Press "Clear" to clear the value you have typed. Press "Result" to view your score. </h4>
								
								<h4> *LOSER GOES FIRST </h4></br>
										<form name = "f1"> <!-- the "this" in GetSelectedItem(this) is the input -->
											<input style="clear:both;color:#888;" type = "radio" id="start_radio_lucky" Name = "r2" Value = "start" onClick="StartAction(this)"> Start &emsp;
											<input style="clear:both;color:#888;" type="radio" id="resultradio" Name = "r2" value="result" onclick="resultaction_shake();"> Result </br>
											<input style="clear:both;color:#888;" type = "radio" id="shake_radio_lucky" Name = "r2" Value = "shake" onClick="ShakeAction(this)"> Shake </br>
											
											Keep: </br>
											<input style="clear:both;text-align: center;" type = "text" id="userInputNum1" Name = "choose1" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
											<input style="clear:both;text-align: center;" type = "text" id="userInputNum2" Name = "choose2" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
											<input style="clear:both;text-align: center;" type = "text" id="userInputNum3" Name = "choose3" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
											<input style="clear:both;text-align: center;" type = "text" id="userInputNum4" Name = "choose4" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
											<input style="clear:both;text-align: center;" type = "text" id="userInputNum5" Name = "choose5" onfocus="inputFocus(this)" onblur="inputBlur(this)"/></br>
											<button style="clear:both;" type="reset" value="Clear" onclick="clear_lucky_input();">Clear</button></br>
									
										</form></br>
										<div id="output"></div>

<script  type="text/javascript">
		 // Grab the output eleent
function clear_lucky_input(){
	document.getElementById("userInputNum1").value = "";
	document.getElementById("userInputNum2").value = "";
	document.getElementById("userInputNum3").value = "";
	document.getElementById("userInputNum4").value = "";
	document.getElementById("userInputNum5").value = "";
	document.getElementById("start_radio_lucky").checked = false;
	document.getElementById("shake_radio_lucky").checked = false;
}			 
		 
		 
		 
var lucky_game_end = false;	 
var output = document.getElementById('output');
	   // "el" is the parameter that references the "this" argument that was passed

var computer_score = 0;
var player_score = 0;

function resultaction_shake(){
	alert("(LUCKY) You v.s Computer is " + player_score + " : " + computer_score + ".")
}
	   
	   
function ShakeAction(el) {
	if(lucky_game_end == false){
	
		document.getElementById("start_radio_lucky").checked = false;
		
		var array_dice = output.innerHTML.split(" ");  
		var player = new Array(5);
		var computer = new Array(5);
		
		for (i = 0; i < 5; i++) {
		  player[i] = new Array(2);
		  computer[i] = new Array(2);
		}

		for (i = 0; i < 5; i++) {
			player[i][0] = array_dice[i+1];
			player[i][1] = 0;
			computer[i][0] = array_dice[i+7];
			computer[i][1] = 0;
		}

		var ipt = new Array(7776);
		var inside = new Array(7776);
		var inside_num = new Array(7776);
		for (i = 0; i < 7776; i++) {
			ipt[i] = new Array(6);
			inside[i] = new Array(6);
			inside_num[i] = new Array(6);
		}

		genarate_array(ipt, inside, inside_num);

		computer_value = return_value(computer[0][0], computer[1][0],
						computer[2][0], computer[3][0], computer[4][0], ipt);
		your_double = 0;
		your_single = 0;
		your_single_first_largest = 0;
		your_single_second_largest = 0;
		temp_for_your_single = 0;

		var keep_num = new Array(5);   
		keep_num[0] = document.getElementById("userInputNum1").value;
		keep_num[1] = document.getElementById("userInputNum2").value;
		keep_num[2] = document.getElementById("userInputNum3").value;
		keep_num[3] = document.getElementById("userInputNum4").value;
		keep_num[4] = document.getElementById("userInputNum5").value;
		
		skip_next_all = 0;
		for(j = 0; j < 5; j++){
			if(keep_num[j] != 1 && keep_num[j] != 2 && keep_num[j] != 3 && keep_num[j] != 4 && keep_num[j] != 5 && keep_num[j] != 6 && keep_num[j] != ""){
				alert("Typing Error.");
				skip_next_all = 1;
				skip_next = 1;
				break;
			}	
		}
		if(skip_next_all == 0){
			for(j = 0; j < 5; j++) {
				true_or_false = 0;
				for(k = 0; k < 5; k++){
					if((player[k][0] == keep_num[j] && player[k][1] == 0) || keep_num[j] == ""){
						if(keep_num[j] != "")
							player[k][1] = 1;
						true_or_false = 1;
						break;
					}
				}
				if (true_or_false == 0) {
					skip_next_all = 1;
					break;
				}
			}
		}
		if(skip_next_all == 0){
				for (k = 0; k < 5; k++) {
					if (player[k][1] != 1){
						player[k][0] = Math.floor((Math.random() * 6) + 1);
					}
					else
						player[k][1] = 0;
				}
		}else{
			if(skip_next != 1){
				skip_next_all = 1;
				alert("Typing Error.");
			}
		}
		
		if(skip_next_all == 0){
		
			if (return_value(player[0][0], player[1][0], player[2][0],
				player[3][0], player[4][0], ipt) < return_value(
				computer[0][0], computer[1][0], computer[2][0],
				computer[3][0], computer[4][0], ipt)) {
				output.innerHTML = "";
				output.innerHTML = "You: ";
				for (i = 0; i < 5; i++) {
					output.innerHTML += player[i][0]; // set its content to the value of the "el"
					output.innerHTML += " ";
				}
				output.innerHTML += "<br/><br/>";
				output.innerHTML += "Computer: ";
				for (i = 0; i < 5; i++) {
					output.innerHTML += computer[i][0]; // set its content to the value of the "el"
					output.innerHTML += " ";
				}
				alert("You lose.");
				computer_score++;
				document.getElementById("start_radio_lucky").checked = false;
				lucky_game_end = true;	
			}else{
						
					if (computer_value <= return_value(1, 6, 5, 4, 3, ipt)) {
						for (i = 0; i < 5; i++) {
							if (computer[i][0] == 1) {
								your_single_first_largest = 1;
							} else if (computer[i][0] != 1 && computer[i][0] > your_single_second_largest) {
								your_single_second_largest = computer[i][0];
							}
						}
						if (your_single_first_largest != 1) {
							your_single_first_largest = 6;
							your_single_second_largest = 5;
						}
					} else if (computer_value >= return_value(2, 2, 3, 4, 5, ipt) && computer_value <= return_value(1, 1, 6, 5, 4, ipt)) {
						for (i = 0; i < 5; i++) {
							for (j = 0; j < 5; j++) {
								if (i != j && computer[i][0] == computer[j][0]) {
									your_double = computer[i][0];
									break;
								}
							}
						}
						for (i = 0; i < 5; i++) {
							if (computer[i][0] != your_double) {
								if (computer[i][0] > temp_for_your_single)
									temp_for_your_single = computer[i][0];
								if (computer[i][0] == 1)
									your_single = 1;
							}
						}
						if (your_single != 1)
							your_single = temp_for_your_single;
					}
					var num_of_term_comp = 0;
					var save_comp = 0;

						//below only can shake with 2 3 4 5 6
						if (return_value(player[0][0], player[1][0], player[2][0],
								player[3][0], player[4][0], ipt) > return_value(
								computer[0][0], computer[1][0], computer[2][0],
								computer[3][0], computer[4][0], ipt)) { 

							num_of_term_comp = (computer[0][0] - 1) * 1296
									+ (computer[1][0] - 1) * 216 + (computer[2][0] - 1)
									* 36 + (computer[3][0] - 1) * 6 + (computer[4][0] - 1);
							temp_computer_value = return_value(computer[0][0], computer[1][0], computer[2][0], computer[3][0], computer[4][0], ipt);
							if (temp_computer_value >= 228964 && temp_computer_value <= 281425) {
								for (i = 0; i < 6; i++) {
									if (inside_num[num_of_term_comp][0] == 2) {
										save_comp = 1;
										break;
									}
									if (inside_num[num_of_term_comp][i] == 2) {
										save_comp = i + 1;
									}
								}
							} else if (temp_computer_value >= return_value(2, 2, 2, 3, 3, ipt)
									&& temp_computer_value <= return_value(1, 1, 1, 6, 6, ipt)) {
								for (i = 0; i < 6; i++) {
									if (inside_num[num_of_term_comp][i] == 3) {
										save_comp = i + 1;
										break;
									}
								}
							} else {
								for (i = 0; i < 6; i++) {
									if (inside_num[num_of_term_comp][i] == 2) {
										save_comp = i + 1;
									} else if (inside_num[num_of_term_comp][i] == 3) {
										save_comp = i + 1;
									} else if (inside_num[num_of_term_comp][i] == 4) {
										save_comp = i + 1;
									} else if (inside_num[num_of_term_comp][i] == 5) {
										save_comp = i + 1;
									}
								}
							}
							for (j = 0; j < 5; j++) {
									if (computer[j][0] == save_comp)
										computer[j][1] = 1;
							}

							for (j = 0; j < 5; j++) {
								if (computer[j][1] != 1){
									computer[j][0] = Math.floor((Math.random() * 6) + 1);
								}
								else
									computer[j][1] = 0;
							}
							
							if (return_value(player[0][0], player[1][0], player[2][0],
									player[3][0], player[4][0], ipt) > return_value(
									computer[0][0], computer[1][0], computer[2][0],
									computer[3][0], computer[4][0], ipt)) {
								output.innerHTML = "";
								output.innerHTML = "You: ";
								for (i = 0; i < 5; i++) {
									output.innerHTML += player[i][0]; // set its content to the value of the "el"
									output.innerHTML += " ";
								}
								output.innerHTML += "<br/><br/>";
								output.innerHTML += "Computer: ";
								for (i = 0; i < 5; i++) {
									output.innerHTML += computer[i][0]; // set its content to the value of the "el"
									output.innerHTML += " ";
								}
								alert("Computer shaked. You win.");
								player_score++;
								document.getElementById("start_radio_lucky").checked = false;
								lucky_game_end = true;	
							}
						}
						else if (return_value(player[0][0], player[1][0], player[2][0],
								player[3][0], player[4][0], ipt) == return_value(
								computer[0][0], computer[1][0], computer[2][0],
								computer[3][0], computer[4][0], ipt)) {
							output.innerHTML = "";
							output.innerHTML = "You: ";
							for (i = 0; i < 5; i++) {
								output.innerHTML += player[i][0]; // set its content to the value of the "el"
								output.innerHTML += " ";
							}
							output.innerHTML += "<br/><br/>";
							output.innerHTML += "Computer: ";
							for (i = 0; i < 5; i++) {
								output.innerHTML += computer[i][0]; // set its content to the value of the "el"
								output.innerHTML += " ";
							}
							alert("Let's restart the game.");
							lucky_game_end = true;	
						}
				}		
		}
	}
}




	   
function StartAction(el) {
	document.getElementById("userInputNum1").value = "";
	document.getElementById("userInputNum2").value = "";
	document.getElementById("userInputNum3").value = "";
	document.getElementById("userInputNum4").value = "";
	document.getElementById("userInputNum5").value = "";
	document.getElementById("shake_radio_lucky").checked = false;
	lucky_game_end = false;
	
	output.innerHTML = "You: ";
	for (k = 0; k < 5; k++) {
		output.innerHTML += Math.floor((Math.random() * 6) + 1); // set its content to the value of the "el"
		output.innerHTML += " ";
	}
	output.innerHTML += "<br/><br/>";
	output.innerHTML += "Computer: ";
	for (k = 0; k < 5; k++) {
		output.innerHTML += Math.floor((Math.random() * 6) + 1); // set its content to the value of the "el"
		output.innerHTML += " ";
	}	
	
	var array_dice = output.innerHTML.split(" ");  
	var player = new Array(5);
	var computer = new Array(5);
	
	for (i = 0; i < 5; i++) {
	  player[i] = new Array(2);
	  computer[i] = new Array(2);
	}

	for (i = 0; i < 5; i++) {
		player[i][0] = array_dice[i+1];
		player[i][1] = 0;
		computer[i][0] = array_dice[i+7];
		computer[i][1] = 0;
	}

	var ipt = new Array(7776);
	var inside = new Array(7776);
	var inside_num = new Array(7776);
	for (i = 0; i < 7776; i++) {
		ipt[i] = new Array(6);
		inside[i] = new Array(6);
		inside_num[i] = new Array(6);
	}

	genarate_array(ipt, inside, inside_num);

	computer_value = return_value(computer[0][0], computer[1][0],
					computer[2][0], computer[3][0], computer[4][0], ipt);
	your_double = 0;
	your_single = 0;
	your_single_first_largest = 0;
	your_single_second_largest = 0;
	temp_for_your_single = 0;
	
	if (computer_value <= return_value(1, 6, 5, 4, 3, ipt)) {
		for (i = 0; i < 5; i++) {
			if (computer[i][0] == 1) {
				your_single_first_largest = 1;
			} else if (computer[i][0] != 1 && computer[i][0] > your_single_second_largest) {
				your_single_second_largest = computer[i][0];
			}
		}
		if (your_single_first_largest != 1) {
			your_single_first_largest = 6;
			your_single_second_largest = 5;
		}
	} else if (computer_value >= return_value(2, 2, 3, 4, 5, ipt) && computer_value <= return_value(1, 1, 6, 5, 4, ipt)) {
		for (i = 0; i < 5; i++) {
			for (j = 0; j < 5; j++) {
				if (i != j && computer[i][0] == computer[j][0]) {
					your_double = computer[i][0];
					break;
				}
			}
		}
		for (i = 0; i < 5; i++) {
			if (computer[i][0] != your_double) {
				if (computer[i][0] > temp_for_your_single)
					temp_for_your_single = computer[i][0];
				if (computer[i][0] == 1)
					your_single = 1;
			}
		}
		if (your_single != 1)
			your_single = temp_for_your_single;
	}
	var num_of_term_comp = 0;
	var save_comp = 0;
	//below only can shake with 2 3 4 5 6
	if (return_value(player[0][0], player[1][0], player[2][0],
			player[3][0], player[4][0], ipt) > return_value(
			computer[0][0], computer[1][0], computer[2][0],
			computer[3][0], computer[4][0], ipt)) { 

		num_of_term_comp = (computer[0][0] - 1) * 1296
				+ (computer[1][0] - 1) * 216 + (computer[2][0] - 1)
				* 36 + (computer[3][0] - 1) * 6 + (computer[4][0] - 1);
		temp_computer_value = return_value(computer[0][0], computer[1][0], computer[2][0], computer[3][0], computer[4][0], ipt);
		if (temp_computer_value >= 228964 && temp_computer_value <= 281425) {
			for (i = 0; i < 6; i++) {
				if (inside_num[num_of_term_comp][0] == 2) {
					save_comp = 1;
					break;
				}
				if (inside_num[num_of_term_comp][i] == 2) {
					save_comp = i + 1;
				}
			}
		} else if (temp_computer_value >= return_value(2, 2, 2, 3, 3, ipt)
				&& temp_computer_value <= return_value(1, 1, 1, 6, 6, ipt)) {
			for (i = 0; i < 6; i++) {
				if (inside_num[num_of_term_comp][i] == 3) {
					save_comp = i + 1;
					break;
				}
			}
		} else {
			for (i = 0; i < 6; i++) {
				if (inside_num[num_of_term_comp][i] == 2) {
					save_comp = i + 1;
				} else if (inside_num[num_of_term_comp][i] == 3) {
					save_comp = i + 1;
				} else if (inside_num[num_of_term_comp][i] == 4) {
					save_comp = i + 1;
				} else if (inside_num[num_of_term_comp][i] == 5) {
					save_comp = i + 1;
				}
			}
		}
		for (j = 0; j < 5; j++) {
				if (computer[j][0] == save_comp)
					computer[j][1] = 1;
		}

		for (j = 0; j < 5; j++) {
			if (computer[j][1] != 1){
				computer[j][0] = Math.floor((Math.random() * 6) + 1);
			}
			else
				computer[j][1] = 0;
		}

		if (return_value(player[0][0], player[1][0], player[2][0],
				player[3][0], player[4][0], ipt) > return_value(
				computer[0][0], computer[1][0], computer[2][0],
				computer[3][0], computer[4][0], ipt)) {
					output.innerHTML = "";
					output.innerHTML = "You: ";
					for (i = 0; i < 5; i++) {
						output.innerHTML += player[i][0]; // set its content to the value of the "el"
						output.innerHTML += " ";
					}
					output.innerHTML += "<br/><br/>";
					output.innerHTML += "Computer: ";
					for (i = 0; i < 5; i++) {
						output.innerHTML += computer[i][0]; // set its content to the value of the "el"
						output.innerHTML += " ";
					}
					alert("Computer shaked. You win.");
					player_score++;
					document.getElementById("start_radio_lucky").checked = false;
					lucky_game_end = true;	
		}
		else{
			output.innerHTML = "";
			output.innerHTML = "You: ";
			for (i = 0; i < 5; i++) {
				output.innerHTML += player[i][0]; // set its content to the value of the "el"
				output.innerHTML += " ";
			}
			output.innerHTML += "<br/><br/>";
			output.innerHTML += "Computer: ";
			for (i = 0; i < 5; i++) {
				output.innerHTML += computer[i][0]; // set its content to the value of the "el"
				output.innerHTML += " ";
			}
			alert("Computer shaked. Your turn."); 
		}
	}
	else if (return_value(player[0][0], player[1][0], player[2][0],
			player[3][0], player[4][0], ipt) == return_value(
			computer[0][0], computer[1][0], computer[2][0],
			computer[3][0], computer[4][0], ipt)) {
		output.innerHTML = "";
		output.innerHTML = "You: ";
		for (i = 0; i < 5; i++) {
			output.innerHTML += player[i][0]; // set its content to the value of the "el"
			output.innerHTML += " ";
		}
		output.innerHTML += "<br/><br/>";
		output.innerHTML += "Computer: ";
		for (i = 0; i < 5; i++) {
			output.innerHTML += computer[i][0]; // set its content to the value of the "el"
			output.innerHTML += " ";
		}
		alert("Let's restart the game.");
	}else{
		output.innerHTML = "";
		output.innerHTML = "You: ";
		for (i = 0; i < 5; i++) {
			output.innerHTML += player[i][0]; // set its content to the value of the "el"
			output.innerHTML += " ";
		}
		output.innerHTML += "<br/><br/>";
		output.innerHTML += "Computer: ";
		for (i = 0; i < 5; i++) {
			output.innerHTML += computer[i][0]; // set its content to the value of the "el"
			output.innerHTML += " ";
		}		
		alert("Computer shaked. Your turn.");
	}
}


function genarate_array(ipt, inside, inside_num) {
	for (i = 0; i < 7776; i++) {
		
		for (k = 0; k < 6; k++) {
			inside[i][k] = 0;
		}
			
		ipt[i][5] = 0;

		ipt[i][4] = i % 6 + 1;

		if (i % 36 < 6)
			ipt[i][3] = 1;
		else if (i % 36 >= 6 && i % 36 < 12)
			ipt[i][3] = 2;
		else if (i % 36 >= 12 && i % 36 < 18)
			ipt[i][3] = 3;
		else if (i % 36 >= 18 && i % 36 < 24)
			ipt[i][3] = 4;
		else if (i % 36 >= 24 && i % 36 < 30)
			ipt[i][3] = 5;
		else
			ipt[i][3] = 6;

		if (i % 216 < 36)
			ipt[i][2] = 1;
		else if (i % 216 >= 36 && i % 216 < 72)
			ipt[i][2] = 2;
		else if (i % 216 >= 72 && i % 216 < 108)
			ipt[i][2] = 3;
		else if (i % 216 >= 108 && i % 216 < 144)
			ipt[i][2] = 4;
		else if (i % 216 >= 144 && i % 216 < 180)
			ipt[i][2] = 5;
		else if (i % 216 >= 180 && i % 216 < 216)
			ipt[i][2] = 6;

		if (i % 1296 < 216)
			ipt[i][1] = 1;
		else if (i % 1296 >= 216 && i % 1296 < 216 * 2)
			ipt[i][1] = 2;
		else if (i % 1296 >= 216 * 2 && i % 1296 < 216 * 3)
			ipt[i][1] = 3;
		else if (i % 1296 >= 216 * 3 && i % 1296 < 216 * 4)
			ipt[i][1] = 4;
		else if (i % 1296 >= 216 * 4 && i % 1296 < 216 * 5)
			ipt[i][1] = 5;
		else if (i % 1296 >= 216 * 5 && i % 1296 < 1296)
			ipt[i][1] = 6;

		if (i % 7776 < 1296)
			ipt[i][0] = 1;
		else if (i % 7776 >= 1296 && i % 7776 < 1296 * 2)
			ipt[i][0] = 2;
		else if (i % 7776 >= 1296 * 2 && i % 7776 < 1296 * 3)
			ipt[i][0] = 3;
		else if (i % 7776 >= 1296 * 3 && i % 7776 < 1296 * 4)
			ipt[i][0] = 4;
		else if (i % 7776 >= 1296 * 4 && i % 7776 < 1296 * 5)
			ipt[i][0] = 5;
		else if (i % 7776 >= 1296 * 5 && i % 7776 < 1296 * 6)
			ipt[i][0] = 6;

		for (j = 0; j < 5; j++) {
			for (k = 0; k < 6; k++) {
				if (ipt[i][j] == k + 1)
					inside[i][k]++;
			}
		}

		for (k = 0; k < 6; k++) {
			if (k != 0) {
				if (inside[i][k] == 0) {
					inside[i][k] = 0;
					inside_num[i][k] = 0;
				} else if (inside[i][k] == 1) {
					inside[i][k] = (k + 1) * (k + 1) * (k + 1);
					inside_num[i][k] = 1;
				} else if (inside[i][k] == 2) {
					inside[i][k] = (k + 1) * (k + 1) * (k + 1) * 100 + 112700;
					inside_num[i][k] = 2;
				} else if (inside[i][k] == 3) {
					inside[i][k] = ((k + 1)) * 10000 + 281425;
					inside_num[i][k] = 3;
				} else if (inside[i][k] == 4) {
					inside[i][k] = ((k + 1)) * 1000000 + 3845725;
					inside_num[i][k] = 4;
				} else if (inside[i][k] == 5) {
					inside[i][k] = ((k + 1)) + 346845941;
					inside_num[i][k] = 5;
				}
			} else {
				if (inside[i][k] == 0) {
					inside[i][k] = 0;
					inside_num[i][k] = 0;
				} else if (inside[i][k] == 1) {
					inside[i][k] = 7 * 7 * 7;
					inside_num[i][k] = 1;
				} else if (inside[i][k] == 2) {
					inside[i][k] = (7 * 7 * 7) * 100 + 112700;
					inside_num[i][k] = 2;
				} else if (inside[i][k] == 3) {
					inside[i][k] = (7) * 10000 + 281425;
					inside_num[i][k] = 3;
				} else if (inside[i][k] == 4) {
					inside[i][k] = (7) * 1000000 + 3845725;
					inside_num[i][k] = 4;
				} else if (inside[i][k] == 5) {
					inside[i][k] = (7) + 346845941;
					inside_num[i][k] = 5;
				}
			}
		}
		for (k = 0; k < 6; k++) {
			ipt[i][5] += inside[i][k];
		}
	}
}

function return_value(a,  b, c, d, e, ipt) {
	return ipt[(a - 1) * 1296 + (b - 1) * 216 + (c - 1) * 36 + (d - 1) * 6
			+ (e - 1)][5];
}

</script>
						
		</div></br></br>
		
		<div class="divider1">&nbsp;</div>	

	
	<div id="page5">
	  <a id="contact" class="smooth"></a>
		<h2>Contact</h2></br></br>
	
				
					<?php
					//echo data
					include 'config_database_value.php';
					$con=mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM database_comment");

					$rand_num = rand(1, 11);
					while($row = mysqli_fetch_array($result))
					{
						if($rand_num == $row['id']){
							echo '
								<link id="stylecall" rel="stylesheet" href="/code_comment_style.css" />
								<form action="" method="POST">
									Content: <textarea rows ="10" cols ="30" name="commentContent"></textarea></br>
									Name: <input type = "text" name = "name"></br>
									Code: <input type = "text" name = "code">
									<img src="/security_code_img/'.$row['photo'].'" class="code_img"><input type="hidden" name="'.$row['id'].'">
									<input type = "submit" value = "Post"></br>
								</form>
								</br><p><a href="/view_comment">View the comments.</a></p>
							';	
							break;
						}
					}
					mysqli_close($con);
					?>
				<!-- one page website below-->
				<!-- immediate goto
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
				<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
				<script>
				$('.smooth').on('click', function() {
					$.smoothScroll({
						scrollElement: $('body'),
						scrollTarget: '#' + this.id
					});
					
					return false;
				});
				</script>
				-->
				
				
				<p>We want to hear from you. &ensp;<a href="mailto:brendanlui@yahoo.com.hk?subject=Blog Feedback">Send us an email.</a></p>
	</div>
	
	<link rel="stylesheet" type="text/css" href="to_top_not_immediate.css">
	<div id="head">
		<div id="nav">
			 <ul>
				 <li><a id="myBtn" href="#toppest" class="subtitle" >Top</a></li>
			 </ul>
		</div>
	</div>
	
	<script>
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
	</script>

		<ul id="foot">
			</br>
			<li><a href="/my_profile">My Profile</a> © Copyright 2017. All Rights Reserved.</li>
		</ul></br>
		
<script type="text/javascript">
$(function(){
  $("#nav a").click(function(e){
    e.preventDefault();
    $('html,body').scrollTo(this.hash,this.hash); 
  });
});
$(function(){
  $("#nav_subtitle a").click(function(e){
    e.preventDefault();
    $('html,body').scrollTo(this.hash,this.hash); 
  });
});
</script>

</body>
</html>
