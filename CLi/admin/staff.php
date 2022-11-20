<?php
  $conn=mysqli_connect('localhost','root','','hospital');
  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $depart=$_POST['depart'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $insert=mysqli_query($conn,"insert into staff(Fname,Lname,User_id,Password,Gender,role,Address,phone,email) values('$fname','$lname','$user_id','$password','$gender','$depart','$address','$phone','$email')");
    if($insert){
        echo "<script type='text/javascript'>alert('seccussfuly Inserted');</script>";
        echo "<script type='text/javascript'>document.location='staff.php';</script>";
        
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='staff.php';</script>";
    }
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Staff</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <style type="text/css">
        body{
            background: lightgray;
        }.row{
            margin-bottom: 10px;
        }
    </style>
</head>
<body><div class="main-container">
   <div class="doctor">
    <div class="doc1">
        <h1>Staff portal</h1>
        <p>Staff > Add Staff</p>
    </div>
    <div class="doc2">
        <h2>Staff Form</h2>
        <hr>
            <div class="all1 wizard-content"> 
        <form action="" method="post">
                <section>
           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
               <label for="Fname">First Name</label>
               <input type="text" name="fname" class="form-control" required autocomplete="off">
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="Fname">Last Name</label>
               <input type="text" name="lname" class="form-control" required>
               </div></div><div class="col-md-4">
                <div class="form-group">
               <label for="Fname">User Id</label>
               <input type="text" name="user_id" class="form-control" required>
               </div></div></div>
               <div class="row"><div class="col-md-4"><div class="form-group">
               <label for="password">Password</label>
               <input type="password" name="password" class="form-control" required autocomplete="off">
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" class="form-control">
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="phone">Phone</label>
               <input type="text" name="phone" class="form-control">
               </div></div>
               <div class="row"></div><div class="col-md-4"><div class="form-group">
               <label for="depart">Role</label>
               <select name="depart" id="depart" class="custom-select form-control">
                <option value="">select Role</option>
                <option value="doctor">Doctor</option>
                <option value="labratory">Labratory</option>
                <option value="register">Register</option>
                <option value="pharmacy">Pharmacy</option>
                <option value="store">Store</option>
               </select>
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="profile">Address</label>
               <input type="text" name="address" class="form-control"></div></div><div class="col-md-4"><div class="form-group">
               <label for="depart">Gender</label>
               <select name="gender" id="depart" class="custom-selected form-control">
                <option>select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
               </select>
               </div></div></div></section>
             <input type="submit" name="submit" class="btn btn-primary submit" value="Add staff" style="background: #3c8dbc; border: 1px solid #3c8dbc;">
              
                    </form></div>

    </div>
   </div></div>
</body>
</html>