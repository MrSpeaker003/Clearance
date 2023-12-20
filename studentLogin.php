<?php
include_once 'connection.php';
$REG = $_POST['reg'];
$PASSWORD = $_POST['pass'];

$sql = mysqli_query($con,"SELECT email FROM students WHERE regno = '$REG' and password = '$PASSWORD'") or die('Error');
$count=mysqli_num_rows($sql);
if($count>0){
    
header("location:home.php?q=1");
}
else
header("location:login.php?q=2");
?>