<?php
include_once 'connection.php';
$NAME = $_POST['name'];
$sql = mysqli_query($con,"SELECT name FROM students WHERE name = '$NAME'") or die('Error');
$count=mysqli_num_rows($sql);
if($count>0){
    
header("location:home.php?q=7");
}
