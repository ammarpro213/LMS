<?php
session_start();
if($_SESSION['type']!=2)
	header("location:../login.php");

include'../conn.php';



?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>View Course Content</title>
	<link rel="favicon" href="assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"/> 
	<link rel="stylesheet" href="assets/css/style.css"/>
	  <link rel="stylesheet" type="text/css" href="assets/css/styleStar.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'/> 
</head>
<body>
	<!-- Fixed navbar -->
   
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="Home.aspx">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"/></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="Home.php">Home</a></li>
					<li><a href="AddCourse.php">Add courses Files </a></li>
					<li class="active"><a href="ViewCourse.php">View Courses contain</a></li>
					        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">POST <b class="caret"></b></a>
            <ul class="dropdown-menu">
                          
            
               <li><a href="addpost.php">Add post</a></li>  
              <li><a href="news_archive.php">show all post </a></li>            
            </ul>
          </li>
					<li><a href="EvaluationTeacher.php">Evaluation Teachers</a></li>
					<li><a href="jointocourse.php">JoinToCourse</a></li>
					<li><a href="../login.php">Logout</a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

<header id="head" class="secondary" style="height: 200px;">
            <div class="container">
                    
            			<h1>Search for course</h1>
            			<br>
            			<form action="ViewCourse.php" method="post">
            				
            		
            		 <div class="col-md-6">
            		 	<input type="text" name="se" class="form-control" placeholder="Enter name or code" style="margin-left: 50%;">
                   </div>
                     <button type="submit" name="btn" class="btn btn-info" style="background-color: #53bf5a;margin-left: 70px;">Go</button> 
            		 
                     
                             
                    
                </div>
                	</form>
    </header>


					



	<!-- container -->
	  <div class="container">
    <div class="row">
				<?php
				$cn=isset($_POST['se'])?$_POST['se']:'';
				if(isset($_POST['btn']))
				{
				
				$cc=trim($cn);
$res=mysqli_query($con,"select * from lecture where 
	cid like '%".$cn."%' or lecname like '%".$cn."%'");



while($row=mysqli_fetch_array($res))
				{
					echo'
						<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/1.png" alt="" />
							</div><!--icon box top -->
							<h4 style="font-weight: bold;"> '. $row['cid'].' </h4>
								<p style="font-weight: bold;">'. $row['lecname'].'</p>
							<p style="font-weight: bold;">'.$row['sname'] .'</p>

								<p style="font-weight: bold;">'. $row['dt'] .'</p>
                            							
		  


     						<p><a href="lec/'.$row['lecname'].'" Download="lec/'.$row['lecname'].'" class="btn btn-two"><em>Download</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->';
				}
				exit();
				}

				
					$res=mysqli_query($con,"select * from lecture");
					while($row=mysqli_fetch_array($res))
				{
					echo'
						<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/1.png" alt="" />
							</div><!--icon box top -->
							<h4 style="font-weight: bold;"> '. $row['cid'].' </h4>
								<p style="font-weight: bold;">'. $row['lecname'].'</p>
							<p style="font-weight: bold;">'.$row['sname'] .'</p>

								<p style="font-weight: bold;">'. $row['dt'] .'</p>
                           							
		


     							<p><a href="lec/'.$row['lecname'].'" Download="lec/'.$row['lecname'].'" class="btn btn-two"><em>Download</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->';
				}
				
				
				?>






					
				</div>
    </div>




	<!-- /container -->
   

        
    
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
 
    
</body>
</html>

