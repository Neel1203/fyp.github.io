<?php
include 'connection.php';
header("Location: ./sem1.php");

$email = $_POST['uid'];
$pass = $_POST['pwd'];

$sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `pass` = '$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1)
{
}
else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
if ($email == 'admin' && $pass == 'pass123')
{
    header("Location: ./sem1.php");
}
else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>