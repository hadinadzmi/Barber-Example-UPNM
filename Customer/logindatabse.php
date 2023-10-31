<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<title>LoginDatabase</title>
<body>
	<?php
	$host ="localhost";
	$username ="root";
	$password ="";
	$db ="registerdata";
	// Create connection 
	$conn= mysqli_connect($host, $username, $password, $db);
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['matrixNo']))
	{
		$Matrix_No=$_POST['matrixNo'];
		$password=$_POST['password1'];

		$sql= "SELECT * FROM customerdata where Matrix_No='$Matrix_No' AND password1='$password' limit 1";

		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);

		if(is_array($row)){
			if($row["usertype"]=='admin'){
				$_SESSION['matrixNo'] = $row['Matrix_No'];
				$_SESSION['password'] = $row['password1'];

				header('location:../Admin/admin-dashboard.html');
			}
			elseif($row["usertype"]=='worker'){
				$_SESSION['matrixNo'] = $row['Matrix_No'];
				$_SESSION['password'] = $row['password1'];

				header('location:../Workers/worker.php');
			}
			else{
				$_SESSION['matrixNo'] = $row['Matrix_No'];
				$_SESSION['password'] = $row['password1'];

				header('location:after-log.html');
			}
		}
		else{
			echo file_get_contents("login.html");
			echo '<script type="text/javascript">';
			echo ' alert("Matrix Number or Password is incorect!")';
			echo '</script>';
		}
	}
	?>
</body>
</html>