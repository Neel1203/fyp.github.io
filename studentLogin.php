<?php
include 'connection.php';

$svv = $_POST['uid'];
$pass = $_POST['pwd'];

$sql = "SELECT * FROM `student` WHERE `svv` = '$svv' AND `pass` = '$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1)
{
    header("Location: ./sloginwel.html");
}
else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>