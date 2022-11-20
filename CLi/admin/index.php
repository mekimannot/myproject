<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $row=mysqli_fetch_assoc($select);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="sty.css">
    <link href="jquery/jquery-ui.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
    <div class="r1">
        <div class="c2">
           <img src="../images/w.jpg" width="40" height="40" alt="werabe">
           <h4>Werabe University</h4>
        </div>
        <div class="c1">
            <ul>
                <li> <a href="dashboard.php" target="iframe"> Deshboard</a></li>
                <li> <a>Student</a> <div class="sub-menu-2">
					<ul>
					   <li><a href="add_student.php" target="iframe" onclick="hideMenu()">Add Student</a></li>
					   <li><a href="manage_student.php" target="iframe" onclick="hideMenu()">Manage Student</a></li>
					</ul><hr>
				 </div></li>
                 <li class="li"> <a>Staff</a> <div class="sub-menu-2">
					<ul>
					   <li><a href="staff.php" target="iframe" onclick="hideMenu()">Add Staff</a></li>
					   <li><a href="manage_staff.php" target="iframe" onclick="hideMenu()">Manage Staff</a></li>
					</ul><hr>
				 </div></li>
                <li><a href="department.php" target="iframe"> Department</a></li>
                <li><a  href="total_drug.php" target="iframe" onclick="hideMenu()"> Drug</a></li>
                <!--<li> <a href="mesurement.php" target="iframe"> Measurement</a></li>-->
                <li><div class="profile"><img src="../images/no.jpg" alt="photo" width="30" height="30"><p><?php echo $row['Fname']; echo " "; echo $row['Lname'];  ?><i class="fa-solid fa-angle-right"  id="ic4"></i></p><div class="sub-menu-1">
                        <ul>
                            <li><i class="fa-solid fa-user" id="ang"></i> <a href="profile.php" target="iframe">Profile</a></li>
                            <li><i class="fa-solid fa-key" id="ang"></i><a href="password.php" target="iframe">Change Password</a></li>
                            <li><i class="fa-solid fa-lock" id="ang"></i><a href="../logout.php">Logout</a></li>
                        </ul>
                    </div></div>
                    </li>
            </ul>
        </div>
    </div>
    <iframe src="dashboard.php" frameborder="0" class="r2" name="iframe"></iframe>
</body>
</html>