<?php include 'get_ip_address_and_insert_in_database.php';?>
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
</head>

<title>Dadiu</title>

<body>

	<div id="page">
	<a href="/">
		<div id="logo">
			<img src="/img/dadiu.png" alt="dai01" class="logo_dadiu">
		</div>
	</a>
	
<link rel="stylesheet" href="/responsive_bar_style.css">
<div class="topnav" id="myTopnav">
  <a href="/">Home</a>
  <a href="#" id="myBtn">About</a>  
  
  <!-- <a href="/movie_warning.php">This Tube</a> -->
  <a href="/movie_no_pre.php">This Tube</a>
  
  <a href="/piano.php">Music Studio</a>
  <a href="/login_not_yet.php">Login</a>
  <a href="/academic.php">Profile</a>
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


<link rel="stylesheet" href="/modal_box_style.css">
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><font style="font-size:30px;">This Tube</font> is a movie channel
	, and in <font style="font-size:30px;">Music Studio</font> you can compose songs and save it to play
	, and in <font style="font-size:30px;">Login</font> you can order everything.</p>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	<!--
		<div id="nav_home">
			<ul>
				<li><a href="/movie_warning">This Tube</a></li> 
				<li><a href="/login_not_yet">Order All</a></li>
				<li><a href="/academic">Profile</a></li>
			</ul>	
		</div>
		<div id="content">
			<h3></h3>
			<p>
			</p>
		</div></br></br></br></br></br></br></br></br></br>
	-->	
		<ul id="foot">
			</br>
			<li>© Copyright 2017. All Rights Reserved.</li>
		</ul></br>

	</div>
</body>
</html>