<html>
<body>
<center>
<h1>
<img src="images/thank_you1.png" width="680" height="580" border="0" alt="">
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="contact_database";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection failed" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$your_name= $_POST['Your_Name'];
	$email= $_POST['Email'];
	$phone= $_POST['Phone'];
	$message= $_POST['Message'];

	$sql_query ="INSERT INTO contact_details (Your_Name,Email,Phone,Message)
	VALUES('$your_name','$email','$phone','$message')";

	if (mysqli_query($conn,$sql_query))
	{
		echo
			"";

	}
	else
	{
		echo "Error" .$mysqli."". mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>
</center>
</h1>

</img>
</body>
</html>