
			<?php
			
         if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
							$conn=mysqli_connect("localhost","root","","sign_up");
				$user=$_POST['user'];
                $pass=$_POST['pass'];
				$pass1= md5($pass);
			
								  $sql = "SELECT name FROM myform WHERE username='$user' and password='$pass' or password='$pass1' ";
									
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while($row = $result->fetch_assoc()) 
										{
											$sql2="INSERT INTO current_name(current) VALUES ('$user')";
											if(mysqli_query($conn,$sql2))
												{	
												
												}
									
											
											echo "Welcome " . $row["name"]. "<br>";
											$flag=TRUE;	
												
												header('Location: http://localhost/startbootstrap-sb-admin-gh-pages/index.php'); 
												//echo "<a href=http://localhost/startbootstrap-sb-admin-gh-pages/index.php>Proceed</a>" ;

										
										}
									} 
									else {
										//header('Location: login.htm'); 
										echo "INCORRECT USERNAME OR PASSWORD   <br><br>";
										
										echo "<a href=indexlog.html>RETRY</a>" ;

									}
									
									
									
								
						 mysqli_close($conn);
							}
				?>
						


						

