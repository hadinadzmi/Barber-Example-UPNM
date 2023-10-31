<!DOCTYPE html>
<html>
<?php session_start(); ?>
    <title>DeleteData</title>
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

    if(isset($_POST['delete']))
{
    $Matrix_No = $_POST['matrixNo'];

    $sql = "DELETE FROM bookingdata WHERE Matrix_No='$Matrix_No' ";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "<script>alert('Your Selected Data Are Successfull Deleted')</script>";
        header('Location: databaseAdminBooking.php'); 
    }
    else
    {
        echo "<script>alert('Your Selected Data Are NOT Successfull Deleted')</script>";
        header('Location: databaseAdminBooking.php'); 
    }    
}


    ?>

</body>
</html>