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
                <a class="navbar-brand" href="index.php">My Profile</a> <span class="pull-right"><i class="fa fa-female"></i></span>
				<br><br>
				<font color="white">

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
                            
                                <div class="media">
                                    <span class="pull-left">
                                       
                                    </span>
                                    <div class="media-body">';
					
										//print name & msg
										
										echo'<h5 class="media-heading"><strong> Message from '; echo $nm1; echo '</strong> </h5>';
										
										echo '<p class="small text-muted"><i class="fa fa-clock-o"></i> 15/10/2016 at 4:32 PM</p>
                                        <p>';
										echo $msg1;
										echo '...</p>';
										
										echo '</div>
                                </div>
                            
                        </li>';
						
										
										
										
										}
									}
									else
									{
										echo 'NO message received';
									}
						 mysqli_close($conn);
							
		?>
		
		
		              </div>
                        </div>
                    </div>
		</body>

</html>