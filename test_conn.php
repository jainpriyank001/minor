
<?php
			

					   if( $_SERVER["REQUEST_METHOD"]=="POST" )
							{
								$dbhost='localhost';
								
				$username='root';
				$password='';
				$db='sign_up';
					   $conn=mysqli_connect($dbhost,$username,$password,$db);
				$name=$_POST['name'];
                $pass=$_POST['pass'];
                $user=$_POST['user'];
                $mob=$_POST['mob'];
                $email=$_POST['email'];
								;
								   
								   $sql="Insert into sign_up_table ('your_name','email','username','phone_no','password') VALUES ('name','$email','$user','$mob','$pass' );";
									
									// $sql="Insert into sign_up_table ('your_name','email','username','phone_no','password') VALUES ( 'Priyank', 'hdbj@gm.com', 'pj','7328473','2'  );";
									
									
									if(mysqli_query($conn,$sql))
										echo "Saved into Database";
									else
										echo "Error adding in Database";
							
						
						$conn->close();
							}
						?>