<!DOCTYPE html>
<html>
	<title>databaseCust</title>
<body>
	<?php
	$host ="localhost";
	$username ="root";
	$password ="";
	$db ="registerdata";
	// Create connection 
	$conn = mysqli_connect($host, $username, $password, $db);
	// Check connection
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

		echo file_get_contents("login.html");
		echo "<script>alert('Yeaahhh!! your account have created. Welcome to our family!! Proceed to Log in?')</script";

		// assign input from HTML form
		if (isset($_POST['submit'])) {
			$Matrix_No =$_POST['matrixNo'];
			$name = $_POST['name'];
			$telephone	 = $_POST['telephone'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];

			if($password1 == $password2)
			{
				$sql = "INSERT INTO customerdata(Matrix_No,name,telephone,email,password1,password2	) VALUES('$Matrix_No','$name','$telephone','$email','$password1','$password2')";
				$result = mysqli_query($conn, $sql);

				if(!$result)
				{
					echo "<script>alert('whhhoopp! database connected may be wrong!')</script";
				}
			} 
			else
			{
				echo "<script>alert('Password Not Matched!')</script";
			}
		}
		?>

</body>
</html>