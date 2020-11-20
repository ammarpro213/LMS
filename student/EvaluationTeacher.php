
<?php
session_start();
if($_SESSION['type']!=2)
    header("location:../login.php");

include'../conn.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>L M S System</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
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
    <!-- /.navbar -->

    <header id="head" class="secondary">
            <div class="container">
                    <h1>Evaluation Teachers</h1>
                    <p>Enter your like or not for teacher evaluation  post</p>
                </div>
    </header>


    <div class="container">
    <div class="row">
                <?php
               
               

                
                    $res=mysqli_query($con,"select * from course");
                    while($row=mysqli_fetch_array($res))
                {
                    echo'
                        <div class="col-md-3">
                        <div class="grey-box-icon">
                            <div class="icon-box-top grey-box-icon-pos">
                                <img src="assets/images/1.png" alt="" />
                            </div><!--icon box top -->
                            <h4 style="font-weight: bold;"> '. $row['cid'].' </h4>
                                <p style="font-weight: bold;">'. $row['cname'].'</p>
                            <p style="font-weight: bold;">'.$row['tname'] .'</p>

                                <p style="font-weight: bold;">'. $row['tuid'] .'</p>
                            <p style="font-weight: bold;">Rate this course</p>                          
          


                                <p><a href="../rt/rc.php?c='.$row['cid'].'&id='.$row['id'].'" class="btn btn-two"><em>Rate This Course</em></a></p>
                        </div><!--grey box -->
                    </div><!--/span3-->';
                }
                
                
                ?>






                    
                </div>
    </div>




 

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
