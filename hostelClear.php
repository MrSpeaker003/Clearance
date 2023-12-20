<?php
include_once 'connection.php';
$REG = $_POST['regno'];
$CLEAR = $_POST['clearance'];

$sql = mysqli_query($con,"SELECT clearance FROM hostel WHERE clearance = '$CLEAR' and regno = '$REG'") or die('Error');
$count=mysqli_num_rows($sql);
if($count>0){
    
header("location:home.php?q=7");
}
else
 header("location:home.php?q=6");
?>
