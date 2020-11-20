
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Comments Page</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
		<style type="text/css">
			
			.news{
				width: 50%;
				margin: 80px auto 0px auto;
				padding: 10px;
				background-color: #f8f8f8;
				
				border: 1px solid #000;
				border-radius: 30px;
			}
			.he{
					width: 50%;
					padding: 5px;
					font-size: 20px;

				margin: 50px auto 10px auto;
				border: 1px solid #000;
				border-radius: 20px;
				background-color: #88f;

				text-align: center;
			}
			.news1{
				width: 30%;
				margin: auto;
				padding: 10px;
				background-color: #eee;
				border: 1px solid #000;
				border-radius: 20px;
				
			}
				.news2{
				width: 50%;
				margin: auto;
				padding: 10px;
			
				
			}
			.addcomment{
				width: 50%;
				margin: auto;
				padding: 10px;
				background-color: #f7f7f7;
			}
			.te{
				background-color: #fff;
			}
			body{
				background-image: url('img/h.JPG');
				background-size: cover;
			}
		</style>
    </head>
	<body>
	

	  <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
   <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="AddCourse.php">Add courses Files </a></li>
                    <li><a href="ViewCourse.php">View Courses contain</a></li>
                            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">POST <b class="caret"></b></a>
            <ul class="dropdown-menu">
                          
            
               <li><a href="addpost.php">Add post</a></li>  
              <li><a href="news_archive.php">show all post </a></li>            
            </ul>
          </li>
                    <li class="active"><a href="EvaluationTeacher.php">Evaluation Teachers</a></li>
                    <li><a href="jointocourse.php">JoinToCourse</a></li>
                    <li><a href="../login.php">Logout</a></li>
                    

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
<?php
include'../conn.php';




$newsid=isset($_GET['newsid'])?$_GET['newsid']:'';
$_SESSION['nid']=$newsid;


$getnew=mysqli_query($con,"select * from news where newsid='".$_SESSION['nid']."'");
$row=mysqli_fetch_array($getnew);
$com=(isset($_POST['com']))?$_POST['com']:'';
echo'
<div class="news">
<form action="showcomments.php?newsid='.$_SESSION['nid'].'" method="POST">

	<hr><input class="form-control te" type="text" name="com">
<br>
<input class="btn btn-success btn-lg" type="submit"  name="addcom" value="add Comment">
<a href="news_archive.php" class="btn btn-primary btn-lg" >Back</a>
</div>
</form>
';


if(isset($_POST['addcom']))
{

	$ins=mysqli_query($con,"insert into comment(stuname,newsid,com)values(
'".$_SESSION['uname']."',
'".$_SESSION['nid']."',
'".$com."')");
}

	$getcom=mysqli_query($con,"select * from comment where newsid='".$_SESSION['nid']."'");
	if(mysqli_num_rows($getcom) > 0)
		echo'<div class="he" style="	color:#fff;">
<h2>all Comments :</h2>
</div>
	';
	while($cm=mysqli_fetch_array($getcom))
	{
		echo'
		<div style="	width: 50%;
				margin: auto;
				padding: 10px;
				background-color: #f4f4f4;">
		<h2 style="color:#88f;">'.$cm['stuname'].'</h2>
		<h4>'.$cm['com'].'</h4>

		<br>
		<hr style="color:orange;">
		</div>

		';
	}



?>