<?php
			
         if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
							$conn=mysqli_connect("localhost","root","","sign_up");
				
                $user=$_POST['user'];
                $msg=$_POST['msg'];
                $type=$_POST['type'];
                
								   
									// $sql2= "SELECT name FROM current_name WHERE  counter= @last_id";
									 $sql1="SELECT current FROM current_name WHERE counter=(SELECT MAX(counter) FROM current_name)";
									
									$result=mysqli_query($conn,$sql1);
									if (mysqli_num_rows($result)>0){
										$row = mysqli_fetch_array($result);
										$myname=$row['current'];
											
									}
									
										$sql="INSERT INTO message(fromuser,touser,msg,type) VALUES ('$myname','$user','$msg','$type')";
										
										
										if(mysqli_query($conn,$sql))
										{
											
											
											
											echo '<script type="text/javascript">alert("Message sent successfully!");</script>';
										
											header('Location: http://localhost/startbootstrap-sb-admin-gh-pages/index.php'); 
										}
										else
										{
											echo '<script type="text/javascript">alert("Error in sending message. Check the USERNAME!");</script>';
											echo "<a href=afterlogin.htm>RETRY</a>" ;

											
										
										}
									
						 mysqli_close($conn);
							}
						?>