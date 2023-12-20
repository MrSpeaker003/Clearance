
<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="css/mystyle.css">
        <style>
          .transparent{
            background:transparent; 
            backdrop-filter:blur(10px);
          }
          </style>
         </head>

         <body style="background-image:url('img/tab.jpg'); opacity:2; background-size: 60px 60px;"> 
<div class="header">
<center> <h1>UNIVERSITY CLEARANCE SYSTEM</h1></center>
   <a href="home.php?q=1"><div class="nav">
    <div class="menu"></div>
    <div class="menu"></div>
    <div class="menu"></div>
</div></a>
</div>

<?php
if(@$_GET['q']==0) {
    echo'WELCOME';
}
?>

<?php
if(@$_GET['q']==1) {
    echo'
<br><br><br><br>
<center>
<a href="home.php?q=0"><button class="btnmenu">HOME</button></a><a href="home.php?q=2"><button class="btnmenu">CLEARANCE</button></a><a href="login.php"><button class="btnmenu">LOGOUT</button></a>
</center>';
}
?>

<?php
//exam and record office

if(@$_GET['q']==2) {
    echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO EXAMS AND RECORDS OFFICE</h2></center>
    <center><img src="img/exam.jpg" class="myimage"></center>
    <center>
    <div style="height:370px; width:300px; border:1px solid navy; border-radius:10px; background:transparent; backdrop-filter:blur(10px);">
    <center><h1> PLEASE WAIT FOR VERIFY <span class="blink">...</span></h1></center>
     
    <form action="examclear.php" method="post">
    <input class="inpt" name="regno" type="text" placeholder="Enter Your Reg No" required><br>
    <select class="inpt" name="department" type="text" placeholder="Enter Your Department" required><br>
    <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
    <select class="inpt" name="clearance"required>
    <option>CLEARANCE STATUS</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
    <br>
    <hr>
    <input class="btn" type="submit" value="Proceed">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear">
  </form>
  </div>
</center>    
    
    
    ';
}
?>
<?php

//library office

if(@$_GET['q']==3) {
    echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO LIBRARY OFFICE</h2></center>
    <center><img src="img/library.jpg" class="myimage"></center>
    <center>
    <div class="transparent"  style="height:370px; width:300px; border:1px solid navy" >
    <center><h1> PLEASE WAIT FOR VERIFY <span class="blink">...</span></h1></center>
     
    <form action="libraryClear.php" method="post">
    <input class="inpt" name="regno" type="text" placeholder="Enter Your Reg No" required><br>
    <select class="inpt" name="department" type="text" placeholder="Enter Your Department" required><br>
    <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
    <select class="inpt" name="clearance"required>
    <option>CLEARANCE STATUS</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
        <br>
    <hr>
    <input class="btn" type="submit" value="Proceed">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear">
  </form>
  </div>
</center>
    
    ';
}
?>

<?php
// security division

if(@$_GET['q']==4) {
    echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO SECURITY DIVISION OFFICE</h2></center>
    <center><img src="img/security.jpg" class="myimage"></center>
    <center>
    <div class="transparent"  style="height:370px; width:300px; border:1px solid navy" >
    <center><h1> PLEASE WAIT FOR VERIFY <span class="blink">...</span></h1></center>
     
    <form action="securityClear.php" method="post">
    <input class="inpt" name="regno" type="text" placeholder="Enter Your Reg No" required><br>
    <Select class="inpt" name="department" type="text" placeholder="Enter Your Department" required><br>
    <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
    <select class="inpt" name="clearance"required>
    <option>CLEARANCE STATUS</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
        <br>
    <hr>
    <input class="btn" type="submit" value="Proceed">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear">
  </form>
  </div>
</center>    
    ';
}
?>

<?php

//department office

if(@$_GET['q']==5) {
    echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO DEPARTMENT OFFICE</h2></center>
    <center><img src="img/department.jpg" class="myimage"></center>
    <center>
    <div class="transparent"  style="height:370px; width:300px; border:1px solid navy" >
    <center><h1> PLEASE WAIT FOR VERIFY <span class="blink">...</span></h1></center>
     
    <form action="departmentClear.php" method="post">
    <input class="inpt" name="regno" type="text" placeholder="Enter Your Reg No" required><br>
    <select class="inpt" name="department" type="text" placeholder="Enter Your Department" required><br>
    <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
    <select class="inpt" name="clearance"required>
    <option>CLEARANCE STATUS</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
        <br>
    <hr>
    <input class="btn" type="submit" value="Proceed">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear">
  </form>
  </div>
</center>    
    ';
}
?>

<?php
//hostel office

if(@$_GET['q']==6) {
    echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO HOSTEL OFFICE</h2></center>
    <center><img src="img/hostel.jpg" class="myimage"></center>
    <center>
    <div class="transparent"  style="height:370px; width:300px; border:1px solid navy" >
    <center><h1> PLEASE WAIT FOR VERIFY <span class="blink">...</span></h1></center>
     
    <form action="hostelClear.php" method="post">
    <input class="inpt" name="regno" type="text" placeholder="Enter Your Reg No" required><br>
    <select class="inpt" name="department" type="text" placeholder="Enter Your Department" required><br>
    <option>Select Your Dept</option>
    <option value=""</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Physics">Physic</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Biology">Biology</option>
    <option value="Anatomy">Anatomy</option>
    </select>
    <select class="inpt" name="clearance"required>
    <option>CLEARANCE STATUS</option>
    <option value="CLEARED">Cleared</option>
    <option value="NOTCLEARED">Not Cleared</option>
    </select>
        <br>
    <hr>
    <input class="btn" type="submit" value="Proceed">&nbsp;&nbsp;&nbsp;
    <input class="btn" type="reset" value="Clear">
  </form>
  </div>
</center>    
    ';
}
?>

<?php
//admin office
if(@$_GET['q']==7) {
       echo'<br><br><br><br>
    <center><h2 style="background:white;">WELCOME TO ADMIN OFFICE </h2></center>
        <center>
        <center><img src="img/admin.jpg" class="myimage"></center>
        <br>
        <center><h1> RESULT PROCESSING PLEASE WAIT <span class="blink">...</span></h1></center>';
       
}
?>
</body>
</html>