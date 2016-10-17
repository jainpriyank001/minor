
<?php
			
         if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
							$conn=mysqli_connect("localhost","root","","sign_up");
				$name=$_POST['name'];
                $pass=$_POST['pass'];
                $user=$_POST['user'];
                $mob=$_POST['mob'];
                $email=$_POST['email'];
				$pass = md5($pass);	
								   $sql="INSERT INTO  myform(name,email,username,mob,password) VALUES ('$name','$email','$user','$mob','$pass' )";
									
									
									
									
									if(mysqli_query($conn,$sql))
									{	echo 'Saved into Database<br>';
											echo "<a href=indexlog.html>LOGIN</a>" ;

									}
									else
									{
										echo 'Username already used. try a different username<br>';
										echo "<a href=indexlog.html>TRY AGAIN</a>" ;

									}
						
						 mysqli_close($conn);
							}
						?>