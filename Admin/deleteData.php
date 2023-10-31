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

    $sql = "DELETE FROM customerdata WHERE Matrix_No='$Matrix_No' ";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "<script>alert('Welcome to UPNM BarberShop created by student 2TSK2')</script>";
        header('Location: databaseAdmin.php');
    }
    else
    {
        echo "<script>alert('Welcome to UPNM BarberShop created by student 2TSK2')</script>";
        header('Location: databaseAdmin.php'); 
    }    
}


    ?>

</body>
</html>