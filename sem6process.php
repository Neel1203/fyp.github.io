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

    // Monday Queries
    $mon_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_1',
        '$mon_faculty_1','$mon_class_1',
        'monday','10:30 - 11:30','period1','6'
    )";
    $mon_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_2',
        '$mon_faculty_2','$mon_class_2',
        'monday','11:30 - 12:30','period2','6'
    )";
    $mon_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_3',
        '$mon_faculty_3','$mon_class_3',
        'monday','1:15 - 2:15','period3','6'
    )";
    $mon_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_4',
        '$mon_faculty_4','$mon_class_4',
        'monday','2:15 - 3:15','period4','6'
    )";
    $mon_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_5',
        '$mon_faculty_5','$mon_class_5',
        'monday','3:30 - 4:30','period5','6'
    )";
    $mon_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$mon_course_6',
        '$mon_faculty_6','$mon_class_6',
        'monday','4:30 - 5:30','period6','6'
    )";

    // Tuesday Queries
    $tue_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_1',
        '$tue_faculty_1','$tue_class_1',
        'tuesday','10:30 - 11:30','period1','6'
    )";
    $tue_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_2',
        '$tue_faculty_2','$tue_class_2',
        'tuesday','11:30 - 12:30','period2','6'
    )";
    $tue_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_3',
        '$tue_faculty_3','$tue_class_3',
        'tuesday','1:15 - 2:15','period3','6'
    )";
    $tue_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_4',
        '$tue_faculty_4','$tue_class_4',
        'tuesday','2:15 - 3:15','period4','6'
    )";
    $tue_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_5',
        '$tue_faculty_5','$tue_class_5',
        'tuesday','3:30 - 4:30','period5','6'
    )";
    $tue_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$tue_course_6',
        '$tue_faculty_6','$tue_class_6',
        'tuesday','4:30 - 5:30','period6','6'
    )";

    // Wednesday Queries
    $wed_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_1',
        '$wed_faculty_1','$wed_class_1',
        'wednesday','10:30 - 11:30','period1','6'
    )";
    $wed_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_2',
        '$wed_faculty_2','$wed_class_2',
        'wednesday','11:30 - 12:30','period2','6'
    )";
    $wed_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_3',
        '$wed_faculty_3','$wed_class_3',
        'wednesday','1:15 - 2:15','period3','6'
    )";
    $wed_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_4',
        '$wed_faculty_4','$wed_class_4',
        'wednesday','2:15 - 3:15','period4','6'
    )";
    $wed_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_5',
        '$wed_faculty_5','$wed_class_5',
        'wednesday','3:30 - 4:30','period5','6'
    )";
    $wed_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$wed_course_6',
        '$wed_faculty_6','$wed_class_6',
        'wednesday','4:30 - 5:30','period6','6'
    )";

    // Thursday Queries
    $thu_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_1',
        '$thu_faculty_1','$thu_class_1',
        'thursday','10:30 - 11:30','period1','6'
    )";
    $thu_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_2',
        '$thu_faculty_2','$thu_class_2',
        'thursday','11:30 - 12:30','period2','6'
    )";
    $thu_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_3',
        '$thu_faculty_3','$thu_class_3',
        'thursday','1:15 - 2:15','period3','6'
    )";
    $thu_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_4',
        '$thu_faculty_4','$thu_class_4',
        'thursday','2:15 - 3:15','period4','6'
    )";
    $thu_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_5',
        '$thu_faculty_5','$thu_class_5',
        'thursday','3:30 - 4:30','period5','6'
    )";
    $thu_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$thu_course_6',
        '$thu_faculty_6','$thu_class_6',
        'thursday','4:30 - 5:30','period6','6'
    )";

    // Friday Queries
    $fri_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_1',
        '$fri_faculty_1','$fri_class_1',
        'friday','10:30 - 11:30','period1','6'
    )";
    $fri_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_2',
        '$fri_faculty_2','$fri_class_2',
        'friday','11:30 - 12:30','period2','6'
    )";
    $fri_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_3',
        '$fri_faculty_3','$fri_class_3',
        'friday','1:15 - 2:15','period3','6'
    )";
    $fri_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_4',
        '$fri_faculty_4','$fri_class_4',
        'friday','2:15 - 3:15','period4','6'
    )";
    $fri_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_5',
        '$fri_faculty_5','$fri_class_5',
        'friday','3:30 - 4:30','period5','6'
    )";
    $fri_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$fri_course_6',
        '$fri_faculty_6','$fri_class_6',
        'friday','4:30 - 5:30','period6','6'
    )";

    // Saturday Queries
    $sat_1q1 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_1',
        '$sat_faculty_1','$sat_class_1',
        'saturday','10:30 - 11:30','period1','6'
    )";
    $sat_1q2 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_2',
        '$sat_faculty_2','$sat_class_2',
        'saturday','11:30 - 12:30','period2','6'
    )";
    $sat_1q3 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_3',
        '$sat_faculty_3','$sat_class_3',
        'saturday','1:15 - 2:15','period3','6'
    )";
    $sat_1q4 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_4',
        '$sat_faculty_4','$sat_class_4',
        'saturday','2:15 - 3:15','period4','6'
    )";
    $sat_1q5 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_5',
        '$sat_faculty_5','$sat_class_5',
        'saturday','3:30 - 4:30','period5','6'
    )";
    $sat_1q6 = "INSERT INTO `final`(`id`, `courses`, `faculty`, `class`, `day`, `time`, `period`, `sem`) 
    VALUES 
    (
        '[value-1]','$sat_course_6',
        '$sat_faculty_6','$sat_class_6',
        'saturday','4:30 - 5:30','period6','6'
    )";

    $mon_1r1 = mysqli_query($conn, $mon_1q1);
    $mon_1r2 = mysqli_query($conn, $mon_1q2);
    $mon_1r3 = mysqli_query($conn, $mon_1q3);
    $mon_1r4 = mysqli_query($conn, $mon_1q4);
    $mon_1r5 = mysqli_query($conn, $mon_1q5);
    $mon_1r6 = mysqli_query($conn, $mon_1q6);

    $tue_1r1 = mysqli_query($conn, $tue_1q1);
    $tue_1r2 = mysqli_query($conn, $tue_1q2);
    $tue_1r3 = mysqli_query($conn, $tue_1q3);
    $tue_1r4 = mysqli_query($conn, $tue_1q4);
    $tue_1r5 = mysqli_query($conn, $tue_1q5);
    $tue_1r6 = mysqli_query($conn, $tue_1q6);

    $wed_1r1 = mysqli_query($conn, $wed_1q1);
    $wed_1r2 = mysqli_query($conn, $wed_1q2);
    $wed_1r3 = mysqli_query($conn, $wed_1q3);
    $wed_1r4 = mysqli_query($conn, $wed_1q4);
    $wed_1r5 = mysqli_query($conn, $wed_1q5);
    $wed_1r6 = mysqli_query($conn, $wed_1q6);

    $thu_1r1 = mysqli_query($conn, $thu_1q1);
    $thu_1r2 = mysqli_query($conn, $thu_1q2);
    $thu_1r3 = mysqli_query($conn, $thu_1q3);
    $thu_1r4 = mysqli_query($conn, $thu_1q4);
    $thu_1r5 = mysqli_query($conn, $thu_1q5);
    $thu_1r6 = mysqli_query($conn, $thu_1q6);

    $fri_1r1 = mysqli_query($conn, $fri_1q1);
    $fri_1r2 = mysqli_query($conn, $fri_1q2);
    $fri_1r3 = mysqli_query($conn, $fri_1q3);
    $fri_1r4 = mysqli_query($conn, $fri_1q4);
    $fri_1r5 = mysqli_query($conn, $fri_1q5);
    $fri_1r6 = mysqli_query($conn, $fri_1q6);

    $sat_1r1 = mysqli_query($conn, $sat_1q1);
    $sat_1r2 = mysqli_query($conn, $sat_1q2);
    $sat_1r3 = mysqli_query($conn, $sat_1q3);
    $sat_1r4 = mysqli_query($conn, $sat_1q4);
    $sat_1r5 = mysqli_query($conn, $sat_1q5);
    $sat_1r6 = mysqli_query($conn, $sat_1q6);

    if ($mon_1r1)
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