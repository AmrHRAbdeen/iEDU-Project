<?php
include("sidebar.php");
if($_POST["submit"]){
	
	if(!$_POST['name']){
		$error.="<br/>Please Enter Your name";
	}
	if(!$_POST['email']){
		$error.="<br/>Please Enter Your email";
	}
	if(!$_POST['mobile']){
		$error.="<br/>Please Enter Your mobile";
	}
	if(!$_POST['email']){
		$error.="<br/>Please Enter Your field";
	}
	if(!$_POST['comment']){
		$error.="<br/>Please Enter your comment";
	}
	if($_POST['email'] !="" AND !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$error.="<br /> Please enter a valid email address";
	}
	//mobile - field
	if($error){
		$result='<div class="alert alert-danger"><strong>There were some error(s) in your form:</strong>'.$error.' </div>';
	}
	/*
	 * if(mail("info@iedu-eg.com","Comment From website","Name:".$_POST['name']."
			Email: ".$_POST['email']."
			Mobile: ".$_POST['mobile']."
			Field: ".$_POST['field']."
			Comment: ".$_POST['comment']))
			 {
			$result='<div class="alert alert-success">Your form has been submitted</div>'; 
			
			}
		else
			{
				$result='<div class="alert alert-danger">Sorry There was an error sending your message , Please try again later.</div>';
			}
	 * 
	 * 
	 * */
	else {
			$msg='Name:' .$_POST['name'] ."\n"
			.'Email:' .$_POST['email'] ."\n"
			.'Mobile:'.$_POST['mobile']."\n"
			.'Field:'.$_POST['field']."\n"
			.'Comment:' .$_POST['comment'];
			if(mail('amr.abdeen2050@gmail.com','Comment From website',$msg)) {
				$result='<div class="alert alert-success">Your form has been submitted</div>'; 
			}
			else{
					$result='<div class="alert alert-danger">Sorry There was an error sending your message , Please try again later.</div>'; 
				}
			
			}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"> 
	<meta charset="UTF-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
html{
	margin:0;
	padding:0;
}
#wrapper{
	margin:0 auto;
	width:100%;
	height:100%;
	
}
.emailform {
	border: 1px solid #5bc9f9;;
	border-radius:10px;
	margin-top:20px;
	margin-bottom:20px;
	background-color:white;
}	

form{
	padding-bottom:20px;
}	
#logoImage{
	height:100px;
	width:150px;
	float:left;
	padding-top:20px;
}

.clear
{
	clear:both;
}
h3 {
	padding-top:35px;
	float:left;
	margin-left:-20px;
}
p {
	padding-left:30px;
}
.section-title::after {
	content:'_____';
	width: 100%;
	display: block;
	color:#5bc9f9;
	margin-top:-30px;
	margin-left:30px;
}
input
{
	border:none !important;
	border-bottom:1px solid #e8eaeb !important;
}	
</style>
</head>	
<body>
<div id="wrapper">	
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 emailform">
			<img id="logoImage" src="images/logo.png" />
			<h3>Agent</h3>
			<div class="clear"></div>
			<div id="error">
			
			</div>
			<p>From students to All Students:<span style="font-weight: bold"> "Share your university"</span></p>
			<p>We do believe that All students should learn:</p>
			<ul>
				<li> Computer Science Basics</li>
				<li> Graphics Software</li>
				<li> Financial Dependence</li>
			</ul>
			<h2 class="section-title"></h2>	
			<form method="post">
				<div class="form-group">
					<label for="name">Your name</label>
					<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'];?>"/>
					
				</div>
				
				<div class="form-group">
					<label for="email">Your Email</label>
					<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email'];?>"/>
					
				</div>
				
					<div class="form-group">
					<label for="mobile">Your Mobile</label>
					<input type="text" name="mobile" class="form-control" placeholder="Your mobile" value="<?php echo $_POST['mobile'];?>"/>
					
					</div>
				
					<div class="form-group">
						<label for="field">Your field</label>
						<input type="text" name="field" class="form-control" placeholder="Your field" value="<?php echo $_POST['field'];?>"/>
					
					</div>
				<div class="form-group">
					<label for="comment">Why do you want to be iEDU Agent ?</label>
					<textarea class="form-control" placeholder="I want to be iEDU agent to..." name="comment" value="<?php echo $_POST['comment'];?>"></textarea>
				</div>
				
				
				<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
			</form>
		</div>
		
	</div>
	
</div>	
</div>
	
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		

</body>		
</html>