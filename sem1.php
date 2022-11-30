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

    <form action="#" method="post">
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
                <td>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Course --</option>
                        <?php
                            while($subs = mysqli_fetch_assoc($couResult)){
                                echo "<option>".$subs['course_name']."</options>";
                            }
                        ?>
                    </select><br>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Faculty --</option>
                        <?php
                            while($facs = mysqli_fetch_assoc($facResult)){
                                echo "<option>".$facs['faculty_name']."</options>";
                            }
                        ?>
                    </select><br>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Class --</option>
                        <?php
                            while($class = mysqli_fetch_assoc($classResult)){
                                echo "<option>".$class['room_no']." (".$class['type'].")"."</options>";
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Course--</option>
                        <?php
                            while($subs = mysqli_fetch_assoc($couResult)){
                                echo "<option>".$subs['course_name']."</options>";
                            }
                        ?>
                    </select><br>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Faculty --</option>
                        <?php
                            while($facs = mysqli_fetch_assoc($facResult)){
                                echo "<option>".$facs['faculty_name']."</options>";
                            }
                        ?>
                    </select><br>
                    <select name="sem1" id="mon">
                        <option value="subject">-- Select Class --</option>
                        <?php
                            while($class = mysqli_fetch_assoc($classResult)){
                                echo "<option>".$class['room_no']." (".$class['type'].")"."</options>";
                            }
                        ?>
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
    </form>
</body>
</html>