<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>free-educational-responsive-web-template-webEdu</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">

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
		<!-- /Header -->
<header id="head" class="secondary" style="height: 50px;">
            <div class="container">
                    <h3>Add Post</h3>
                   
                </div>
    </header>

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/h.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					
                <input type="text" placeholder="post title" Style="width:440px;margin-top:20px; color:blue; font-size:20px" name="nn"> <br> <br>
<textarea rows="50" cols="50" Style="height:150px; color:blue;font-size:25px" name="tarea" placeholder="write your post"></textarea> <br>
 <br>

 <input type="submit" value="نشر" class="btn btn-success btn-block btn-lg" name="btn1" Style="width:230px;">
			
                        
				</div>
			</div>

		</div>
		<!-- /Home -->
      <!-- container -->
	
<!-- Footer -->



    
<!-- /Footer -->
	
		<!-- preloader -->
		
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
      </form>
      <?php

      include'../conn.php';
      $head=isset($_POST['nn'])?$_POST['nn']:'';
      $post=isset($_POST['tarea'])?$_POST['tarea']:'';

      if(isset($_POST['btn1']))
      {
      if(empty($head)||empty($post))
      {
      	         	echo'<script>alert("fill the fieldes..");</script>';

      }
      else{
      	
     
         ##$conn=mysqli_connect("localhost","root","","lms");
         $ins="insert into news(newsheader,newstext)values('".$head."','".$post."')";
         $run=mysqli_query($con,$ins);
         if(isset($run))
         {
         	echo'<script>alert("posted successfully..");</script>';
         header("location:addpost.php");
         }
         	
 }

}
      ?>
	</body>
</html>
