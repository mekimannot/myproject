<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $row=mysqli_fetch_assoc($select);
  $select1=mysqli_query($conn,"select *from staff");
  $select2=mysqli_query($conn,"select *from staff where role='doctor'");
  $select3=mysqli_query($conn,"select *from staff where role='register'");
  $select4=mysqli_query($conn,"select *from staff where role='Pharmacy'");
  $r1=mysqli_num_rows($select1);
  $r2=mysqli_num_rows($select2);
  $r3=mysqli_num_rows($select3);
  $r4=mysqli_num_rows($select4);
  $status="waiting";
  $select5=mysqli_query($conn,"select *from patient where status='$status'");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
      <style type="text/css">
          body{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)), url(../images/a2.jpg);
    position: absolute;
    background-position: center;
    background-size: cover;
}#h3{
    color: white;
}
      </style>
</head>
<body>
 <div class="d1">
    <div class="dc1">
       <div class="dr1">
          <p>Welcome Back</p>
          <h1><?php echo $row['Fname']; echo " "; echo $row['Lname'];?></h1>
       </div>
    </div>
    <h3 id="h3">Data Information</h3>
    <div class="dc2">
        <div class="dr2">
            <div class="dc3">
                <h2><?php echo $r1;?></h2>
                <p>Student</p>
            </div>
            <div id="dash1"><i class="fa-solid fa-person" ></i></div>
        </div>
        <div class="dr3">
            <div class="dc3">
                <h2><?php echo $r2;?></h2>
                <p>Doctor</p>
            </div>
            <div id="dash2"><i class="fa-solid fa-person" ></i></div>
        </div>
        <div class="dr4">
            <div class="dc3">
                <h2><?php echo $r3;?></h2>
                <p>Register</p>
            </div>
            <div id="dash3"><i class="fa-solid fa-person" ></i></div>
        </div>
        <div class="dr5">
            <div class="dc3">
                <h2><?php echo $r4;?></h2>
                <p>Pharmacy</p>
            </div>
            <div id="dash4"><i class="fa-solid fa-person" ></i></div>
        </div>
        <div class="dr5">
            <div class="dc3">
                <h2><?php echo $r4;?></h2>
                <p>Labratory</p>
            </div>
            <div id="dash4"><i class="fa-solid fa-person" ></i></div>
        </div>
    </div>
 </div>
</body>
</html>