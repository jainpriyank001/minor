
<?php
			
         if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
							$conn=mysqli_connect("localhost","root","","sign_up");
				$name=$_POST['name'];
                $type=$_POST['type'];
               
								   $sql="INSERT INTO  groups(touser,type) VALUES ('$name','$type' )";
									
									
									if(mysqli_query($conn,$sql))
									{	echo 'Saved into Database<br>';
											echo "<a href=http://localhost/startbootstrap-sb-admin-gh-pages/index.php>My Profile</a>" ;

									}
									else
									{
										echo 'Error in adding to DB<br>';
										

									}
						
						 mysqli_close($conn);
							}
						?>