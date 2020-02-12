<html>
<head>
	<title>Caldwell University survey form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
<div id =header>
<center><h1><img src="Capture.JPG" width="394" height="95"  alt=""/></h1>
<h1>CALDWELL UNIVERSITY COMPUTING AND COMMUNICATION EQUIPMENT SURVEY FORM</h1>
 
</center>
</div>
<?php
$Survey1 = $_POST['studentId'];
$Survey2 = $_POST['year'];
$Survey3 = $_POST['gradyear'];
$Survey4 = $_POST['major'];
$Survey5 = $_POST['socialnumber'];
$Survey6 = $_POST['DOB'];
$Survey7 = $_POST['gender'];
$Survey8 = $_POST['checkbox1'];
$Survey9 = $_POST['checkbox2'];
$Survey10 = $_POST['checkbox3'];
$Survey11 = $_POST['checkbox4'];
$Survey12 = $_POST['checkbox5'];
$Survey13 = $_POST['checkbox6'];
$Survey14 = $_POST['checkbox7'];
$Survey15 = $_POST['checkbox8'];
$Survey16 = $_POST['checkbox9'];
$Survey17 = $_POST['club'];
$Survey18 = $_POST['smedia.1'];
$Survey19 = $_POST['smedia.2'];
$Survey20 = $_POST['smedia.3'];
$Survey21 = $_POST['smedia.4'];
$Survey22 = $_POST['smedia.5'];
$Survey23 = $_POST['smedia.6'];
$Survey24 = $_POST['smedia.7'];
$Survey25 = $_POST['smedia.8'];
$Survey26 = $_POST['MtComAct'];
$Survey27 = $_POST['q1'];
$Survey28 = $_POST['q2'];
$Survey29 = $_POST['q3'];
$Survey30 = $_POST['q4'];
$Survey31 = $_POST['q5'];
$Survey32 = $_POST['q6'];
$Survey33 = $_POST['q7'];
$Survey34 = $_POST['q8'];
$Survey35 = $_POST['q9'];
$Survey36 = $_POST['q10'];
$Survey37 = $_POST['q11'];
$Survey38 = $_POST['q12'];
$Survey39 = $_POST['q13'];

$servername = "localhost";
$username = "webuser";
$password = "d0nkey5";
$dbname = "cs355";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ArunSurvey (StudentID, Year, GradYear, Major,
 NSocialMedia, DOB, Gender, TV, Internet, Smartphone, WComputer, 
 AComputer, MS2016, Type, More2SMedia, 1000Friends, MemberClub, 
 Twitter, Facebook, GooglePlus, LinkedIn, Youtube, Skype, Viber, 
 Instagram, MostActivity, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9,
  Q10, Q11, Q12, Q13)
  
VALUES ('$Survey1', '$Survey2', '$Survey3', '$Survey4', '$Survey5', '$Survey6', '$Survey7', '$Survey8', '$Survey9', '$Survey10', '$Survey11', '$Survey12', '$Survey13', '$Survey14', '$Survey15', '$Survey16', '$Survey17', '$Survey18', '$Survey19', '$Survey20', '$Survey21', '$Survey22', '$Survey23', '$Survey24', '$Survey25', '$Survey26', '$Survey27', '$Survey28', '$Survey29', '$Survey30', '$Survey31', '$Survey32', '$Survey33', '$Survey34', '$Survey35', '$Survey36', '$Survey37', '$Survey38', '$Survey39')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<div>
<h1> THANK YOU FOR YOUR RESPONSE</h1>

<form method="post" id="survey" action="class.html">
<center>
<h2> THANK YOU FOR YOUR RESPONSE</h2>
    <p>&nbsp;</p>
    <p><img src="thank.png"><br>
       
</p>
     <p>
       <input type="submit" id="go_back" name="submit" value="">
  </p>
     <p>&nbsp; </p>
 </center>
</form>
<br>
</div>
<div id ="footer">
    ©Copyright Arun joshi 2017&nbsp;&nbsp;&nbsp;
    </div>