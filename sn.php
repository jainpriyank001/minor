<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">With You</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      <li><a href="#">OPTIONS</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">OPTION 1</a></li>
          <li><a href="#">Option 2</a></li>
          <li><a href="#">Option 3</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.htm"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.htm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<p>
.
</p>
<p>
.
</p>
<hr>
<center>
<h2>Signup Form</h2>
</center>
<form action="code_db_insert.php" method="post">

<hr>
  <div class="form-group">
  
   <div class="col-xs-4">
   </div>

   <div class="col-xs-4">
	 
      <input type="text" class="form-control" id="name" placeholder="Your Name">

	  </div>
	</div>
	<br>

<div class="form-group"><br>
 <div class="col-xs-4"></div>
	    <div class="col-xs-4">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
	</div>
	<br>
<div class="form-group"><br>
 <div class="col-xs-4"></div>
	    <div class="col-xs-4">
      <input type="text" class="form-control" id="user" placeholder="Username">
	    </div>
    </div>
	<br>
	
<div class="form-group">
 <div class="col-xs-4"></div>
	    <div class="col-xs-4">
      <input type="text" class="form-control" id="mob" placeholder="Mobile Number">
    </div>
	</div>
	<br>
	
<div class="form-group">

 <div class="col-xs-4"></div>
	    <div class="col-xs-4">
      <input type="password" class="form-control" id="pass" placeholder="Enter password">
    </div>
	</div>
	<br>
	 
	
	
	
 <div class="col-xs-5"></div>
 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type="submit" value="SUBMIT">
	<!-- <a href="code_db_insert.php" class="btn btn-info" role="button">   Submit</a> -->
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.htm"> Already Registered? </a>
</div>
				
				


</body>
</html>
