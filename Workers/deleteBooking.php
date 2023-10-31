<!DOCTYPE html>
<html>
    <?php session_start(); ?>
        <title>Worker</title>
    <body>
        <?php
            $host ="localhost";
            $username ="root";
            $password ="";
            $db ="registerdata";
            // Create connection 
            $conn = mysqli_connect($host, $username, $password, $db);
            // Check connection
            if(!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }
            if(isset($_POST['delete'])){
            $Matrix_No = $_POST['matrixNo'];

            $sql = "DELETE FROM bookingdata WHERE Matrix_No='$Matrix_No'";
            $result = mysqli_query($conn, $sql);

                if($result){
                    $_SESSION['status'] = "<script>alert('Welcome to UPNM BarberShop created by student 2TSK2')</script";
                    header('Location: worker.php'); 
                }
                else{
                    echo "<script>alert('Welcome to UPNM BarberShop created by student 2TSK2')</script>";
                    header('Location: worker.php'); 
                }
            }
        ?>
    </body>
</html>