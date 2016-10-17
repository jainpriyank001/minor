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
<?php
$nameErr = $emailErr = $username = $websiteErr = "";
$name = $email = $gender = $phone = $pass = "";
?>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  Username: <input type="text" name="name" value="<?php echo $username;?>">
  phone: <input type="text" name="name" value="<?php echo $phone;?>">
  password: <input type="text" name="name" value="<?php echo $pass;?>">
  <input type="submit" name="submit" value="Submit">  
</form>

</div>			
<?php
					   if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
								$dbhost='localhost';
				$username='root';
				$password='';
				$db='sign_up"';
					   $conn=mysqli_connect($dbhost,$username,$password,$db);
				
								$name =mysqli_real_escape_string($conn,$_POST['name']);
								   $email =mysqli_real_escape_string($conn,$_POST['email']);
									 $user =mysqli_real_escape_string($conn,$_POST['user']);
								 
								   $mob=mysqli_real_escape_string($conn,$_POST['mob']);
								   $pass =mysqli_real_escape_string($conn,$_POST['pass']);
								   
								   //$sql="Insert into sign_up_table ('your_name','email','username','phone_no','password') VALUES ("'$name','$email','$user','$mob','$pass' ");";
									
									 $sql="Insert into sign_up_table ('your_name','email','username','phone_no','password') VALUES ( 'Priyank', 'hdbj@gm.com', 'pj','7328473','2'  );";
									
									
									if(mysqli_query($conn,$sql))
										echo "Saved into Database";
									else
										echo "Error adding in Database";
							
						
						$conn->close();
							}
						?>
						
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
<form>
<hr>
 

</body>
</html>
