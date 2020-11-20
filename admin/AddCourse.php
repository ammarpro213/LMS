<?php
session_start();


include'../conn.php';

?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>Add Course</title>
	<link rel="favicon" href="assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"/> 
	<link rel="stylesheet" href="assets/css/style.css"/>
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'/> 
</head>
<body>
	
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
            <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="ManageCourse.php">Manage Course</a></li>
               <li><a href="ManageCourseFile.php">Manage Course File</a></li>
               <li><a href="AddCourse.php">Add course</a></li> 
                          
            </ul>
          </li>

<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evaluation <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="ViewEvaluationTaecher.php">View Evaluation Course</a></li>
              <li><a href="ViewEvaluationStudent.php">View Evaluation Student</a></li>
                     
            </ul>
          </li>
          <li><a href="ManageStudent.php">Manage Student</a></li>
          <li><a href="ManageTeacher.php">Manage Teachers</a></li>
					<li><a href="../login.php">Logout</a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

<header id="head" class="secondary" style="height: 200px;">
            <div class="container">
                    <h1>L M S</h1>
                    <p>Free Online education App for e-learning and online education institute.</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-6">
						<h3 class="section-title">Add New Course</h3>
						
						<form  action="AddCourse.php" method="post" class ="form-light mt-20">
							<div class="form-group">
								<label>Coures Name</label>
									<input type="text" name="cn" class="form-control" placeholder="Course Name">
                               
							</div>
							                                    
                            <div class="form-group">
                            	<label>Course Code</label>
                            	<input type="text" name="cd" class="form-control" placeholder="Course Code">
                                
							</div>

							<div class="form-group">
								<label>Teacher Name</label>
									<select name="tname" class="form-control">
								<?php
								$r=mysqli_query($con,"select * from user where type=1");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['uid'].'>'.$row['name'].'</option>


								';
								}


								?>
								</select>
							</div>


                                <button type="submit" class="btn btn-two" name="btn">Add</button>  
                            <br />
               
                                
                           
						</form>
					</div>
				</div>
			</div>
	<!-- /container -->
   

       <?php


$cn=isset($_POST['cn'])?$_POST['cn']:'';
$cd=isset($_POST['cd'])?$_POST['cd']:'';
$tuid=isset($_POST['tname'])?$_POST['tname']:'';




if(isset($_POST['btn'])){
$r1=mysqli_query($con,"select * from user where uid='$tuid'");
$q=mysqli_fetch_array($r1);


	$r=mysqli_query($con,"select * from course where cid='$cd' and cname='$cn'and tname='$tuid'");
	if(mysqli_num_rows($r)>0)
			echo'<script>alert("Course already Exists");</script>';

else{

	
$res=mysqli_query($con,"insert into course(cid,cname,tname,tuid) values('$cd','$cn','".$q['name']."','$tuid')");
if(isset($res))
{
	echo'<script>alert("Course Added Successfully..!!");</script>';
}
}
}
?> 
    
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

