<?php  
  include('../conn.php');
  include('../session.php');
  $count=0;
  if(isset($_POST['btn'])){
    $id=$_POST['search'];
    $select=mysqli_query($conn,"select *from student where Student_id='$id'");
    $count=mysqli_num_rows($select);
    $row=mysqli_fetch_assoc($select);
  }
  if(isset($_GET['id'])){

    $id=$_GET['id'];
    $select=mysqli_query($conn,"select *from student where Student_id='$id'");
    $count=mysqli_num_rows($select);
    $row=mysqli_fetch_assoc($select);
  }
  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $user_id=$_POST['user_id'];
    $depart=$_POST['depart'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $status="1";
    $age=$_POST['age'];
    $doctor=$_POST['doctor'];
    $registration= date("d-m-y");
    $insert=mysqli_query($conn,"insert into patient(Fname,Lname,User_id,Department,doctor,Address,phone,status,registration_date,age,gender) values('$fname','$lname','$user_id','$depart','$doctor','address','$phone','$status','$registration','$age','$gender')");
    if($insert){
        echo "<script>alert('seccussfuly inserted');</script>";
        echo "<script>document.location='add_patient.php';</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='add_patient.php';</script>";
    }
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <style type="text/css">
        body{
            background: lightgray;
        }.row{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="ar1" >
        <div class="ac1">
            <h2>Patient Portal</h2>
            <p>Add Patient ></p>
        </div>
        <div class="ac2">
            <form action="" method="post"> 
            <div class="se">
            <h2>Patient Form</h2>
            <div class="search">
                <input type="search" name="search" class="sr">
                <button class="btn5" name="btn">Search</button>
            </div>
        </div></form><hr>
            <form action="" method="post">
                <div class="ar2">
                    <div class="row">
                        <div class="col-md-4">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" required name="fname" class="form-control" value="<?php if($count>0){echo $row['Fname'];} ?>" >
                    </div></div><div class="col-md-4">
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" class="form-control" required value="<?php if($count>0){echo $row['Lname'];} ?>">
                    </div></div><div class="col-md-4"><div class="form-group">
                        <label for="">Doctor</label>
                        <select name="doctor" id="" class="custom-select form-control" required>
                            <option  value="">select doctor</option>
                            <?php
                            $select5=mysqli_query($conn,"select *from staff where role='doctor'");
                   $c=mysqli_num_rows($select5);
                   if($c>0){
                      while($row3=mysqli_fetch_assoc($select5)){
                        echo "
                <option value='".$row3['ID']."'>".$row3['Fname']." ".$row3['Lname']."</option>

                        ";
                      }
                   }
                ?>
                        </select>
                    </div></div></div> <div class="row"><div class="col-md-4">
                    <div class="form-group">
                        <label for="">User ID</label>
                        <input type="text" name="user_id" required class="form-control" value="<?php if($count>0){echo $row['Student_id'];} ?>">
                    </div></div><div class="col-md-4">
                    <div class="form-group">
                        <label for="">Department</label>
                        <select name="depart" id="" class="custom-select form-control" required>
                            <option  value="<?php if($count>0){echo $row['Department'];} ?>"><?php if($count>0){echo $row['Department'];}else{
                                echo "select department";
                            } ?></option>
                           <?php
                            $select6=mysqli_query($conn,"select *from department");
                   $c1=mysqli_num_rows($select6);
                   if($c1>0){
                      while($row4=mysqli_fetch_assoc($select6)){
                        echo "
                <option value='".$row4['ID']."'>".$row4['Dname']."</option>

                        ";
                      }
                   }
                ?>
                        </select>
                    </div></div><div class="col-md-4"><div class="form-group">
                        <label for="">Age</label>
                        <input type="text" name="age" required class="form-control" value="<?php if($count>0){echo $row['age'];} ?>">
                    </div></div></div><div class="row"><div class="col-md-4">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" required class="form-control"  value="<?php if($count>0){echo $row['Address'];} ?>">
                    </div></div><div class="col-md-4">
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" required class="form-control" value="<?php if($count>0){echo $row['Phone'];} ?>">
                    </div></div><div class="col-md-4"><div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div></div></div>
                    <input style="margin-left: 40%; margin-top: 30px;" type="submit" name="submit" class="btn btn-primary" value="Send Patient">
                </div>
            </form>
        </div>
    </div>
</body>
</html>