<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>View Evaluation Teacher</title>
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
            <li class="dropdown">
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

                    
					<div class="col-md-6">
						<h3 class="section-title">View Evaluation Course and Teacher</h3>
						
						<form id="f1" runat="server" class ="form-light mt-20" action="ViewEvaluationTaecher.php" method="post" role="form">							
							<div class="form-group">
								<label>Course Name</label>
								<select name="cc"  class="form-control">
									<?php
									include'../conn.php';
								$r=mysqli_query($con,"select * from course ");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['cid'].'>'.$row['cname'].'</option>


								';
								}


								?>
								</select>

                             
                               
							</div>
							                                    


                                <button type="submit" name="btn" class="btn btn-two">Show</button>  
                            <br />
                            
                                
                           
						</form>
					</div>

  <div class="col-md-6">
        <?php    $sum='';
					$n='';

					$co=isset($_POST['cc'])?$_POST['cc']:'';
					if(isset($_POST['btn'])){
					
					$y=mysqli_query($con,"select * from ratecourse where cid='".$co."'");
					if(mysqli_num_rows($y)>0){
					while($q=mysqli_fetch_array($y))
					{
						$sum=$sum+$q['rate'];
						$n=$n+1;
					}


					$sum=$sum/$n;
					$s1=floatval(str_replace(',', '.', $sum));



					echo'
						<div class="col-md-6">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/1.png" alt="" />
							</div><!--icon box top -->
							<h4 style="font-weight: bold;"> '. $co.' </h4>
								<p style="font-weight: bold;">'. $row['cname'].'</p>
							

								
                            <p style="font-weight: bold;">Rate : '.$s1.'<i class="fa fa-star" style="color:yellow"></i> From 5 <i class="fa fa-star" style="color:yellow"></i></p>					

     							
						</div><!--grey box -->
					</div><!--/span3-->';
				}
				else{
					echo'
						<div class="col-md-12">
						<div style="height:50px;"></div>
						<h1 class="alert alert-danger">no rate for this course right now</h1>
					</div><!--/span3-->';
				}
				}


?>



<script type="text/javascript" src="assets/js/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Teacher Rate', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>





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

