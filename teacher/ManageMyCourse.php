<?php
session_start();
if($_SESSION['type']!=1)
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
<title>Manage My Course</title>
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
				    <li class="active"><a href="Home.php">Home</a></li>
          <li><a href="ManageMyCourse.php">Manage Course</a></li> 
          <li><a href="AddCourse.php">Add Files </a></li>
          <li><a href="pr.php">Presence </a></li>
          <li><a href="EvaluationStudent.php">Evaluation Student</a></li>
          <li><a href="ec.php">mycourse Rate</a></li>
          <li><a href="../login.php">Logout</a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

<header id="head" class="secondary" style="height: 200px;">
            <div class="container">
                    <h1>Web Edu App</h1>
                    <p>Free Online education App for e-learning and online education institute.</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-12">
						<h3 class="section-title">Manage My Course</h3>
						
						<form id="f1"  action="ManageMyCourse.php" method="post" class ="form-light mt-20" role="form">													   
                          <div class="table-responsive">
                            <table class="table">
                        <thead>
                            <tr>                               
                                <th>Lecture Name</th>
                                <th>Course Code</th> 
                                <th>Publisher  ID</th>
                                <th>Publisher  Name</th>
                                
                               <th>Publish  Date</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        	   <?php
                       require('../conn.php');
                       if(isset($_GET['de']))
                       {
                       	$id=$_GET['de'];
                       	$r=mysqli_query($con,"delete from lecture where id='$id'");
                       }
                       $rr=mysqli_query($con,"select * from lecture where sid='".$_SESSION['uid']."' and sname='".$_SESSION['uname']."' ");
                       while ($row=mysqli_fetch_array($rr)) {
                       echo'

                        <tr>
                        <td>'.$row['lecname'].'</td>
                        <td>'.$row['cid'].'</td>
                        <td>'.$row['sid'].'</td>
                        <td>'.$row['sname'].'</td>
                        <td>'.$row['dt'].'</td>
                        <td><a  href="lect/'.$row['lecname'].'" target="_blank" class="btn btn-two" style="background-color: #f06443;"><i class="fa fa-share"></i></a></td>
                        <td><a href="AddCourse.php" class="btn btn-two">Add</a></td>

                         <td><a href="UpdateCourseFile.php?de='.$row['id'].'" class="btn btn-info" style="background-color: #429136;">Update</a></td>

                         <td><a href="ManageMyCourse.php?de='.$row['id'].'" class="btn btn-danger" style="background-color: #d23c3c;">Delete</a></td>
  
                          
                    

                    </tr>

                       ';
                   }
                       ?>

                
                   
                
                
                    </tbody>
            </table>
                           
                           
						</form>
					</div>
				</div>
<h1>pdf</h1>
				 <div id="viewpdf">
   	
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
