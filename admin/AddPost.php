
<?php
session_start();
if($_SESSION['type']!=0)
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
	<title>Add Post</title>
	<link rel="favicon" href="assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"/> 
	<link rel="stylesheet" href="assets/css/style.css"/>
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
            <li class="dropdown ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="ManageCourse.php">Manage Course</a></li>
               <li><a href="ManageCourseFile.php">Manage Course File</a></li>
               <li><a href="AddCourse.php">Add course</a></li> 
                     
            </ul>
          </li>

<li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evaluation <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="ViewEvaluationTaecher.php">View Evaluation Course</a></li>
              <li><a href="ViewEvaluationStudent.php">View Evaluation Student</a></li>
               <li><a href="AddPost.php">Add Post</a></li>       
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
                    <h1>Web Edu App</h1>
                    <p>Free Online education App for e-learning and online education institute.</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-6">
						<h3 class="section-title">Add New Post</h3>
						
						<form id="f1" action="AddPost.php" method="post" class ="form-light mt-20" role="form">
							<div class="form-group">
								<label>Teacher Tag</label>
									<select name="tname" class="form-control">
								<?php
								$r=mysqli_query($con,"select * from user where type=1");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['name'].'>'.$row['name'].'</option>


								';
								}


								?>
								</select>
							</div>


							<div class="form-group">
								<label>Course Tag</label>
									<select id="s1" name="cname" class="form-control">
								<?php
								$r=mysqli_query($con,"select * from course");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['cname'].'>'.$row['cname'].'</option>


								';
								}


								?>
								</select>
							</div>
							                                    
                            <div class="form-group">
                            	<label>Post</label>
                            	<textarea type="text" name="txt" class="form-control" placeholder="type your evaluating  Post here"></textarea>
                                
							</div>

                                <button name="btn" type="submit" class="btn btn-two">Post</button>  
                            <br />
                      
                                
                           
						</form>
					</div>
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
<?php
$dt=date("Y-m-d");

$tname=isset($_POST['tname'])?$_POST['tname']:'';
$cname=isset($_POST['cname'])?$_POST['cname']:'';
$txt=isset($_POST['txt'])?$_POST['txt']:'';




if(isset($_POST['btn'])){

	$r=mysqli_query($con,"select * from post where tname='$tname' and cname='$cname'");
	if(mysqli_num_rows($r)>0)
			echo'<script>alert("your post already Exists");</script>';

else{
$res=mysqli_query($con,"insert into post(tname,cname,dt,text) values('$tname','$cname','$dt','$txt')");
if(isset($res))
{
	echo'<script>alert("Add Post  Successfully..!!");</script>';
}
}
}
?>

    
</body>
</html>

