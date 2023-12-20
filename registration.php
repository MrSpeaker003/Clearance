<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];

$sql = "INSERT INTO securitydiv VALUES('$sn','$name','$department','$regno','$clearance')";

if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>

<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$gender = $_POST['gender'];
$department = $_POST['dept'];
$email = $_POST['email'];
$regno = $_POST['regno'];
$password = $_POST['pass'];
$clearance = $_POST['clearance'];


$sql = "INSERT INTO students VALUES('$sn','$name','$gender','$department','$email','$regno','$password')";

if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>


<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];


$sql = "INSERT INTO hostel VALUES('$sn','$name','$department','$regno','$clearance')";
if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>

<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];

$sql = "INSERT INTO library VALUES('$sn','$name','$department','$regno','$clearance')";

if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>

<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];

$sql = "INSERT INTO department VALUES('$sn','$name','$department','$regno','$clearance')";
if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>

<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];

$sql = "INSERT INTO admin VALUES('$sn','$name','$department','$regno','$clearance')";

if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>

<?php
include_once 'connection.php';
$sn=0;
$name = $_POST['name'];
$department = $_POST['dept'];
$regno = $_POST['regno'];
$clearance = $_POST['clearance'];


$sql = "INSERT INTO examrecord VALUES('$sn','$name','$department','$regno','$clearance')";


if(mysqli_query($con,$sql)){
    
header("location:login.php?q=1");
}
else
header("location:login.php?q=0");
?>