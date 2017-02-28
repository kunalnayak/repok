<?php
?>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="style1.css">
<style>
.newspaper {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
}
 div.part1 {
    color:white;
    padding:20px;
	height:280px;
	background-image:url("1.jpg");
	background-size: cover;
	 background-repeat: no-repeat;
    }

a:link {
    color: white;
	text-decoration:none;
}
a:hover {
    color: purple;
    text-decoration:underline;
}
a:active {
    color: blue;
}

img:hover {
    border: 1px solid #777;
}

#demo{
	width:400px;
	height:600px;
	border:1px solid black;
	display:inline-block;
}

#demo1{
	width:560px;
	height:600px;
	border:1px solid black;
	display:inline-block;
}

 div.newspaper {
    color:white;
    padding:20px;
	height:200px;
	background-image:url("2.jpg");
	background-size: cover;
	 background-repeat: no-repeat;
    }

</style>

<script type="text/javascript">
var count =0;
var picarray =["images/1.jpg","images/3.jpg","images/4.png","images/5.jpg"];

function nextpic(){
	count = (count == picarray.length - 1) ? count = 0 : count=count+1;
	var img = '<img src=" '+ picarray[count]+ '" width="100%" height="100%">';
	document.getElementById("demo").innerHTML=img;
	setTimeout('nextpic()',2000);
}
</script>
</head>

<body onload="setTimeout('nextpic()',2000)">

<div class="part1">
	<table width="100%">
	<tr>
	<td>
	<p style="color:rgb(60,155,255);margin-left:30px;font-size:20px;font-family:courier;text-decoration:bold">
		<b style="font-size:24px">JOBCENTRE.com </b></p>
		</td>
		<td>
		<p style="color:rgb(60,155,255);margin-left:30px;font-size:20px;font-family:courier;text-decoration:bold">
	<a href="hi">Jobs</a>  </p>
	</td>
	<td>		
		<p style="color:white;margin-left:30px;font-size:20px;font-family:courier;text-decoration:bold">
	<a href="exam.php">Give Exam</a></p>
	</td>
	<td>		
		<p style="color:white;margin-left:30px;font-size:20px;font-family:courier;text-decoration:bold">
	<a href="index.php">Log Out</a></p>
	</td>
	<td>
	<p style="color:rgb(60,155,255);margin-left:30px;font-size:20px;font-family:courier;text-decoration:bold">
		<span style="text-align:right;">Welcome <?php session_start(); echo $_SESSION['name']; ?></span>
	</p></td>
	</tr>
	</table>
	<p style="font-family:segoe print;font-size:18px;color:rgb(255,255,255)">Jobs Search
	<form action="jobsearch.php" method="POST">
		<input style="font-family:courier;font-size:16px;" type="text" name="jobtitle" placeholder="Job Title">
		<input style="font-family:courier;font-size:16px;" type="number" max="30" name="exp" placeholder="Exp(yrs)">
		<input style="font-family:courier;font-size:16px;" type="text" name="location" placeholder="Location">
		<input style="font-size:16px;" name="submit" value="search" type="submit" >   
	</form>
	</p>
	<table width="100%">
		<tr style="font-family:roman;font-size:18px;color:white">
		<td>Browse Jobs: 
		<a style="color:white;"href="hi">Companies</a> | 
			<a style="color:white;"href="hi">Consultants</a> | 
			<a style="color:white;"href="hi">Skills</a> | 
			<a style="color:white;"href="hi">Government</a> | 
			<a style="color:white;"href="hi">Startups</a>                 
		</td>
		<td style="text-align:center;">	
			<a style="font-size:24px;text-decoration:bold;display:inline-block;padding:10px;background-color:rgb(10,10,50);" href="uploadloggedin.php">Upload Resume</a>
		</td>
		</tr>	
	</table>
</div>
	<div id="demo" height="900" ></div>
	<div id="demo1" height="900"></div>
	<iframe src="part1.html" height="600" width="350"></iframe>
	<!--<iframe src="" width="100%"></iframe>-->

	
	<h2><span style="background-color:yellow;">USEFUL LINKS &#187;</span></h2>
<div class="newspaper" width="100%" >
<b>
<p>JOB SEEKERS</p>
<a href="index.php" style="color: black;">Home</a><br />
<a href="jobsearch.php" style="color: black;">Search Jobs</a><br />
<a href="jobsearch.php" style="color: black;">View All Jobs</a><br />
<a href="#" style="color: black;">Know About Companies</a><br />
<a href="help1.html" style="color: black;">Help</a><br />
<br>
<p>JOBS BY FUNCTIONS</p>
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Banking jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Sales Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">IT Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Software Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Finance Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Engineering Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Pharmacy Jobs in India</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Government Jobs</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">Jobs By Skills</a><br />
<a href="http://diversityjobs.com/?utm_source=bing&utm_campaign=DJ-dynamic" style="color: black;">International Jobs</a><br />

<p>ABOUT OUR SITE</p>
<a href="contact.html" style="color: black;">Contact Us</a><br />
<a href="#" style="color: black;">About Site</a><br />
<a href="#" style="color: black;">Terms of Use</a><br />
<a href="#" style="color: black;">Complaint</a><br />
</b>
</div>

� 2016 - All Rights Reserved - 
 
</body>
</html>

