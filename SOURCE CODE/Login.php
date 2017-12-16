<?php
ob_start();
session_start();
if($_GET['logout']==1 AND $_SESSION['id'] ) 
{
	session_destroy();
	$message="You have been logged out. Have a nice day!";
}
include("mySQL/connect.php");
if(mysqli_connect_error())
{
	die("Couldn't connect to Database");
}
				
										
					/* Sign Up */	
					
					
					if($_POST["signupSubmit"])
					{
					if(!$_POST['username']) $error.="<br />Please Enter your name";
						
					if(!$_POST["signupEmail"]) $error.="<br />please Enter Your Email";
					else if (!filter_var($_POST["signupEmail"],FILTER_VALIDATE_EMAIL)) $error.="<br />Please Enter a valid Email Address";
					if (!$_POST["signupPassword"]) $error.="<br />Please enter your password";
					else 
					{
						if(strlen($_POST["signupPassword"])<8) $error.="<br />Please enter a password longer than 8 characters";
						if(!preg_match("'[A-Z]'", $_POST["signupPassword"])) $error.="<br />Please include at least one capiltal letter";
					}		
					if($_POST["signupPasswordConfirm"] != $_POST["signupPassword"]) $error.="<br /> Password do not match";
					
					if($error) $error="There were error(s) in your signup details: <br />".$error;	
					else 
					{	
					$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['signupEmail'])."'";
					$result=mysqli_query($link, $query);
					$results=mysqli_num_rows($result); // It will return 1 if the email exists and 0 if not.
					if($results) $error="That's Email Address is already registered . Log In?";
					else 
					{
						$username=mysqli_real_escape_string($link, $_POST['username']);
						$_SESSION['username']=$username;								
						$signupEmail=mysqli_real_escape_string($link, $_POST['signupEmail']);
						$password=md5(md5($signupEmail).$_POST['signupPassword']);
						$field=mysqli_real_escape_string($link,$_POST['fields']);
						$gender=mysqli_real_escape_string($link, $_POST['gender']);
						$ip=preg_replace('#[^0-9.]#','',getenv('REMOTE_ADDR'));
						$query="INSERT INTO `users`(`username`,`email`,`password`,`field`,`gender`,`ip`)"."VALUES ('$username','$signupEmail','$password','$field','$gender','$ip')";
						$result=mysqli_query($link, $query);
						$_SESSION['id']=mysqli_insert_id($link); // It returns the user's id in a session Variable
						//Create User folder
						if(!file_exists("user/$username"))
						{
							mkdir("user/$username", 0755);
						}
						// Redirect to logged In page
						header("location:mainpage.php?u=".$_SESSION['username']);					
						
					}
					}
			}	
		/* Log In */
				if($_POST["submitInput"])
					{
						//passwordInput AND emailInput
						$email=mysqli_real_escape_string($link,$_POST['emailInput']);
						$password=md5(md5($email).$_POST['passwordInput']);
						$query="SELECT * FROM `users` WHERE `email`='$email' AND password='$password'";
						$result=mysqli_query($link, $query);
						$row=mysqli_fetch_array($result);
						
						if($row)
						{
							$_SESSION['id']=$row['id'];
						  	$_SESSION['username']=$row['username'];
						  	
							header("location:mainpage.php");
							
						}
						else
							{
								$error= "You are not registered ! Want to Register ?";
							}
						
						
					}
?>
