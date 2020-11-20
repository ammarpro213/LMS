<?php
session_start();
ob_start();
if($_SESSION['type']!=0)
	header("location:../login.php");

include'../conn.php';

?>

<?php



include'../conn.php';
$n=isset($_POST['name'])?$_POST['name']:'';
$uid=isset($_POST['id'])?$_POST['id']:'';
$un=isset($_POST['username'])?$_POST['username']:'';
$pass=isset($_POST['password'])?$_POST['password']:'';
if(isset($_POST['btn'])){
$res=mysqli_query($con,"insert into user(name,uid,uname,password,type) values('$n','$uid','$un','$pass',1)");
if(isset($res))
{
	echo'<script>alert("Add Teacher successfully..!!");</script>';
}
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>Add Teacher</title>
	<link rel="favicon" href="assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"/></a>
			</div>
					<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li ><a href="Home.php">Home</a></li>
            <li class="dropdown">
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
          <li class="active"><a href="ManageTeacher.php">Manage Teachers</a></li>
					<li><a href="../login.php">Logout</a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
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
						<h3 class="section-title">Add Teacher</h3>
						
						<form id="f1" action="AddTeacher.php" method="post" class ="form-light mt-20" role="form" >
							<div class="form-group">

                              <input type="text" name="username" class="form-control" placeholder="User Name">
                               
							</div>
							<div class="form-group">
                                     <input type="Password" name="password" class="form-control" placeholder="Password">
									</div>
                            
                            <div class="form-group">
                            	<input type="text" name="name" class="form-control" placeholder="Full Name">
                                
							</div>
                            <div class="form-group">
                            	<input type="text" name="id" class="form-control" placeholder="Education Number">
                                
							</div>

                                <button name="btn" type="submit" class="btn btn-two">Create</button>  
                            <br />
                             <label id="l1"></label>
                                
                           
						</form>
					</div>
				</div>
			</div>
	<!-- /container -->

	 


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
<?php
ob_end_flush();
?>