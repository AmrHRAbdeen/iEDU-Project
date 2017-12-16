<?php
session_start();

echo $_SESSION['firstname'];





?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $_POST['signupFirstName']. $_POST['signupLasteName'] ?> Profile</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<style type="text/css">
	#leftSideBar
	{
		width:250px;
		height:1200px;
		background-color:#1b9fcf;
		z-index:100;
		float:left;
	}
	#profile img
	{
		margin-top:50px;
		margin-left:50px;
	}
	#profile h3
	{
		color:white;
		margin-left:80px;
	}
	#updates
	{
		margin-left:20px;
		margin-top:50px;
		color:white;
	}

	#coursesupdtes
	{
	text-align:center;
	margin-left:-30px;
	margin-top:50px;
	}
	#rightSideBar
	{
		padding-top:100px;
	}

	#rightSideBar img
	{
		margin-left:30px;
	}

	#collageUpdates
	{
		background-color:#1b9fcf;
		height:40px;
		width:1000px;
		border-radius:20px;
		float:left;
		margin-left:30px;

	}

	#collageUpdates ul li
	{
		float:left;
		padding-right:60px;
		margin-top:-6px;
		color:white;
		font-size:20px;
	}

	#EngineeringCourses
	{
		margin-top:50px;
		margin-right:50px;
	}

	#upload
	{
		background-color:white;
		width:200px;
		height:40px;
		border-radius:20px;
		margin-top:60px;
		margin-left:5px;
	}
	
	#upload input[type=file]
	{
		margin-top:8px;
		margin-left:20px;
		color:#1b9fcf;

	}

	</style>
</head>
<body>
<div id="wrapper">
	<div id="leftSideBar">
		<div id="profile">
			<img src="images/MaleProfile.png" />
			<h3> User name </h3>
		</div>	
		<div id="updates">
			<h3> University: </h3>
			<h3> Collage: </h3>
			<h3> Year: </h3>
			<h3 id="coursesupdtes"> Courses Updates </h3>
			<div id="EngineeringCourses">
			<h4> Mechanical Engineering </h4>
			<h4> Mechanical Engineering </h4>
			<h4> Mechanical Engineering </h4>
			<h4> Mechanical Engineering </h4>
			</div>
			
			<div id="upload">
				<input type="file" name="YourVideo" accept="video/*" />

			</div>
		</div>
	</div>
	<!--Read the Comments ,Carefully-->
	<div id="collageUpdates">
		<ul>
		 	<li>Courses Updates</li>
		 	<!--It has the capability to share his Exp. with iEDU "Science Gallery"-->
		 	<li>Your Virtual Lab</li>
		 	<!--Courses Instructors/Doctors considered your field mates-->
		 	<li>Field Mates</li>
		 	<!--Small personal eCommerce Website/ Containing the user's videos-->
		 	<li>Your Products</li>
		 	<!--Full Time and part Time ( Employee or Freelancer)-->
		 	<li>Jobs</li>
			<!--Collage and Job Events-->
		 	<li>Events</li>
		</ul>	
	</div>

	<div id="rightSideBar">
		<img src="images/video.png"/>
		<img src="images/video.png"/>
		<img src="images/video.png"/>
		<img src="images/video.png"/>
	</div>
</div>
		<!--Log Out : will be in the user profile Just to remeber it will exsist-->
		<form action="index.php" method="post">
			<input type="submit" value="log Out">
		</form>



</body>
</html>