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
            	$name = $_POST['name'];
            	$Matrix_No =$_POST['matrixNo'];
            	$email = $_POST['email'];
            	$date1 = $_POST['date1'];
            	$time1 = $_POST['time1'];

            	$sql1 = "UPDATE bookingdata SET Name='$name',Matrix_no='$Matrix_No', Email='$email', Date1='$date1', Time1='$time1' WHERE Matrix_No='$Matrix_No' ";
            	$result1 = mysqli_query($conn, $sql1);

            	if($result1)
            	{
            		echo "<script>alert('Your Selected Data Are Successfull Updated')</script>";
            		header('Location: databaseAdminBooking.php'); 
            		
            	}
            	else
            	{
            		echo "<script>alert('Your Selected Data Are NOT Successfull Updated')</script>";
            		header('Location: databaseAdminBooking.php'); 
            		  
            	}
            }
            ?>

</body>
</html>