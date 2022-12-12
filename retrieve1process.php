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
    $mon_1u1 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_1',
    `faculty`='$mon_faculty_1',
    `class`='$mon_class_1',
    `day`='monday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='monday' AND `period`='period1' AND `sem`='1'";

    $mon_1u2 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_2',
    `faculty`='$mon_faculty_2',
    `class`='$mon_class_2',
    `day`='monday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='monday' AND `period`='period2' AND `sem`='1'";

    $mon_1u3 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_3',
    `faculty`='$mon_faculty_3',
    `class`='$mon_class_3',
    `day`='monday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='monday' AND `period`='period3' AND `sem`='1'";

    $mon_1u4 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_4',
    `faculty`='$mon_faculty_4',
    `class`='$mon_class_4',
    `day`='monday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='monday' AND `period`='period4' AND `sem`='1'";

    $mon_1u5 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_5',
    `faculty`='$mon_faculty_5',
    `class`='$mon_class_5',
    `day`='monday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='monday' AND `period`='period5' AND `sem`='1'";

    $mon_1u6 = "UPDATE `final` 
    SET 
    `courses`='$mon_course_6',
    `faculty`='$mon_faculty_6',
    `class`='$mon_class_6',
    `day`='monday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='monday' AND `period`='period6' AND `sem`='1'";

    // // Tuesday Queries
    $tue_1u1 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_1',
    `faculty`='$tue_faculty_1',
    `class`='$tue_class_1',
    `day`='tuesday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period1' AND `sem`='1'";

    $tue_1u2 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_2',
    `faculty`='$tue_faculty_2',
    `class`='$tue_class_2',
    `day`='tuesday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period2' AND `sem`='1'";

    $tue_1u3 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_3',
    `faculty`='$tue_faculty_3',
    `class`='$tue_class_3',
    `day`='tuesday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period3' AND `sem`='1'";

    $tue_1u4 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_4',
    `faculty`='$tue_faculty_4',
    `class`='$tue_class_4',
    `day`='tuesday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period4' AND `sem`='1'";

    $tue_1u5 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_5',
    `faculty`='$tue_faculty_5',
    `class`='$tue_class_5',
    `day`='tuesday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period5' AND `sem`='1'";

    $tue_1u6 = "UPDATE `final` 
    SET 
    `courses`='$tue_course_6',
    `faculty`='$tue_faculty_6',
    `class`='$tue_class_6',
    `day`='tuesday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='tuesday' AND `period`='period6' AND `sem`='1'";

    // Wednesday Queries
    $wed_1u1 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_1',
    `faculty`='$wed_faculty_1',
    `class`='$wed_class_1',
    `day`='wednesday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period1' AND `sem`='1'";

    $wed_1u2 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_2',
    `faculty`='$wed_faculty_2',
    `class`='$wed_class_2',
    `day`='wednesday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period2' AND `sem`='1'";

    $wed_1u3 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_3',
    `faculty`='$wed_faculty_3',
    `class`='$wed_class_3',
    `day`='wednesday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period3' AND `sem`='1'";

    $wed_1u4 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_4',
    `faculty`='$wed_faculty_4',
    `class`='$wed_class_4',
    `day`='wednesday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period4' AND `sem`='1'";

    $wed_1u5 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_5',
    `faculty`='$wed_faculty_5',
    `class`='$wed_class_5',
    `day`='wednesday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period5' AND `sem`='1'";

    $wed_1u6 = "UPDATE `final` 
    SET 
    `courses`='$wed_course_6',
    `faculty`='$wed_faculty_6',
    `class`='$wed_class_6',
    `day`='wednesday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='wednesday' AND `period`='period6' AND `sem`='1'";

    // Thursday Queries
    $thu_1u1 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_1',
    `faculty`='$thu_faculty_1',
    `class`='$thu_class_1',
    `day`='thursday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='thursday' AND `period`='period1' AND `sem`='1'";

    $thu_1u2 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_2',
    `faculty`='$thu_faculty_2',
    `class`='$thu_class_2',
    `day`='thursday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='thursday' AND `period`='period2' AND `sem`='1'";

    $thu_1u3 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_3',
    `faculty`='$thu_faculty_3',
    `class`='$thu_class_3',
    `day`='thursday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='thursday' AND `period`='period3' AND `sem`='1'";

    $thu_1u4 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_4',
    `faculty`='$thu_faculty_4',
    `class`='$thu_class_4',
    `day`='thursday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='thursday' AND `period`='period4' AND `sem`='1'";

    $thu_1u5 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_5',
    `faculty`='$thu_faculty_5',
    `class`='$thu_class_5',
    `day`='thursday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='thursday' AND `period`='period5' AND `sem`='1'";

    $thu_1u6 = "UPDATE `final` 
    SET 
    `courses`='$thu_course_6',
    `faculty`='$thu_faculty_6',
    `class`='$thu_class_6',
    `day`='thursday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='thursday' AND `period`='period6' AND `sem`='1'";

    // Friday Queries
    $fri_1u1 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_1',
    `faculty`='$fri_faculty_1',
    `class`='$fri_class_1',
    `day`='friday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='friday' AND `period`='period1' AND `sem`='1'";

    $fri_1u2 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_2',
    `faculty`='$fri_faculty_2',
    `class`='`_class_2',
    `day`='friday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='friday' AND `period`='period2' AND `sem`='1'";

    $fri_1u3 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_3',
    `faculty`='$fri_faculty_3',
    `class`='$fri_class_3',
    `day`='friday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='friday' AND `period`='period3' AND `sem`='1'";

    $fri_1u4 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_4',
    `faculty`='$fri_faculty_4',
    `class`='$fri_class_4',
    `day`='friday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='friday' AND `period`='period4' AND `sem`='1'";

    $fri_1u5 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_5',
    `faculty`='$fri_faculty_5',
    `class`='$fri_class_5',
    `day`='friday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='friday' AND `period`='period5' AND `sem`='1'";

    $fri_1u6 = "UPDATE `final` 
    SET 
    `courses`='$fri_course_6',
    `faculty`='$fri_faculty_6',
    `class`='$fri_class_6',
    `day`='friday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='friday' AND `period`='period6' AND `sem`='1'";

    // Saturday Queries
    $sat_1u1 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_1',
    `faculty`='$sat_faculty_1',
    `class`='$sat_class_1',
    `day`='saturday',
    `time`='10:30 - 11:30',
    `period`='period1',
    `sem`='1' WHERE `day`='saturday' AND `period`='period1' AND `sem`='1'";

    $sat_1u2 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_2',
    `faculty`='$sat_faculty_2',
    `class`='$sat_class_2',
    `day`='saturday',
    `time`='11:30 - 12:30',
    `period`='period2',
    `sem`='1' WHERE `day`='saturday' AND `period`='period2' AND `sem`='1'";

    $sat_1u3 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_3',
    `faculty`='$sat_faculty_3',
    `class`='$sat_class_3',
    `day`='saturday',
    `time`='1:15 - 2:15',
    `period`='period3',
    `sem`='1' WHERE `day`='saturday' AND `period`='period3' AND `sem`='1'";

    $sat_1u4 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_4',
    `faculty`='$sat_faculty_4',
    `class`='$sat_class_4',
    `day`='saturday',
    `time`='2:15 - 3:15',
    `period`='period4',
    `sem`='1' WHERE `day`='saturday' AND `period`='period4' AND `sem`='1'";

    $sat_1u5 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_5',
    `faculty`='$sat_faculty_5',
    `class`='$sat_class_5',
    `day`='saturday',
    `time`='3:30 - 4:30',
    `period`='period5',
    `sem`='1' WHERE `day`='saturday' AND `period`='period5' AND `sem`='1'";

    $sat_1u6 = "UPDATE `final` 
    SET 
    `courses`='$sat_course_6',
    `faculty`='$sat_faculty_6',
    `class`='$sat_class_6',
    `day`='saturday',
    `time`='4:30 - 5:30',
    `period`='period6',
    `sem`='1' WHERE `day`='saturday' AND `period`='period6' AND `sem`='1'";

    $mon_1update1 = mysqli_query($conn, $mon_1u1);
    $mon_1update2 = mysqli_query($conn, $mon_1u2);
    $mon_1update3 = mysqli_query($conn, $mon_1u3);
    $mon_1update4 = mysqli_query($conn, $mon_1u4);
    $mon_1update5 = mysqli_query($conn, $mon_1u5);
    $mon_1update6 = mysqli_query($conn, $mon_1u6);

    $tue_1update1 = mysqli_query($conn, $tue_1u1);
    $tue_1update2 = mysqli_query($conn, $tue_1u2);
    $tue_1update3 = mysqli_query($conn, $tue_1u3);
    $tue_1update4 = mysqli_query($conn, $tue_1u4);
    $tue_1update5 = mysqli_query($conn, $tue_1u5);
    $tue_1update6 = mysqli_query($conn, $tue_1u6);

    $wed_1update1 = mysqli_query($conn, $wed_1u1);
    $wed_1update2 = mysqli_query($conn, $wed_1u2);
    $wed_1update3 = mysqli_query($conn, $wed_1u3);
    $wed_1update4 = mysqli_query($conn, $wed_1u4);
    $wed_1update5 = mysqli_query($conn, $wed_1u5);
    $wed_1update6 = mysqli_query($conn, $wed_1u6);

    $thu_1update1 = mysqli_query($conn, $thu_1u1);
    $thu_1update2 = mysqli_query($conn, $thu_1u2);
    $thu_1update3 = mysqli_query($conn, $thu_1u3);
    $thu_1update4 = mysqli_query($conn, $thu_1u4);
    $thu_1update5 = mysqli_query($conn, $thu_1u5);
    $thu_1update6 = mysqli_query($conn, $thu_1u6);

    $fri_1update1 = mysqli_query($conn, $fri_1u1);
    $fri_1update2 = mysqli_query($conn, $fri_1u2);
    $fri_1update3 = mysqli_query($conn, $fri_1u3);
    $fri_1update4 = mysqli_query($conn, $fri_1u4);
    $fri_1update5 = mysqli_query($conn, $fri_1u5);
    $fri_1update6 = mysqli_query($conn, $fri_1u6);
    
    $sat_1update1 = mysqli_query($conn, $sat_1u1);
    $sat_1update2 = mysqli_query($conn, $sat_1u2);
    $sat_1update3 = mysqli_query($conn, $sat_1u3);
    $sat_1update4 = mysqli_query($conn, $sat_1u4);
    $sat_1update5 = mysqli_query($conn, $sat_1u5);
    $sat_1update6 = mysqli_query($conn, $sat_1u6);

    if ($mon_1update1)
    {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated! Thank You')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
    }
    else 
    {
        echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Not Updated')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>";
        header("Location: ./sem1.php");
    }
}

?>