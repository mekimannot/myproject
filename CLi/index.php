<?php

  session_start();

  include('conn.php');
    if(isset($_POST['submit'])){
        $user_id=$_POST['user_id'];
        $password=$_POST['password'];
    $select=mysqli_query($conn,"select *from staff where User_id='$user_id' AND Password='$password'");
    $counts=mysqli_num_rows($select);
    if($counts>0){
        while($row=mysqli_fetch_assoc($select)){
            if($row['role']=='admin'){
       $_SESSION['id']=$row['ID'];
       $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'admin/admin_index.php'; </script>";
             }else if($row['role']=='doctor'){
               $_SESSION['id']=$row['ID'];
               $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'doctor/doctor_index.php'; </script>";
             }
             else if($row['role']=='register'){
           $_SESSION['id']=$row['ID'];
       $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'register/register_index.php'; </script>";
             }else if($row['role']=='labratory'){
           $_SESSION['id']=$row['ID'];
       $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'labratory/lab_index.php'; </script>";
             }else if($row['role']=='pharmacy'){
           $_SESSION['id']=$row['ID'];
       $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'pharmacy/pharmacy_index.php'; </script>";
             }else if($row['role']=='store'){
           $_SESSION['id']=$row['ID'];
       $_SESSION['depart']=$row['role'];
                echo "<script type='text/javascript'> document.location = 'store/index.php'; </script>";
             }else{
        $error[]='your role is Incorrect???....   ';
       }
        }
    }
      else{
    $error[]='Incorrect User ID or Password???....   ';
    }
} 
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management system hello</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style>
    </style>
</head>

<body>
    <div class="container">
    <form action="" method="post"> 
        <div class="h" style="display: block;">
        <img class="img" src="images/w.jpg" alt="Werabe" height="50px" width="50px" style="text-align: center; margin-left: 48%; margin-top: 50px; margin-bottom: 20px;">
        <p align="center" style="margin-bottom: 40px; font-weight: bold; font-size: 30px;" class="p">Werabe University</p>
        <!--<div class="aaaa" style="text-align: center; padding-top: 20px;margin-bottom: 80px; font-size: 55 px; color: green;">
          <span class="g1">W</span>
          <span class="e1">E</span>
          <span class="e2">R</span>
          <span class="k1">A</span>
          <span class="s1">B</span>
          <span class="f">E</span>
          <span></span>
          <span class="o">U</span>
          <span class="r">N</span>
          <span class="g2">I</span>
          <span class="e3">V</span>
          <span class="e4">E</span>
          <span class="k2">R</span>
          <span class="s2">S</span>
          <span class="i1">I</span>
          <span class="t1">T</span>
          <span class="y1">Y</span>
        </div>-->
        </div><div class="row1"> 
        <div class="wizard-content box">
        <p id="txt">Welcome to Clinic Management system</p>
            <input title="Enter your user id" type="text" name="user_id" placeholder="User ID" class="form-control" required><br>
            <input title="Enter your password"  type="password" name="password" placeholder="**********" class="form-control" required><br>
            <a href="" class="forgot-password layer">Forgot Password</a><br>
            <input type="submit" name="submit" value="Sign In" class="btn btn-primary">
        </div>
     </div>
   </div>
  </form>
</div>
</body>
</html>