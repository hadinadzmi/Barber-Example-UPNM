<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                text-decoration: none;
                font-family: 'Times New Roman', Times, serif;
            }

            body{
                background-image: url(../Customer/barber.png);
                margin: 20px;
            }

            /* TOP SIDE */
            .top-container{
                width: 100%;
                font-size: 20px;
                display: flex;
                justify-content: space-between;
            }

            #logout a{
                color: white;
            }

            #logout:hover{
                background: #833ab4;
                background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
                background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
                border-radius: 10px;
            }

            /* BOTTOM SIDE */
            .bottom-container{
                display: flex;
                height: 620px;
            }

            /* Left Side */
            #left-side{
                width: 200px;
                background-color: rgba(0, 0, 0, 0.3);
                text-align: center;
            }

            #worker-icon i,#worker-title{
                font-size: 40px;
                background: #833ab4;
                background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
                background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
                background-size: 100%;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                -webkit-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
            }

            /* Right Side */
            #right-side{
                border-style: groove;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                margin-left: 20px;
                padding: 40px;
                text-align: center;
                color: white;
            }

            #right-side table{
                width: 100%;
                text-align: center;
            }

            #right-side table,th,td{
                border: 1px solid black;
                color: white;
            }

            .butang1{
                background: #008000;
            }

            .butang2{
                background: #ff0000;
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
                <div id="none">

                </div>
                <div id="logout">
                    <a href="../Admin/logout.php">Log Out</a>
                </div>
            </div>
            <div class="bottom-container">
                <div id="left-side">
                    <div id="worker-icon">
                        <i class="material-icons">person_pin</i>
                    </div>
                    <div id="worker-title">
                        Workers
                    </div>
                </div>
                <div id="right-side">
                    <table>
                        <tr>
                            <th>No.Matrix</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Accept</th>
                            <th>Reject</th>
                        </tr>

                        <?php
                            $sql = "SELECT * FROM bookingdata";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>" . $row['Matrix_No'] . "</td>";
                                    echo "<td>" . $row['Name'] . "</td>";
                                    echo "<td>" . $row['Email'] . "</td>";
                                    echo "<td>" . $row['Date1'] . "</td>";
                                    echo "<td>" . $row['Time1'] . "</td>";
                                    ?>

                                    <td>
                                        <form action="acceptBooking.php" method="post">
                                            <input type="hidden" name="matrixNo" value="
                                                <?php echo $row['Matrix_No']; ?>">
                                            <button name="accept" class="butang1"><i class="material-icons">thumb_up</i></button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="deleteBooking.php" method="post">
                                            <input type="hidden" name="matrixNo" value="
                                                <?php echo $row['Matrix_No']; ?>">
                                            <button name="delete" class="butang2"><i class="material-icons">thumb_down</i></button>
                                        </form>
                                    </td>
                                    <?php
                                }
                            }
                            else{
                                echo "No Booking Found";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>