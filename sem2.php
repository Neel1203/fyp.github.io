<?php
include 'connection.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./JS/script.js"></script>
    <title>Time Table Generator</title>
</head>
<body>
    <section id="navbar">
        <p>TIME TABLE GENERATOR, Computer Engineering Department</p>
    </section>

    <section id="btn-container">
        <a href="./sem1.php"><button class="sembtn">First Semester</button></a>
        <a href="#"><button class="sembtn">Second Semester</button></a>
        <a href="./sem3.php"><button class="sembtn">Third Semester</button></a>
        <a href="./sem4.php"><button class="sembtn">Fourth Semester</button></a>
        <a href="./sem5.php"><button class="sembtn">Fifth Semester</button></a>
        <a href="./sem6.php"><button class="sembtn">Sixth Semester</button></a>
    </section>
    <form action="./sem2process.php" method="post" autocomplete="off">
    <table>
        <tr>
            <th></th>
            <th class="time">10:30 <br>-<br> 11:30</th>
            <th class="time">11:30 <br>-<br> 12:30</th>
            <th class="time">12:30 <br>-<br> 1:15</th>
            <th class="time">1:15 <br>-<br> 2:15</th>
            <th class="time">2-15 <br>-<br> 3:15</th>
            <th class="time">3:15 <br>-<br> 3:30</th>
            <th class="time">3:30 <br>-<br> 4:30</th>
            <th class="time">4:30 <br>-<br> 5:30</th>
        </tr>
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! MONDAY !!!!! ---------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
    
        <tr>
            <th class="day">Monday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_1" id="mon_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_2" id="mon_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">B</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_3" id="mon_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_4" id="mon_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">B</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_5" id="mon_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="mon_course_6" id="mon_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>
        </tr>
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! TUESDAY !!!!! ---------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
        <tr>
            <th class="day">Tuesday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_1" id="tue_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_2" id="tue_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">R</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_3" id="tue_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_4" id="tue_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">R</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_5" id="tue_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="tue_course_6" id="tue_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>
        </tr>
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! WEDNESDAY !!!!! -------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
        <tr>
            <th class="day">Wednesday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_1" id="wed_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_2" id="wed_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">E</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_3" id="wed_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_4" id="wed_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">E</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_5" id="wed_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="wed_course_6" id="wed_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while ($data = mysqli_fetch_array($classResult)) {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>
        </tr>
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! THURSDAY !!!!! -------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
        <tr>
            <th class="day">Thursday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_1" id="thu_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_2" id="thu_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">A</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_3" id="thu_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_4" id="thu_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">A</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_5" id="thu_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="thu_course_6" id="thu_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {   
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>
        </tr>
<!----------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! FRIDAY !!!!! -------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
        <tr>
            <th class="day">Friday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_1" id="fri_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_2" id="fri_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">K</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_3" id="fri_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_4" id="fri_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">K</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_5" id="fri_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="fri_course_6" id="fri_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {   
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>
        </tr>
<!----------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! SATURDAY !!!!! ------------------------------------------------------------------------------------------------------>
<!----------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------->
        <tr>
            <th class="day">Saturday</th>
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_1" id="sat_course_1">
                <option value="subject">-- Select Course--</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_2" id="sat_course_2">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">S</th>
            
            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_3" id="sat_course_3">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_4" id="sat_course_4">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
                <?php
                while($data = mysqli_fetch_array($classResult))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
            </td>

            <th class="brk">S</th>

            <td>
                <?php
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_5" id="sat_course_5">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
                $couSql = "SELECT * FROM courses WHERE sem = 2";
                $couResult = mysqli_query($conn, $couSql);
                ?>
                <select name="sat_course_6" id="sat_course_6">;
                <option value="">-- Select Course --</option>
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
                <option value="faculty">-- Select Faculty--</option>
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
                <option value="class">-- Select Class--</option>
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
    <div class="form-btn-container">
        <input type="submit" value="Upload" name="upload" class="sembtn" style="margin: 20px;">
    </div>
    </form>
</body>
</html>