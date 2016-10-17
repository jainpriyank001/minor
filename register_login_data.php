<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['username'];
$pass=$_POST['password1'];
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$add=$_POST['address'];
$email=$_POST['email'];

echo $name;
$username="root";
$password="";
$servername="localhost";
$db="sign_up";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
	echo "server connected <br>";
else
	echo mysqli_connect_error($conn);
$sel=mysqli_select_db($conn,"sign_up");
if($sel)
{echo "<br> database selected";}
// $sql="Insert into sign_up_table (your_name,email,username,phone_no,password) VALUES (" 'Priyank', 'hdbj@gm.com', 'pj','7328473','2'  ");";
	$sql="INSERT INTO LOGIN(USERNAME,PASSWORD,FIRSTNAME,LASTNAME,ADDRESS,EMAIL) VALUES('$name','$pass','$first','$last','$add','$email')";
								
mysqli_close($conn);
}
?>


