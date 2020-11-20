<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>News Page</title>
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
				margin: 30px auto 10px auto;
				padding: 30px;
				background-color: #e1e1e1;
				
				border: 1px solid #000;
				border-radius: 20px;
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
			body{
				background-image: url('img/h.JPG');
				background-size: cover;

			}
		</style>
    </head>
	<body>
	<form action="addpost.php" method="POST">

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


		<!-- Home -->
		<div id="home" class="hero-area">


		
		
	
				

				<hr style="color: #orange">

				<form action="news_archive.php" method="POST">

	
<?php

 $conn=mysqli_connect("localhost","root","","lms");


   	

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$rund=mysqli_query($conn,"delete from comment where comid='".$id."'");
			if(isset($rund))
		{
			header("location:news_archive.php");
		}

}
else{
		$run1=mysqli_query($conn,"select * from news");
	while($row1=mysqli_fetch_array($run1))
	{
		echo'
			<div class="news">
				<h5>'.$row1['newsheader'].'</h5>
			<p>'.$row1['newstext'].'</p>
	<a href="showcomments.php?newsid='.$row1['newsid'].'"><input class="btn btn-info btn-sm"  value="رؤية التعليقات"></a>
</div>
		';


	}
}





	?>

			
			
			
				    
				   



		</div>
		<!-- /Home -->

<!-- Footer -->


   
    
<!-- /Footer -->
	
		<!-- preloader -->
		
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
   
      <?
   
	?>

	   </form>
	</body>
</html>
