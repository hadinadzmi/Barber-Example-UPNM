<!DOCTYPE html>
<html>
<?php session_start(); ?>
	<title>UpdateData</title>
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
            
            if(isset($_POST['updatebtn']))
            {
            	$Matrix_No = $_POST['matrixNo'];
            	$name = $_POST['name'];
            	$telephone	 = $_POST['telephone'];
            	$email = $_POST['email'];
            	$password1 = $_POST['password1'];
            	$password2 = $_POST['password2'];

            	$sql1 = "UPDATE customerdata SET Matrix_no='$Matrix_No', name='$name', telephone='$telephone', email='$email', password1='$password1', password2='$password2' WHERE Matrix_No='$Matrix_No' ";
            	$result1 = mysqli_query($conn, $sql1);

            	if($result1)
            	{
            		
            		header('Location: databaseAdmin.php'); 
            		
            	}
            	else
            	{
            		
            		header('Location: databaseAdmin.php'); 
            		  
            	}
            }
            ?>

</body>
</html>