<!DOCTYPE html>
<html>
<head>
	<title>databseAdmin</title>

	<style>
		table, th, td {
			border: 1px solid black;
		}

		table {
			width: 70%;
		}
		.center {
			margin-top: 30px;
			background: #2E8B57;
			margin-left: auto;
			margin-right: auto;
		}
		
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: 'Times New Roman', Times, serif;
			scroll-behavior: smooth;
			text-decoration: none;
			list-style: none;
		}
		.container{

		}

		/* top */
		.top-container{
			background: #870000;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			width: 100%;
			height: 70px;
		}
		.logo span{
			font-size: 32px;
			background: #833ab4;
			background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			background-size: 100%;
			-webkit-background-clip: text;
			-moz-background-clip: text;
			-webkit-text-fill-color: transparent;
			-moz-text-fill-color: transparent;
		}
		.container .img
		{
			margin-top: 10px;
			background: gray ;
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 100%;
		}
		.nav-links a {
			color: #fff;
		}
		/* Navbar Menu */
		.menu{
			margin-top: -30px;
			position: absolute;
			right: 0px;
			display: flex;
			gap: 1em;
			font-size: 18px;}

		.menu li:hover{
			background: #833ab4;
			background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			border-radius: 5px;
			transition: 0.3s ease;
		}
		.menu li{
			padding: 5px 14px;
		}
		/* bottom */
		.bottom-container{
			display: flex;
		}
		/* left*/
		.left-container{
			width: 15%;
			height: 665px;
			background: #FFDAB9;
			background: -webkit-linear-gradient(to right, #FFDAB9, #8B4513);
			background: linear-gradient(to right, #FFDAB9, #8B4513);
			justify-content: center;
			align-items: center;
		}
		.left-container h1
		{
			margin-top: -20PX;
			font-size: 30px;
			color: #FFF;
			background: #000000;
		}
		.left-container .pad
		{
			padding-top: 50px;
		}
		.choice{
			height: 15%;
			background: #A52A2A;
			margin-top: 40px;
			width: 15%;
			position: absolute; 
			font-size: 22px;
		}
		.choice a{
			margin-top: 15px;
			color: #fff;
			margin-left: 15px;
		}
		.choice li:hover{
			width: 100%;
			background: #833ab4;
			background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
			border-radius: 5px;
			transition: 0.3s ease;
		}

		.choice li{
			margin-top: 2px;
			padding: 5px 14px;
		}

		/* right */
		.right-container{
			text-align: center;
			font-size: 20px;
			color: white;
			width: 85%;
			padding: 10%;
			background-image: url('barber.png');
			background-size: cover;
			background-repeat: no-repeat;
		}

		.right-container span{
			background: #e9d362;
			background: -webkit-linear-gradient(to right, #333333, #e9d362);
			background: linear-gradient(to right, #333333, #e9d362);
			background-size: 100%;
			-webkit-background-clip: text;
			-moz-background-clip: text;
			-webkit-text-fill-color: transparent;
			-moz-text-fill-color: transparent;
		}

		.right-container #small{
			font-size: 20px;
		}
		.butang1{
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			background: green;
		}
		.butang2{
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			background: red;
		}
</style>
</head>
<body>
	<?php
	// session_start();
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
	?>
	<div class="container">
        <div class="top-container">
            <a href="#logo" class="logo">&#128136;<span>BARBER UPNM</span>&#128136;</a>
            <ul class="nav-links">
                <!-- Nav Menu -->
                <div class="menu">
                	<li><a href="admin-dashboard.html">Dashboard</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </div>
            </div>
        <div class="bottom-container">
            <div class="left-container">
                 <img class="img" src="https://media.istockphoto.com/vectors/male-face-silhouette-or-icon-man-avatar-profile-unknown-or-anonymous-vector-id1087531642?k=20&m=1087531642&s=170667a&w=0&h=ge3fq1Dw0-J2FoW96c8klSiHyOnitVhReUUuIIYqtvw=" alt=profile  style="width:150px">
                 <div class="pad">
                <h1 align="center">ADMIN</h1></div>
                <div class="choice">
                  <p><li><a href="databaseAdmin.php">Customer Register</a></li></p>
                    <p><li><a href="databaseAdminBooking.php">Customer Booking</a></li></p>
                </div>
            </div>
             <div class="right-container">
            <img src="data:image/webp;base64,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">
		<h2>Full Customer Register Data</h2>
		<table class="center">
		<tr>
               <th>Matrix No</th>
                <th>Name</th>
                <th>Telephone No.</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>User Type</th>
                <th>Edit/Update</th>
                <th>Delete</th>
                </tr>
                <?php
                $sql = "SELECT * FROM customerdata";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0)
                {
                while ($row = mysqli_fetch_assoc($result))
                {
                	echo "<tr>";
                	echo "<td>" . $row['Matrix_No'] . "</td>";
                	echo "<td>" . $row['name'] . "</td>";
                	echo "<td>" . $row['telephone'] . "</td>";
                	echo "<td>" . $row['email'] . "</td>";
                	echo "<td>" . $row['password1'] . "</td>";
                	echo "<td>" . $row['password2'] . "</td>";
                	echo "<td>" . $row['usertype'] . "</td>";
                	?>
                	<td>
                	<form action="update.php" method="post">
                	<input type="hidden" name="matrixNo" value="
                	<?php echo $row['Matrix_No']; ?>">
                	<button name="edit" class="butang1">Edit</button>
                	</form>
                	</td>
                	<!--  -->

                	<td>
                	<form action="deleteData.php" method="post">
                	<input type="hidden" name="matrixNo" value="
                	<?php echo $row['Matrix_No']; ?>">
                	<button name="delete" class="butang2">Delete</button>
                	</form>
                	</td>

                	</tr>
                	<?php
                }
            }
            else {
             	 echo "No Record Found";
              }
          
                echo "</table>";
                mysqli_close($conn);
	?>
	</div>
</body>
</html>