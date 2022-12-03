<?php
include 'connection.php';

if(isset($_POST['go'])){
    $mon_course_1 = $_POST['mon_course_1'];
    $mon_faculty_1 = $_POST['mon_faculty_1'];
    $mon_class_1 = $_POST['mon_class_1'];

    // $mon_p1Q = "INSERT INTO `semester1paarth(`day`, `period1`) VALUES ('Monday', '$mon_course_1'<br>'$mon_faculty_1'<br>'$mon_class_1')";
    $mon_p1Q = "INSERT INTO `semester1paarth(`day`, `period1`) VALUES ('Monday', '$mon_course_1')";
    $mon_q1Q = mysqli_query($conn, $mon_p1Q);

    if (!$mon_q1Q) {
        echo "<script type='text/javascript'>alert('Not Done')</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('Done')</script>";
    }
}
?>