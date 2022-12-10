<?php
include 'connection.php';

if(isset($_POST['upload']))
{
    // Monday Declaration
    $mon_course_1 = $_POST['mon_course_1'];
    $mon_faculty_1 = $_POST['mon_faculty_1'];
    $mon_class_1 = $_POST['mon_class_1'];

    $mon_course_2 = $_POST['mon_course_2'];
    $mon_faculty_2 = $_POST['mon_faculty_2'];
    $mon_class_2 = $_POST['mon_class_2'];

    $mon_course_3 = $_POST['mon_course_3'];
    $mon_faculty_3 = $_POST['mon_faculty_3'];
    $mon_class_3 = $_POST['mon_class_3'];

    $mon_course_4 = $_POST['mon_course_4'];
    $mon_faculty_4 = $_POST['mon_faculty_4'];
    $mon_class_4 = $_POST['mon_class_4'];

    $mon_course_5 = $_POST['mon_course_5'];
    $mon_faculty_5 = $_POST['mon_faculty_5'];
    $mon_class_5 = $_POST['mon_class_5'];

    $mon_course_6 = $_POST['mon_course_6'];
    $mon_faculty_6 = $_POST['mon_faculty_6'];
    $mon_class_6 = $_POST['mon_class_6'];

    // Tuesday Declaration
    $tue_course_1 = $_POST['tue_course_1'];
    $tue_faculty_1 = $_POST['tue_faculty_1'];
    $tue_class_1 = $_POST['tue_class_1'];

    $tue_course_2 = $_POST['tue_course_2'];
    $tue_faculty_2 = $_POST['tue_faculty_2'];
    $tue_class_2 = $_POST['tue_class_2'];

    $tue_course_3 = $_POST['tue_course_3'];
    $tue_faculty_3 = $_POST['tue_faculty_3'];
    $tue_class_3 = $_POST['tue_class_3'];

    $tue_course_4 = $_POST['tue_course_4'];
    $tue_faculty_4 = $_POST['tue_faculty_4'];
    $tue_class_4 = $_POST['tue_class_4'];

    $tue_course_5 = $_POST['tue_course_5'];
    $tue_faculty_5 = $_POST['tue_faculty_5'];
    $tue_class_5 = $_POST['tue_class_5'];

    $tue_course_6 = $_POST['tue_course_6'];
    $tue_faculty_6 = $_POST['tue_faculty_6'];
    $tue_class_6 = $_POST['tue_class_6'];
    
    // Wednesday Declaration
    $wed_course_1 = $_POST['wed_course_1'];
    $wed_faculty_1 = $_POST['wed_faculty_1'];
    $wed_class_1 = $_POST['wed_class_1'];

    $wed_course_2 = $_POST['wed_course_2'];
    $wed_faculty_2 = $_POST['wed_faculty_2'];
    $wed_class_2 = $_POST['wed_class_2'];

    $wed_course_3 = $_POST['wed_course_3'];
    $wed_faculty_3 = $_POST['wed_faculty_3'];
    $wed_class_3 = $_POST['wed_class_3'];

    $wed_course_4 = $_POST['wed_course_4'];
    $wed_faculty_4 = $_POST['wed_faculty_4'];
    $wed_class_4 = $_POST['wed_class_4'];

    $wed_course_5 = $_POST['wed_course_5'];
    $wed_faculty_5 = $_POST['wed_faculty_5'];
    $wed_class_5 = $_POST['wed_class_5'];

    $wed_course_6 = $_POST['wed_course_6'];
    $wed_faculty_6 = $_POST['wed_faculty_6'];
    $wed_class_6 = $_POST['wed_class_6'];

    // Thursday Declaration
    $thu_course_1 = $_POST['thu_course_1'];
    $thu_faculty_1 = $_POST['thu_faculty_1'];
    $thu_class_1 = $_POST['thu_class_1'];

    $thu_course_2 = $_POST['thu_course_2'];
    $thu_faculty_2 = $_POST['thu_faculty_2'];
    $thu_class_2 = $_POST['thu_class_2'];

    $thu_course_3 = $_POST['thu_course_3'];
    $thu_faculty_3 = $_POST['thu_faculty_3'];
    $thu_class_3 = $_POST['thu_class_3'];

    $thu_course_4 = $_POST['thu_course_4'];
    $thu_faculty_4 = $_POST['thu_faculty_4'];
    $thu_class_4 = $_POST['thu_class_4'];

    $thu_course_5 = $_POST['thu_course_5'];
    $thu_faculty_5 = $_POST['thu_faculty_5'];
    $thu_class_5 = $_POST['thu_class_5'];

    $thu_course_6 = $_POST['thu_course_6'];
    $thu_faculty_6 = $_POST['thu_faculty_6'];
    $thu_class_6 = $_POST['thu_class_6'];
    
    // Thursday Declaration
    $fri_course_1 = $_POST['fri_course_1'];
    $fri_faculty_1 = $_POST['fri_faculty_1'];
    $fri_class_1 = $_POST['fri_class_1'];

    $fri_course_2 = $_POST['fri_course_2'];
    $fri_faculty_2 = $_POST['fri_faculty_2'];
    $fri_class_2 = $_POST['fri_class_2'];

    $fri_course_3 = $_POST['fri_course_3'];
    $fri_faculty_3 = $_POST['fri_faculty_3'];
    $fri_class_3 = $_POST['fri_class_3'];

    $fri_course_4 = $_POST['fri_course_4'];
    $fri_faculty_4 = $_POST['fri_faculty_4'];
    $fri_class_4 = $_POST['fri_class_4'];

    $fri_course_5 = $_POST['fri_course_5'];
    $fri_faculty_5 = $_POST['fri_faculty_5'];
    $fri_class_5 = $_POST['fri_class_5'];

    $fri_course_6 = $_POST['fri_course_6'];
    $fri_faculty_6 = $_POST['fri_faculty_6'];
    $fri_class_6 = $_POST['fri_class_6'];

    // Saturday Declaration
    $sat_course_1 = $_POST['sat_course_1'];
    $sat_faculty_1 = $_POST['sat_faculty_1'];
    $sat_class_1 = $_POST['sat_class_1'];

    $sat_course_2 = $_POST['sat_course_2'];
    $sat_faculty_2 = $_POST['sat_faculty_2'];
    $sat_class_2 = $_POST['sat_class_2'];

    $sat_course_3 = $_POST['sat_course_3'];
    $sat_faculty_3 = $_POST['sat_faculty_3'];
    $sat_class_3 = $_POST['sat_class_3'];

    $sat_course_4 = $_POST['sat_course_4'];
    $sat_faculty_4 = $_POST['sat_faculty_4'];
    $sat_class_4 = $_POST['sat_class_4'];

    $sat_course_5 = $_POST['sat_course_5'];
    $sat_faculty_5 = $_POST['sat_faculty_5'];
    $sat_class_5 = $_POST['sat_class_5'];

    $sat_course_6 = $_POST['sat_course_6'];
    $sat_faculty_6 = $_POST['sat_faculty_6'];
    $sat_class_6 = $_POST['sat_class_6'];

    $mon_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
        'Monday', 
        '$mon_course_1''$mon_faculty_1''$mon_class_1',
        '$mon_course_2''$mon_faculty_2''$mon_class_2',
        '$mon_course_3''$mon_faculty_3''$mon_class_3',
        '$mon_course_4''$mon_faculty_4''$mon_class_4',
        '$mon_course_5''$mon_faculty_5''$mon_class_5',
        '$mon_course_6''$mon_faculty_6''$mon_class_6'
    )";
    $tue_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
        'Tuesday', 
        '$tue_course_1''$tue_faculty_1''$tue_class_1',
        '$tue_course_2''$tue_faculty_2''$tue_class_2',
        '$tue_course_3''$tue_faculty_3''$tue_class_3',
        '$tue_course_4''$tue_faculty_4''$tue_class_4',
        '$tue_course_5''$tue_faculty_5''$tue_class_5',
        '$tue_course_6''$tue_faculty_6''$tue_class_6'
    )";

    $wed_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
    'Wednesday', 
        '$wed_course_1''$wed_faculty_1''$wed_class_1',
        '$wed_course_2''$wed_faculty_2''$wed_class_2',
        '$wed_course_3''$wed_faculty_3''$wed_class_3',
        '$wed_course_4''$wed_faculty_4''$wed_class_4',
        '$wed_course_5''$wed_faculty_5''$wed_class_5',
        '$wed_course_6''$wed_faculty_6''$wed_class_6'
    )";
    $thu_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
    'Thursday', 
        '$thu_course_1''$thu_faculty_1''$thu_class_1',
        '$thu_course_2''$thu_faculty_2''$thu_class_2',
        '$thu_course_3''$thu_faculty_3''$thu_class_3',
        '$thu_course_4''$thu_faculty_4''$thu_class_4',
        '$thu_course_5''$thu_faculty_5''$thu_class_5',
        '$thu_course_6''$thu_faculty_6''$thu_class_6'
    )";
    $fri_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
    'Friday', 
        '$fri_course_1''$fri_faculty_1''$fri_class_1',
        '$fri_course_2''$fri_faculty_2''$fri_class_2',
        '$fri_course_3''$fri_faculty_3''$fri_class_3',
        '$fri_course_4''$fri_faculty_4''$fri_class_4',
        '$fri_course_5''$fri_faculty_5''$fri_class_5',
        '$fri_course_6''$fri_faculty_6''$fri_class_6'
    )";
    $sat_Q = "INSERT INTO `semester6paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
    'SAtur+day', 
        '$sat_course_1''$sat_faculty_1''$sat_class_1',
        '$sat_course_2''$sat_faculty_2''$sat_class_2',
        '$sat_course_3''$sat_faculty_3''$sat_class_3',
        '$sat_course_4''$sat_faculty_4''$sat_class_4',
        '$sat_course_5''$sat_faculty_5''$sat_class_5',
        '$sat_course_6''$sat_faculty_6''$sat_class_6'
    )";

    $mon_R = mysqli_query($conn, $mon_Q);
    $tue_R = mysqli_query($conn, $tue_Q);
    $wed_R = mysqli_query($conn, $wed_Q);
    $thu_R = mysqli_query($conn, $thu_Q);
    $fri_R = mysqli_query($conn, $fri_Q);
    $sat_R = mysqli_query($conn, $sat_Q);

    if ($mon_R && $tue_R && $wed_R && $thu_R && $fri_R && $sat_R)
    {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Inserted! Thank You')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
    }
    else 
    {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Not Inserted')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
        header("Location: ./sem6.php");
    }
}

?>