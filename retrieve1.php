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
        td{
            height: 50px;
            padding: 12px;
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_1" id="mon_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_1" id="mon_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_1" id="mon_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_2" id="mon_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_2" id="mon_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_2" id="mon_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">B</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_3" id="mon_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_3" id="mon_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_3" id="mon_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_4" id="mon_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_4" id="mon_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_4" id="mon_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">B</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_5" id="mon_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_5" id="mon_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_5" id="mon_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="mon_course_6" id="mon_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="mon_faculty_6" id="mon_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="mon_class_6" id="mon_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='monday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_1" id="tue_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_1" id="tue_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_1" id="tue_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[2]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_2" id="tue_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_2" id="tue_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_2" id="tue_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">R</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_3" id="tue_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_3" id="tue_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_3" id="tue_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_4" id="tue_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_4" id="tue_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_4" id="tue_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">R</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_5" id="tue_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_5" id="tue_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_5" id="tue_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="tue_course_6" id="tue_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="tue_faculty_6" id="tue_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="tue_class_6" id="tue_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='tuesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_1" id="wed_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_1" id="wed_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_1" id="wed_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_2" id="wed_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_2" id="wed_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_2" id="wed_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">E</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_3" id="wed_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_3" id="wed_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_3" id="wed_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_4" id="wed_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_4" id="wed_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_4" id="wed_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">E</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_5" id="wed_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_5" id="wed_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_5" id="wed_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="wed_course_6" id="wed_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="wed_faculty_6" id="wed_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="wed_class_6" id="wed_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='wednesday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_1" id="thu_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_1" id="thu_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_1" id="thu_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_2" id="thu_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_2" id="thu_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_2" id="thu_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">A</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_3" id="thu_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_3" id="thu_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_3" id="thu_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_4" id="thu_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_4" id="thu_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_4" id="thu_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">A</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_5" id="thu_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_5" id="thu_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_5" id="thu_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="thu_course_6" id="thu_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="thu_faculty_6" id="thu_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="thu_class_6" id="thu_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='thursday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_1" id="fri_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_1" id="fri_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_1" id="fri_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_2" id="fri_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_2" id="fri_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_2" id="fri_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">K</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_3" id="fri_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_3" id="fri_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_3" id="fri_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_4" id="fri_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_4" id="fri_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_4" id="fri_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">K</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_5" id="fri_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_5" id="fri_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_5" id="fri_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="fri_course_6" id="fri_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="fri_faculty_6" id="fri_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="fri_class_6" id="fri_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
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
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_1" id="sat_course_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_1" id="sat_faculty_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_1" id="sat_class_1">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period1' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_2" id="sat_course_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_2" id="sat_faculty_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_2" id="sat_class_2">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period2' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">S</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_3" id="sat_course_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_3" id="sat_faculty_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_3" id="sat_class_3">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period3' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_4" id="sat_course_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='saturday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_4" id="sat_faculty_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_4" id="sat_class_4">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period4' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <th class="brk" style="padding: 12px;">S</th>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_5" id="sat_course_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_5" id="sat_faculty_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_5" id="sat_class_5">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period5' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>

                <td>
                    <?php
                            $couSql = "SELECT * FROM courses WHERE sem = 1";
                            $couResult = mysqli_query($conn, $couSql);
                        ?>
                    <select name="sat_course_6" id="sat_course_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[1]'>$retData[1]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($couResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $facSql = "SELECT * FROM faculties";
                            $facResult = mysqli_query($conn, $facSql);
                        ?>
                    <select name="sat_faculty_6" id="sat_faculty_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[2]'>$retData[2]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($facResult))
                            {
                                echo "<option value='$data[2]'>$data[2]</option>";
                            }
                            ?>
                    </select>

                    <br>

                    <?php
                            $classSql = "SELECT * FROM classroom";
                            $classResult = mysqli_query($conn, $classSql);
                        ?>
                    <select name="sat_class_6" id="sat_class_6">
                        <?php
                            $retM1 = "SELECT * FROM final WHERE day='friday' AND period='period6' AND sem='1'";
                            $retM1Result = mysqli_query($conn, $retM1);
                            while($retData = mysqli_fetch_array($retM1Result))
                            {
                                echo "<option value='$retData[3]'>$retData[3]</option>";
                            }
                            ?>
                        <?php
                            while($data = mysqli_fetch_array($classResult))
                            {
                                echo "<option value='$data[1]'>$data[1]</option>";
                            }
                            ?>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="cut">
        <div class="form-btn-container">
            <input type="submit" value="Update" name="upload" class="sembtn" style="margin: 20px;">
            <button class="sembtn" style="margin: 20px;" onclick="window.print(); return false;">Print</button>
        </div>
    </div>
    </form>
</body>

</html>