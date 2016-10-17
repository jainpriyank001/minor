<?php
    $dbhost='localhost';
	$username='root';
	$password='';
	$db='sign_up"';
	if($SERVER["REQUEST_METHOD"]=="POST")
	{
		echo "connected";
	}
?>



<?php
	$dbhost='localhost';
	$username='root';
	$password='';
	$db='sign_up"';
	       $conn=mysqli_connect($dbhost,$username,$password,$db);
		   $sql="Select * from sign_up_table;";
		   $result=mysqli_query($conn,$sql);
		   if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_array($result))
					{
						$val=$row['your_name'];
						echo $val;
					}
				}
			else
			{
			echo "No result";
			}
			mysqli_close($conn);
			?>