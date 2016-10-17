
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> WithYou </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
			
         
				$conn=mysqli_connect("localhost","root","","sign_up");
				
                
                
								   
									 $sql1="SELECT current FROM current_name WHERE counter=(SELECT MAX(counter) FROM current_name)";
									
									$result=mysqli_query($conn,$sql1);
									if (mysqli_num_rows($result)>0){
										$row = mysqli_fetch_array($result);
										$myname=$row['current'];
											echo $myname;
									}
									
				
											
										
										
									
						 mysqli_close($conn);
							
	?>


    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">My WithYou Profile</a> <span class="pull-right"><i class="fa fa-female"></i></span>

            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
   

   <?php

				                        
				$conn=mysqli_connect("localhost","root","","sign_up");								   
									 $sql2="SELECT fromuser,msg FROM message WHERE touser=(SELECT current FROM current_name WHERE counter=(SELECT MAX(counter) FROM current_name))";
										
									$result=mysqli_query($conn,$sql2);
									if (mysqli_num_rows($result)>0)
									{
										while($row = mysqli_fetch_array($result)) 
										{
										$nm1=$row['fromuser'];
										  $msg1=$row['msg'];
										//echo $nm1;
										//echo $msg1";
										echo '<li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">';
					
										//print name & msg
										
										echo'<h5 class="media-heading"><strong>'; echo $nm1; echo '</strong> </h5>';
										
										echo '<p class="small text-muted"><i class="fa fa-clock-o"></i> 15/10/2016 at 4:32 PM</p>
                                        <p>';
										echo $msg1;
										echo '...</p>';
										
										echo '</div>
                                </div>
                            </a>
                        </li>';
						
										
										
										
										}
									}
									else
									{
										echo 'NO message received';
									}
						 mysqli_close($conn);
							
		?>
		
		
   
   
   
   
   
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        
				<?php             
				$conn2=mysqli_connect("localhost","root","","sign_up");								   
									 $sql2="SELECT type,count(*) FROM message GROUP BY type ";
										
										
										
									$result=mysqli_query($conn2,$sql2);
									if (mysqli_num_rows($result)>0)
									{
										while($row = mysqli_fetch_array($result)) 
										{
										$typ1=$row[0];
										  $cnt1=$row[1];
										
										echo '<li>
									<a href="#"> <span class="label label-danger">'; echo $typ1;  echo '</span>'; echo '  <span class="badge">';echo $cnt1;
									
	
									echo '</span> </a>';
									echo'</li>'; 
                        
										
										
										echo '<br>';
										
									}
									}
									else
									{
										echo 'NO message received';
									}
						 mysqli_close($conn2);
							
		?>
						
						
						
						
						<li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
					
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-female"></i> <?php echo $myname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="inbox.php"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/indexlog.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					 <li>
                        <a href="http://localhost/afterlogin.htm"><i class="fa fa-envelope"></i> SEND MESSAGE</a>
                    </li>
                   
                    <li>
                        <a href="http://localhost/groups.php"><i class="fa fa-users"></i> MY GROUPS</a>
                    </li>
                    <li>
                        <a href="taskpanel.html"><i class="fa fa-fw fa-table"></i> MY TASK PANEL</a>
                    </li>
                    <li>
                        <a href="activity.htm"><i class="fa fa-fw fa-edit"></i> ACTIVITIES</a>
                    </li>
                    <li>
                       <a href="http://localhost/startbootstrap-sb-admin-gh-pages/inbox.php"><i class="fa fa-fw fa-desktop"></i> CHAT BOX</a> 
                    </li>
                    <li>
                        <!-- <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a> -->
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Item1</a>
                            </li>
                            <li>
                                <a href="#">Item2</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> SETTINGS</a>
                    </li>
                    <li>
                      <!--  <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Me & my circles</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             <!--   <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->
			
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">05</div>
                                        <div>Withyou Groups!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/groups.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">1</div>
                                        <div>EMERGENCY!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					<br><br><br><br><br><br><br><br><br><br> <br><br>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-location-arrow fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Location Updates!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <i class="fa fa-reply fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">24</div>
                                        <div>My Responses!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row -->
<!--
				<div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
				
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                	
                  
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
