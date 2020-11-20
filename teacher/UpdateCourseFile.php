<?php
session_start();
if($_SESSION['type']!=1)
	header("location:../login.php");
$i='';
include'../conn.php';
if(isset($_GET['de']))
	$i=$_GET['de'];
	$r1=mysqli_query($con,"select * from lecture where id='$i'");
	if(mysqli_num_rows($r1)>0)
$row=mysqli_fetch_array($r1);


?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>Update My Course File</title>
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
					<li ><a href="Home.php">Home</a></li>
                    <li class="active"><a href="ManageMyCourse.php">Manage My Course</a></li> 
					<li><a href="AddCourse.php">Add courses Files </a></li>
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
					<div class="col-md-6">
						<h3 class="section-title">Update Course File</h3>
						
						<form action="UpdateCourseFile.php?de=<?php echo $i; ?>" enctype="multipart/form-data" method="post"  class ="form-light mt-20" >

							<div class="form-group">
								<label>Coures Name</label>
								<select  name="co" class="form-control">
								<?php
								$r=mysqli_query($con,"select * from course where tuid='".$_SESSION['uid']."'");
								while($row1=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row1['cid'].'>'.$row1['cname'].'</option>


								';
								}


								?>
								</select>

                             
                               
							</div>

							<div class="form-group">
								<label>Lecture Name</label>
									<input type="text" name="coursename" class="form-control" value="<?php  echo $row['lecname'];?>" disabled>
                               
							</div>
							                                    
                         

                            <div class="form-group">
                            	<label>Course file</label>
                            	<input type="file" name="lec" class="form-control" value="<?php  echo $row['lecname'];?>">
                                
							</div>

							  
                                <button name="btn" type="submit" class="btn btn-two">Update</button>  
                            <br />
                             <label id="l1"></label>
                                
                           
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


if ($_FILES['lec']['size']==0) {
	$res=mysqli_query($con,"update lecture set cid='$c',dt='$dt',sid='".$_SESSION['uid']."',sname='".$_SESSION['uname']."' where id='".$_GET['de']."'");
if(isset($res))
{
	echo'<script>alert("Update Files Successfully without new file..!!");</script>';
}
}
else{

	move_uploaded_file("$lec", "lect/".$lecname."");
$res=mysqli_query($con,"update  lecture set cid='$c',lecname='$lecname',dt='$dt',sid='".$_SESSION['uid']."',sname='".$_SESSION['uname']."' where id='".$_GET['de']."'");
if(isset($res))
{
	echo'<script>alert("Update Files Successfully with new file..!!");</script>';
}
}




}

?>
