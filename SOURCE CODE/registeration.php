<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registeration Page</title>

	<style>
		#wrapper 
		{
			margin:0 auto;
			width:1000px;
			height:1000px;
			background-image:url(images/1pxBG.png);
			background-repeat:repeat-x;
		}
		#logo
		{
			padding-top:20px;
			padding-left:20px;
		}
		#profile
		{
			width : 300px;
			height: 100px;
			margin: 0 auto;
			color : white ;
			font-weight: bold;
			padding-top: 80px;
		}
		#profilePic
		{
			position:absolute;
			margin-left:380px;
			margin-top:-30px;
		}
		button
		{
			border-radius:5px;
			float:right;
			margin-right:100px;
			margin-top:300px;
			width:80px;
			height:40px;
			font-size:1.1em;
			color:white;
			background-color:grey;
		}
	</style>



</head>
<body>
	<div id="wrapper">
		<div id="logo">
			<img src="images/logo.png" width="140px" height="70px"/>
		</div>
		<h3 id="profile"> Let's choose your profile picture </h3>
		<div id="profilePic">
		<img src="images/MaleProfile.png" width="200px" height="200px"/>
		</div>
		<button>Next</button>

		<!--Log Out : will be in the user profile Just to remeber it will exsist-->
		<form action="index.php" method="post">
			<input type="submit" value="log Out">
		</form>


	</div>
</body>
</html>