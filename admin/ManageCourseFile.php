
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
<title>Manage Course File</title>
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
    <form id="f1" runat="server">
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
						<h3 class="section-title">Manage Course File</h3>
						
						<form id="f1"  class ="form-light mt-20" role="form">													   
                          <div class="table-responsive">
                            <table class="table">
                        <thead>
                            <tr>                               
                                <th>Course Name</th>
                                <th>Course Code</th> 
                                <th>Course File</th>
                                <th>Publish date</th>
                                <th>Publish name</th>
                                <th>View File</th> 
                                <th>Add File</th>
                                <th>Update File</th>  
                                <th>Delete File</th>

                            </tr>
                        </thead>
                        <tbody>
                
                    <tr>
                        <td>Programing</td>
                        <td>pr1</td>
                        <td>c# lecture</td>
                        <td>12/4/2019</td>
                        <td>Ahmad</td>
                        <td><a href="#" class="btn btn-two" style="background-color: #f06443;"><i class="fa fa-share"></i></a></td>
                        <td><a href="AddCourseFile.php" class="btn btn-two">Add</a></td>
                         <td><a href="UpdateCourseFile.php" class="btn btn-info" style="background-color: #429136;">Update</a></td>
                         <td><a href="#" class="btn btn-danger" style="background-color: #d23c3c;">Delete</a></td>
  
                          
                    

                    </tr>
                
                
                    </tbody>
            </table>
                           
                           
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
