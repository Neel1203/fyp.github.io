<?php
include 'connection.php';

$couSql = "SELECT * FROM courses WHERE sem = 1";
$couResult = mysqli_query($conn, $couSql);

$facSql = "SELECT * FROM faculties";
$facResult = mysqli_query($conn, $facSql);

$classSql = "SELECT * FROM classroom";
$classResult = mysqli_query($conn, $classSql);
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
        <a href="./index.html"><button class="sembtn">First Semester</button></a>
        <a href="./sem2.html"><button class="sembtn">Second Semester</button></a>
        <a href="./sem3.html"><button class="sembtn">Third Semester</button></a>
        <a href="./sem4.html"><button class="sembtn">Fourth Semester</button></a>
        <a href="./sem5.html"><button class="sembtn">Fifth Semester</button></a>
        <a href="./sem6.html"><button class="sembtn">Sixth Semester</button></a>
    </section>

    <!-- <form action="#" method="post"> -->
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
        <tr>
            <th class="day">Monday</th>
            <form action="" method="post">
                <td>
                    <select name="mon_course_1" id="mon_course_1">
                        <option value="subject">-- Select Course --</option>
                        <?php
                        while ($subs = mysqli_fetch_assoc($couResult)) {
                            echo "<option value='" . $subs['course_name'] . "'>" . $subs['course_name'] . "</options>";
                        }
                        ?>
                    </select><br>
                    <select name="mon_faculty_1" id="mon_faculty_1">
                        <option value="subject">-- Select Faculty --</option>
                        <?php
                        while ($facs = mysqli_fetch_assoc($facResult)) {
                            echo "<option value='" . $facs['faculty_name'] . "'>" . $facs['faculty_name'] . "</options>";
                        }
                        ?>
                    </select><br>
                    <select name="mon_class_1" id="mon_class_1">
                        <option value="subject">-- Select Class --</option>
                        <?php
                        while ($class = mysqli_fetch_assoc($classResult)) {
                            echo "<option value='" . $class['room_no'] . "'>" . $class['room_no'] . " (" . $class['type'] . ")" . "</options>";
                        }
                        ?>
                    </select>
                    <input type="submit" value="Go" name="go">
                </td>
            </form>
            <?php
                include 'connection.php';

                if (isset($_POST['go'])) {
                    $mon_course_1 = $_POST['mon_course_1'];
                    $mon_faculty_1 = $_POST['mon_faculty_1'];
                    $mon_class_1 = $_POST['mon_class_1'];

                    // $mon_p1Q = "INSERT INTO `semester1paarth(`day`, `period1`) VALUES ('Monday', '$mon_course_1'<br>'$mon_faculty_1'<br>'$mon_class_1')";
                    $mon_p1Q = "INSERT INTO `semester1paarth` (`day`, `period1`) VALUES ('Monday', '$mon_course_1` <br> `$mon_faculty_1` <br> `$mon_class_1')";
                    $mon_q1Q = mysqli_query($conn, $mon_p1Q);

                    if (!$mon_q1Q) {
                        echo "<script type='text/javascript'>alert('Not Done')</script>";
                    } else {
                        echo "<script type='text/javascript'>alert('Done')</script>";
                    }
                }
                ?>
            <td>
                <select name="mon_course_2" id="mon_course_2">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="mon_faculty_2" id="mon_faculty_2">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="mon_class_2" id="mon_class_2">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">B</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">B</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="day">Tuesday</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">R</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">R</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="day">Wednesday</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">E</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">E</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="day">Thursday</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">A</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">A</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="day">Friday</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">K</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">K</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="day">Saturday</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">S</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <th class="brk">S</th>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
            <td>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Course--</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Faculty --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select><br>
                <select name="sem1" id="mon">
                    <option value="subject">-- Select Class --</option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                    <option value="subject"></option>
                </select>
            </td>
        </tr>
    </table>
    <div class="form-btn-container">
        <input type="submit" value="Upload" class="sembtn" style="display: flex; align-items: center;">
        <input style="display: flex; align-items: center;" value="Print" class="sembtn custom-btn">
    </div>
    <!-- </form> -->
</body>

</html>