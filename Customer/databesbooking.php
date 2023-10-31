<!DOCTYPE html>
<html>
	<title>BookingData</title>
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
    echo"Connected successfully <p>";

    if (isset($_POST['Submit'])) { 
    $nama = $_POST['Name'];
    $Nomatrix = $_POST['MatrixNumber'];
    $email = $_POST['Email'];
    $tarikh = $_POST['Date'];
    $masa = $_POST['Time'];
   }


   $sql = "INSERT INTO bookingdata(Name,Matrix_No,Email,Date1,Time1) VALUES('$nama','$Nomatrix' ,'$email' ,'$tarikh','$masa')";


//*ni untuk cx record data masuk atau tidak *//
    if(mysqli_query($conn, $sql))
  {
    echo "<script>alert('Data Booking Collected')</script>";
    echo file_get_contents("after-log.html");
  }
    else
  {
    echo "<script>alert('ERROR: Could not able to execute $sql. Back to login pages?')</script>". mysqli_error($conn);
    echo file_get_contents("after-log.html");
  }

	?>





</body>
</html>