<?php

				                        
				$conn=mysqli_connect("localhost","root","","sign_up");								   
									 $sql2="SELECT type,count(*) FROM message GROUP BY type";
										
										
										
									$result=mysqli_query($conn,$sql2);
									if (mysqli_num_rows($result)>0)
									{
										while($row = mysqli_fetch_array($result)) 
										{
										$typ1=$row[0];
										  $cnt1=$row[1];
										
										echo '<li>
									<a href="#"> <span class="label label-primary">'; echo $typ1; echo '</span></a> &nbsp;&nbsp;&nbsp; <span class="badge">';
									
									echo $cnt1;
									echo '</span>';
									echo'</li>'; 
                        
										
										
										echo '<br>';
										
									}
									}
									else
									{
										echo 'NO message received';
									}
						 mysqli_close($conn);
							
		?>