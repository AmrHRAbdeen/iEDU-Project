<?php 
ob_start();
session_start();
require_once __DIR__ . '/facebook/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '757964754360580',
  'app_secret' => '0e01c0a241e8f173f701f9d57939a866',
  'default_graph_version' => 'v2.8',
  ]);
  
$redirect = 'http://iedu-eg.com/facebook/';

$helper = $fb->getRedirectLoginHelper();

include("Login.php");
if($_SESSION['id']) 
{
	header("location: mainpage.php?u=".$_SESSION['username']);
}
if($_GET['logout']==1)
{
	session_destroy();
}

 ?>
 <!-- Analytics Tracking -->
<?php include_once("analyticsTrack.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>iEDU Interactive Education</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<meta charset="UTF-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<style>
	html
	{
		margin:0;
		padding:0;
	}
	#ieduWrapper
	{	
		margin:0 auto;
		width:100%;
		background: url(images/collagebg.png) no-repeat;
	}
	
	#logo img
	{
		padding-bottom: 30px;
	}

		.clear
		{
			clear:both;
		}
		#infoGrapic
		{
			
			margin-left:35px;
			float:left;
		}
		
	
		#createAccount
		{
			width:600px;
			float:right;
			padding-right:200px;
		}
		#errors
		{
			margin-right:225px;
			float:right;
			margin-top:20px;
			
		}
		#message
		{
			margin-right:225px;
			float:right;
			margin-top:20px;
			
		}
	/* Here You can control FB button CSS*/
		.facebookButton
		{	
			border-radius:5px;
			float:right;
			margin-right:200px;
			margin-top:15px;
			background-color:#3b5998;
    		text-decoration: none; 
    		box-shadow: none;
   }
  
   .facebookButton img
   {
   	 margin:0 auto;
   	margin-right:8px;
   
   }
   // USe Media Query if necessary 
	@media (max-width:480px){
		
		.facebookButton , .form-group
		{	
			border-radius:5px;
			margin-top:25px;	
    		text-decoration: none; 
    		box-shadow: none;
    		margin:0 auto;
  		 }
  		 
  
	}	
								
		
	</style>
</head>
<body>
<script type="text/javascript" src="./facebook/fb.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>	
<div id="ieduWrapper">
	<!-- Login -->
	<div class="navbar navbar-default">
		<div class="container-fluid heightFunction">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<a class="navbar-brand" id="logo"><img src="images/logo.png" width="90px" height="60px"/></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar"> 
				<form class="navbar-form navbar-right" id="loginValidation" method="post">
					
					<div class="form-group">
						<input type="email" palceholder="Email" class="form-control" value="<?php echo addslashes($_POST["emailInput"]); ?>"   placeholder="Enter your Email" name="emailInput" required/>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="passwordInput"  value="<?php echo addslashes($_POST["passwordInput"]); ?>" required/>
					</div>
					
					<button type="submit" class="btn btn-success" name="submitInput" value="log In"><span class="glyphicon glyphicon-log-in" style="padding-right:8px;"></span>Log In</button>
					
				</form>
				
			</div>
		</div>	
	</div>
	<!--WARNING: Content is used to set the wrapper height in JS func.-->
	<div id="content">
		<!-- Right Area -->		
		<div id="infoGrapic">	
		</div>
	
		<!--Create New Account -->
		
		<div id="createAccount" style="padding-top:70px;">
		<form id="createNewAccount" method="post">
					<h4 style="color:white;"><span class="glyphicon glyphicon-education" style="color:white;"></span> Create a new account</h4>
			
					<div class="form-group">
						<input type="text"  placeholder="Your name" name="username" class="form-control" value="<?php echo addslashes($_POST["username"]); ?>" required/>
					</div>
				
					
					
					<div class="form-group">
						<input type="email" name="signupEmail"  placeholder="Enter your email address" class="form-control" value="<?php echo addslashes($_POST["signupEmail"]); ?>" required/>
					</div>
					
					
					<div class="form-group">
						<input type="password" name="signupPassword" class="form-control"  placeholder="Enter your password" required/>
					</div>
					
					
					<div class="form-group">
						<input type="password" name="signupPasswordConfirm" class="form-control"  placeholder="Confirm password" required/>
					</div>
					
					
					<div class="form-group">
    					<label for="exampleSelect1" style="color: white;">Field of Interest</label>
    					    <select class="form-control" id="fields" name="fields">
    					    	<option value=""></option>	    	
    					      <option value="m">Mechanical Engineering</option>
    						 <option value="me">Mechatronics Engineering</option>
    						 <option value="e">Electrical Engineering</option>
    						 <option value="cs">Computer Science</option>
    						 <option value="b">Businesss</option>
    						</select>
    					  </div>
    					  
    					   <div class="form-group">
    					<label for="exampleSelect1" style="color: white;">Gender</label>
    					    <select class="form-control" id="gender" name="gender">
    					    	<option value="">Select your gender</option>
    					      <option value="m">Male</option>
    						 <option value="f">Female</option>
    						</select>
    					  </div>
					
					<button type="submit" class="btn btn-success" name="signupSubmit" value="Create account"><span class="glyphicon glyphicon-user"  style="padding-right:8px;"></span>Create account</button>
					
				</form>
		
			</div>
			<div class="clear"></div>
			
			
			<!--Facebook Button-->
				<?php 
						$permissions  = ['email'];
						$loginUrl = $helper->getLoginUrl($redirect,$permissions);
						echo '	
								<a href="' . $loginUrl . '" style="text-decoration:none;width:400px;height:50px;text-align:center;" id="facebookMediaButton" class="btn btn-primary btn-block facebookButton">
								<h5 style="color:white;font-familt:PT_Sans,sans-serif;margin-top:3px;"><img src="images/facebookRec.png" width="30px" height="30px" />Continue with Facebook </h5>
							    <span class="glyphicon glyphicon-forward" style="color:white;float:right;margin-top:-34px;margin-right:70px;text-align:center;"></span>
							    </a>
								
								';
				?>
			<!--Sperator Div -->
			 <div class="clear"></div>
			 <!-- Alert ERRORS -->
			 <?php
				if($error)
				{
					echo '<div id="errors" class="alert alert-danger">
					<h4>'.addslashes($error).'</h4>
					</div>';
				}
				if($message)
				{
					echo '<div class="alert alert-success" id="message">
					<h4>'.addslashes($message).'</h4>
					</div>';
				}		
			?>
			</div>
			
		<div class="clear"></div>
<footer id="footer" style="float:bottom; color:white;text-align: center; background-color: grey;width:100%;height:40px;opacity: 0.31;">
 <p style="color:white;text-align: center;padding-top:10px;">Copyrights reserved for iEDU || Alpha version α-1.0 developed by : Amr Abdeen</p> 	
</footer>
</div>			
		
		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
<script>
	$(function(){

    var $header = $('.heightFunction');
    var $footer = $('#footer');
    var $content = $('#content');
    var $window = $(window).on('resize', function(){
       var height = $(this).height() - $header.height() + $footer.height();
       $content.height(height);
    }).trigger('resize'); //on page load

});
	
</script>
</body>

</html>
