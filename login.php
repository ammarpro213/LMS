<?php
session_start();
	$_SESSION['name']='';
	$_SESSION['uname']='';
	$_SESSION['uid']='';
	$_SESSION['type']='';
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Login</title>
	<link rel="favicon" href="student/assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="student/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="student/assets/css/font-awesome.min.css"/>
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="student/assets/css/bootstrap-theme.css" media="screen"/>
	<link rel="stylesheet" href="student/assets/css/style.css"/>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="student/assets/images/logo.png" alt="Techro HTML5 template"/></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="login.php">Login</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
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
						<h3 class="section-title"> Login in Your Account</h3>
						
						<form action="login.php" method="post" class ="form-light mt-20" >
							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" class="form-control" placeholder="User Name">
                             
							</div>
									<div class="form-group">
										<label>Password</label>
							<input type="Password" name="password" class="form-control" placeholder="Password">

                                     
									</div>
                            <div class="form-group">
                               
                               <input type="submit" value="Login" class="btn btn-two" name="btn"></input>  
                            
                            <a href="student/SignUp.php"> Click here for Student New Account</a>
                            <br />

                            
                                
                            </div>
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


include'conn.php';
$un=isset($_POST['username'])?$_POST['username']:'';
$pass=isset($_POST['password'])?$_POST['password']:'';
if(isset($_POST['btn'])){
$res=mysqli_query($con,"select * from user where uname='".$un."'and password='$pass'");
if(mysqli_num_rows($res)>0)
{
	$row=mysqli_fetch_array($res);
	$_SESSION['name']=$row['name'];
	$_SESSION['uname']=$un;
	$_SESSION['uid']=$row['uid'];
	$_SESSION['type']=$row['type'];
	$tt=$row['type'];
	if($tt==0)
	{
echo'<meta http-equiv="refresh" content=0;url=admin/Home.php>';
	}
	else if($tt==1)
	{
echo'<meta http-equiv="refresh" content=0;url=teacher/Home.php>';
	}

	else if($tt==2)
	{
		echo'<meta http-equiv="refresh" content=0;url=student/Home.php>';
	}
}
}
?>