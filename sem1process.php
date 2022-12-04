<?php
include 'connection.php';

if(isset($_POST['upload'])){

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
    





    $mon_Q = "INSERT INTO `semester1paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
        'Monday', 
        '$mon_course_1''$mon_faculty_1''$mon_class_1',
        '$mon_course_2''$mon_faculty_2''$mon_class_2',
        '$mon_course_3''$mon_faculty_3''$mon_class_3',
        '$mon_course_4''$mon_faculty_4''$mon_class_4',
        '$mon_course_5''$mon_faculty_5''$mon_class_5',
        '$mon_course_6''$mon_faculty_6''$mon_class_6'
    )";
    $tue_Q = "INSERT INTO `semester1paarth`(`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`)
    VALUES (
        'Tuesday', 
        '$tue_course_1''$tue_faculty_1''$tue_class_1',
        '$tue_course_2''$tue_faculty_2''$tue_class_2',
        '$tue_course_3''$tue_faculty_3''$tue_class_3',
        '$tue_course_4''$tue_faculty_4''$tue_class_4',
        '$tue_course_5''$tue_faculty_5''$tue_class_5',
        '$tue_course_6''$tue_faculty_6''$tue_class_6'
    )";

    $mon_R = mysqli_query($conn, $mon_Q);
    $tue_R = mysqli_query($conn, $tue_Q);

    if ($mon_R && $tue_R) {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Inserted! Thank You')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
    }
    else {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Not Inserted')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
        header("Location: ./sem1.php");
    }
}
?>