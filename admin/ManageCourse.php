
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
<title>Manage Course</title>
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
                    <h1>L M S</h1>
                    <p>Free Online education App for e-learning and online education institute.</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-12">
						<h3 class="section-title">Manage Course</h3>
						
																			   
           <div class="table-responsive">
     <table class="table">
                        <thead>
                            <tr>                               
                                <th>Course Name</th>
                                <th>Course Code</th>    <th>Teacher Name</th>    
                                 <th>Teacher Id</th>                         
                                <th>Add Course</th>
                                <th>Update Course</th>  
                                <th>Delete Course</th>

                            </tr>
                        </thead>
                        <tbody>
                       <?php
                       require('../conn.php');
                       if(isset($_GET['de']))
                       {
                       	$id=$_GET['de'];
                       	$r=mysqli_query($con,"delete from course where id='$id'");
                       }
                       $rr=mysqli_query($con,"select * from course");
                       while ($row=mysqli_fetch_array($rr)) {
                       echo'

                
                    <tr>
                        <td>'.$row['cname'].'</td>
                        <td>'.$row['cid'].'</td>   

                         <td>'.$row['tname'].'</td> 

                          <td>'.$row['tuid'].'</td>                   
                        <td><a href="AddCourse.php" class="btn btn-two">Add</a></td>


                         <td><button class="btn btn-success text-white" data-toggle="modal" data-target="#rep_'.$row['id'].'">Update </button></td>



                         <td><a href="ManageCourse.php?de='.$row['id'].'" class="btn btn-danger" style="background-color: #d23c3c;">Delete</a></td>
  
                          
                    

                    </tr>
                 <div class="container">
    <div class="modal fade" id="rep_'.$row['id'].'" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button class="close" data-dismis="modal"></button>
                <h4  style="text-align: center; color:blue">Edit Course Information ID : '.$row['id'].'</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="ManageCourse.php?fd='.$row['id'].'">
               <input type="text" class="form-control" name="cn1" placeholder="course name"/>
               <br>
               <input type="text" class="form-control" name="cd1" placeholder="course code"/>



	<div class="form-group">
								<label>Teacher Tag</label>
									<select name="tname" class="form-control">'?>
									<?php
								
								$r=mysqli_query($con,"select * from user where type=1");
								while($row=mysqli_fetch_array($r))
								{
									echo' 
									
									<option value='.$row['uid'].'>'.$row['name'].'</option>


								';
								}

?>
							<?php
							echo'
								</select>
							</div>












            </div>
            <div class="modal-footer">
                 <button class="close" data-dismis="modal">cancle</button>
                  <button type="submit" name="save" class="btn btn-primary">Save</button>
              </form>
            </div>
        </div>
                
            
                       ';
                       }

if(isset($_POST['save']))
        {$tuid=isset($_POST['tname'])?$_POST['tname']:'';

$r1=mysqli_query($con,"select * from user where uid='$tuid'");
$q=mysqli_fetch_array($r1);


          $id2=$_GET['fd'];
    
          $cn=isset($_POST['cn1'])?$_POST['cn1']:'';
           $cd=isset($_POST['cd1'])?$_POST['cd1']:'';
          $ru=mysqli_query($con,"update course set cid='".$cd."',cname='".$cn."',tname='".$q['name']."',tuid='$tuid' where id='".$id2."'");

                  echo ' <meta http-equiv="refresh" content=0.1;URL=ManageCourse.php>';
           

        }

                       ?>
                                  </tbody>
            </table>
 
                          <?php  ob_start();
require('../conn.php');
        
ob_end_flush();
        ?>
   
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
