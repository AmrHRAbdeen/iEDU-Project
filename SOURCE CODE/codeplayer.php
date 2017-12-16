<?php 
session_start();
include ("mySQL/connect.php");
$query="SELECT `description` FROM `users` WHERE id='".$_SESSION['id']."'LIMIT 1 ";

$description=$row['description'];
 if (!$_SESSION['id']) header("location:index.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['username']; ?> Profile</title>
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
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	<style>
	html
	{
		margin:0;
		padding:0;
	}
	
	#logo
	{
		
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
		#sidebar-wrapper ul li:hover
		{
			background-color:#efefef;
		}
		#codePlayerMenubar{
			width:100%;
			background-color:#e0e0e0;
			height:40px;
			border-bottom:solid 1px grey;
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   			font-weight: 300;
		}
		#codePlayerLogo{
			padding-top:10px;
			padding-left:5px;
			float:left;
			
		}
		#runButton{
			float:right;
			margin-right:10px;
			margin-top:8px;
		}
		#codePlayerToggels{
			margin:0 auto;
			width:184px;
			height:32px;
			border:1px solid grey;
			border-radius:3px;
			list-style: none;
			padding:0;
			position:relative;
			top:4px;
		}
		#codePlayerToggels li {
			float:left;
			border-right:1px solid grey;
			padding:5px 7px;
		}
		.clear{
			clear:both;
		}
		.codePlayerContainer{
			width:50%;
			height:100%;
			float:left;
			position:relative;
		}
		.codePlayerContainer textarea{
			width:100%;
			height:100%;
			border:none;
			border-right:1px solid grey;
			border-left:1px solid grey;
			box-sizing:border-box;
			font-family:monotype;
			font-size:110%;
			padding:5px;
		}
		.codeLabel{
			position:absolute;
			right:10px;
			top:10px;			
		}
		#CSSContainer , #JSContainer {
			display:none;
		}
		iframe {
			height:100%;
			position:relative;
			left:20px;
			border:none;
		}
		.selected {
			background-color:grey;
		}
	</style>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header  pull-left">
				<a class="navbar-brand" id="logo" style="margin-left:100px;"><img src="images/logo.png" width="90px" height="60px"/></a>
			</div>
			<div class="pull-right" id="myNavbar"> 
				<ul class="navbar-nav nav">
					
					  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"style="margin-top:8px !important;margin-right: 250px;"><span class="glyphicon glyphicon-th-list" style="padding-right:5px;"></span>Menu</a>
					 
				</ul>
				
			</div>
		</div>	
	</div>
	 <div id="wrapper" style="margin-top:-20px !important;">

	<div id="sidebar-wrapper" style="background-color:white;border-right: 1px solid #e5e5e5;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="color:#707070;">
                    <a href="mainpage.php" style="color:black;">
                    	
                       <span class="glyphicon glyphicon-user" style="padding-right:5px;"></span> <?php echo $_SESSION['username']; ?> 
                    </a>
                      </li>
                     <!-- 
                     	 <li>
					<div class="container contentContainer" style="margin-left: 95px;margin-bottom:5px;">
						<div class="row">
							<div class="col-md-2">			
								<textarea class="form-control " name="description" maxlength="200"  style="width:230px;height:80px;resize: none;float: left;margin-left:-100px;"><?php echo $description;?></textarea>
							</div>
						</div>
						</div>	
		
                	</li>
                
                -->
                <li>
                    <a href="index.php" style="color:black;"><span class="glyphicon glyphicon-home" style="padding-right:5px;color:#707070 !important;"></span>Dashboard</a>
                </li>
                <li style="color:#707070; !important;">
                    <a href="videos.php" style="color:black;"><span class="glyphicon glyphicon-facetime-video" style="padding-right:5px;color:#707070 !important;"></span>Videos</a>
                </li>
                <li style="color:#707070; !important;">
                    <a href="audios.php" style="color:black;"><span class="glyphicon glyphicon-music" style="padding-right:5px;color:#707070 !important;"></span>Audios</a>
                </li>
                <li style="color:#707070; !important;">
                    <a href="books.php" style="color:black;"><span class="glyphicon glyphicon-book" style="padding-right:5px;color:#707070 !important;"></span>Books</a>
                </li>
                <li style="color:#707070; !important;">
                    <a href="assignments.php" style="color:black;"><span class="glyphicon glyphicon-list-alt" style="padding-right:5px;color:#707070 !important;"></span>Assignments</a>
                </li>
                <li style="color:#707070;">
                    <a href="virtuallab.php" style="color:black;"><span class="glyphicon glyphicon-cloud" style="padding-right:5px;color:#707070 !important;"></span>Virtual Lab</a>
                </li>
                
                <li style="color:#707070;">
                    <a href="codeplayer.php" style="color:black;"><span class="glyphicon glyphicon-console" style="padding-right:5px;color:#707070 !important;"></span>Code Player</a>
                </li>
                
                <li style="color:#707070;">
                    <a href="events.php" style="color:black;"><span class="glyphicon glyphicon-bullhorn" style="padding-right:5px;color:#707070 !important;"></span>Events</a>
                </li>
                
                <li style="color:#707070 !important;">
                    <a href="contactform.php" style="color:black;"><span class="glyphicon glyphicon-envelope" style="padding-right:5px;color:#707070 !important;"></span>Contact</a>
                </li>
                <li style="color:#707070;"><a href="index.php?logout=1" style="color:black;"><span class="glyphicon glyphicon-off" style="padding-right:5px;color:#707070 !important;"></span>Log Out</a></li>
            </ul>
        </div>
        
       
         <!-- Page Content -->
        <div id="page-content-wrapper">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<!--Code Player Section -->
                       <section id="codePlayerSection">
                       		<div id="codePlayerWrapper">
                       			<div id="codePlayerMenubar">
                       				<div id="codePlayerLogo">
                       					iEDU<span style="font-weight: bold;"> Code Player</span>                       					
                       				</div>
                       				<div id="codePlayerButton">
                       					<button id="runButton">Run</button>
                       					
                       				</div>
                       				<ul id="codePlayerToggels">
                       					<li class="toggle selected">HTML</li>
                       					<li class="toggle">CSS</li>
                       					<li class="toggle">JS</li>
                       					<li class="toggle selected" style="border:none;">Result</li>
                       				</ul>
                       			</div>
                       			<div class="clear"></div>
                       			<!--HTML Code-->
                       			<div class="codePlayerContainer" id="HTMLContainer">
                       				<div class="codeLabel">HTML</div>
                       				<textarea id="HTMLCode"></textarea>                                        				
                       			</div>
                       			<!-- End of HTML Code -->
                       			
                       			<!--CSS Code-->
                       			<div class="codePlayerContainer" id="CSSContainer">
                       				<div class="codeLabel">CSS</div>
                       				<textarea id="CSSCode" style="border-left:none;"></textarea>                                        				
                       			</div>
                       			<!-- End of CSS Code -->
                       			
                       			<!--JS Code-->
                       			<div class="codePlayerContainer" id="JSContainer">
                       				<div class="codeLabel">JS</div>
                       				<textarea id="JSCode" style="border-left:none;"></textarea>                                        				
                       			</div>
                       			<!-- End of JS Code -->
                       			
                       			
                       			<!--resultContainer Code-->
                       			<div class="codePlayerContainer" id="resultContainer">
                       				<div class="codeLabel">Result</div>
                       				<iframe id="resultFrame"></iframe>                                        				
                       			</div>
                       			<!-- End of resultContainer Code -->
                       			
                       		</div>
                       	
                       	
                       	
                       	
                       </section>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
     
</div>		
		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
<script>
	$("textarea").keyup(function ()
	{
		// Modify to AJAX function instead of post
		$.post("update.php" ,{
			// Create a description variable to store the value of the text field
		description:$("textarea").val()			
		});
	});
	
	
</script>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
<script>
	var windowHeight=$(window).height();
	var codePlayerMenubarHeight=$("#codePlayerMenubar").height();
	var codePlayerContainer=windowHeight-codePlayerMenubarHeight;
	$(".codePlayerContainer").height(codePlayerContainer+"px");
	$(".toggle").click(function()
	{
		$(this).toggleClass("selected");
		var activeDiv=$(this).html();
		$("#"+activeDiv+"Container").toggle();
		var showingDivs=$(".codePlayerContainer").filter(function(){
			return($(this).css("display")!=="none");
		}).length;
		var width=100/showingDivs;
		$(".codePlayerContainer").width(width+"%");
		
	});
	$('#runButton').click(function(){
		 $('iframe').contents().find('html').html('<style>'+$("#CSSCode").val()+'</style>'+$("#HTMLCode").val());
		//Disabling eval() caz of security issues !!!
		//document.getElementById('resultFrame').contentWindow.eval($("#JSCode").val());
		
			
	});
</script>



</body>

</html>
