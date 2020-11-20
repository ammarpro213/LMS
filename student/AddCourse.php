
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
	<!-- Fixed navbar -->
    <form id="f1" method="post" action="AddCourse.php" enctype="multipart/form-data">
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
					<li class="active"><a href="AddCourse.php">Add courses Files </a></li>
					<li><a href="ViewCourse.php">View Courses contain</a></li>
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
						<h3 class="section-title"> Upload Your Files</h3>
						
						<form  action="AddCourse.php" method="post" enctype="multipart/form-data" class ="form-light mt-20" role="form">
							<div class="form-group">
								<label>Coures Name</label>
								<select  name="co" class="form-control">
								<?php
								$r=mysqli_query($con,"select * from course");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['cid'].'>'.$row['cname'].'</option>


								';
								}


								?>
								</select>

                             
                               
							</div>
							                                    
                            <div class="form-group">
                            	<label>Course File</label>
                            	<input type="File" name="lec" class="form-control" placeholder=" Number">
                                
							</div>

                                <button type="submit" name="btn" class="btn btn-two">Upload</button>  
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
   
    
</body>
</html>
<?php
$dt=date("Y-m-d");

$c=isset($_POST['co'])?$_POST['co']:'';

$lecname=isset($_FILES['lec']['name'])?$_FILES['lec']['name']:'';

$lec=isset($_FILES['lec']['tmp_name'])?$_FILES['lec']['tmp_name']:'';




if(isset($_POST['btn'])){
	$r=mysqli_query($con,"select * from lecture where cid='$c' and lecname='$lecname' and sid='".$_SESSION['uid']."'");
	if(mysqli_num_rows($r)>0)
			echo'<script>alert("Files already Exists");</script>';

else{

	move_uploaded_file("$lec", "lec/".$lecname."");
$res=mysqli_query($con,"insert into lecture(cid,lecname,dt,sid,sname) values('$c','$lecname','$dt','".$_SESSION['uid']."','".$_SESSION['uname']."')");
if(isset($res))
{
	echo'<script>alert("Add Files Successfully..!!");</script>';
}
}
}
?>
