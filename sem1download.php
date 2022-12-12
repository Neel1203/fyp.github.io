<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./JS/script.js"></script>
</head>

<body>
    <div class="cut">
        <section id="navbar">
            <p>TIME TABLE GENERATOR, Computer Engineering Department</p>
        </section>

        <section id="btn-container">
            <a href="#"><button class="sembtn active">First Semester</button></a>
            <a href="#"><button class="sembtn">Second Semester</button></a>
            <a href="#"><button class="sembtn">Third Semester</button></a>
            <a href="#"><button class="sembtn">Fourth Semester</button></a>
            <a href="#"><button class="sembtn">Fifth Semester</button></a>
            <a href="#"><button class="sembtn">Sixth Semester</button></a>
        </section>
    </div>

    <style>
        @media print {

            .cut,
            .cut * {
                display: none;
                width: 0;
                height: 0;
            }

            .main,
            .main * {
                table td {
                    padding: 0px;
                }
            }

            select {
                border: none;
                outline: none;
                -webkit-appearance: none;
            }
        }

        .active {
            background-color: red;
        }

        td {
            height: 50px;
            padding: 12px;
            text-align: center;
            font-weight: 700;
        }
    </style>

    <form action="./retrieve1process.php" method="post">
        <div class="main">
            <table>
                <tr>
                    <th></th>
                    <th class="time" style="padding: 10px">10:30 <br>-<br> 11:30</th>
                    <th class="time" style="padding: 10px">11:30 <br>-<br> 12:30</th>
                    <th class="time" style="padding: 10px">12:30 <br>-<br> 1:15</th>
                    <th class="time" style="padding: 10px">1:15 <br>-<br> 2:15</th>
                    <th class="time" style="padding: 10px">2-15 <br>-<br> 3:15</th>
                    <th class="time" style="padding: 10px">3:15 <br>-<br> 3:30</th>
                    <th class="time" style="padding: 10px">3:30 <br>-<br> 4:30</th>
                    <th class="time" style="padding: 10px">4:30 <br>-<br> 5:30</th>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! MONDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Mon</th>
                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                        ?>
                    </td>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <th class="brk" style="padding: 12px;">B</th>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <th class="brk" style="padding: 12px;">B</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! TUESDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Tue</th>
                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">R</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">R</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! WEDNESDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Wed</th>
                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">E</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">E</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! THURSDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Thu</th>
                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>

                    <th class="brk" style="padding: 12px;">A</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">A</th>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! FRIDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Fri</th>
                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">K</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">K</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                    </td>
                </tr>

                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!--!!!!! SATURDAY !!!!! ---------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------------------------------------------------------------------------------------->
                <tr>
                    <th class="day">Sat</th>
                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">S</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <th class="brk" style="padding: 12px;">S</th>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>

                    <td>

                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>

                    </td>
                </tr>
            </table>
        </div>
        <div class="cut">
            <div class="form-btn-container">
                <button class="sembtn" style="margin: 20px;" onclick="window.print(); return false;">Print</button>
                <a href="http://localhost/fyp.github.io./index.html" class="sembtn" style="margin: 20px;">Logout</a>
            </div>
        </div>
    </form>
</body>
</html>