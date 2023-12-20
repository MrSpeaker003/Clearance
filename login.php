<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="css/mystyle.css">
           </head>
       <body>
        <div class="container">
   <div class="header">
   <h1>UNIVERSITY CLEARANCE SYSTEM</h1>
</div>
<?php
if(@$_GET['q']==0){
   echo'<body><center>
   <div class="login2">
        <div class="row">
      <h3>NEW REGISTRATION</h3>
    </div>
  <form action="registration.php" method="post">
        <input class="inpt2" name="name" type="text" placeholder="Enter Your Name" required>
      <select class="inpt2" name="gender" required>
        <option>Select Gender</option>
        <option value="MALE">MALE</option>
        <option value="FEMALE">FEMALE</option>
        </select>
        <select class="inpt2" name="dept" type="text" placeholder="Enter Your Department" required >
        <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
        <input class="inpt2" name="email" type="email" placeholder="Enter Your Email" required>
        <input class="inpt2" name="regno" type="text" placeholder="Enter Your Reg. No" required>
    <select class="inpt2" name="clearance"required>
    <option>Clearance Status</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
      <input class="inpt2" name="pass" type="password" placeholder="Enter Your Password" required>
    <hr>
    <input class="btn" type="submit" value="Register">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear"><br>

      </form>
     <a href="login.php?q=1"> <button class="btn" >Back to Login</button></a>
  </div>
</center></body>';
}
?>

<?php
if(@$_GET['q']==1){
   echo'<body><center>
    <div class="login">
          <div class="row">
      <h3>Student Login</h3>
    </div>
  <form action="studentLogin.php" method="post">
        <input class="inpt2" name="reg" type="text" placeholder="Enter Your Reg. No" required>
    <input class="inpt2" name="pass" type="password" placeholder="Enter Your Password" required><br>
    <hr>
    <input class="btn" type="submit" value="Login">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear"> <br><br>
     </form>
     <a href="login.php?q=0"> <button class="btn" >Back to Register</button></a>
  </div>
</center></body>';
}
?>
<?php
if(@$_GET['q']==2){
  echo'<br><br><br><br>
  <center><h1>INVALID LOGIN DETAILES <span class="blink" style="color:red";>!!!</span></h1>
  <a href="login.php?q=1">Back to login</a></center>';
}
?>
</div>
    </body>
</html>