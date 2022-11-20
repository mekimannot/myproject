<?php
   include('../conn.php');
   include('../session.php');
  if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $depart=$_POST['depart'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $sel=mysqli_query($conn,"select *from student");
    $n=mysqli_num_rows($sel);
    $n++;
    $user_id="ugr/1$n/14";
    $insert=mysqli_query($conn,"insert into student(Student_id,Fname,Lname,Gender,Department,Address,Phone) values('$user_id','$fname','$lname','$gender','$depart','$address','$phone')");
    if($insert){
        echo "<script type='text/javascript'>alert('seccussfuly Inserted');</script>";
        echo "<script type='text/javascript'>document.location='add_student.php';</script>";
        
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='add_student.php';</script>";
    }
  }
  $select=mysqli_query($conn,"select *from department");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <style type="text/css">
        .row{
            margin-bottom: 20px;
        }body{
            background: gray;
        }
    </style>
</head>
<body>
   <div class="doctor">
    <div class="doc1">
        <h1 class="h1">Student portal</h1>
        <p style="padding-bottom: 10px;">Student > Add Student</p>
    </div>
    <div class="doc2">
        <h2 class="title h2">Student Form</h2>
        <hr>
            <div class="wizard-content column">
        <form action="" method="post"> 
           <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
               <label for="Fname">First Name</label>
               <input type="text" name="fname" class="form-control" required>
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="Fname">Last Name</label>
               <input type="text" name="lname" class="form-control" required>
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="phone">Phone</label>
               <input type="text" name="phone" class="form-control">
               </div></div></div>
               <div class="row"><div class="col-md-4"><div class="form-group">
               <label for="depart">Department</label>
               <select name="depart" id="depart" class="custom-select form-control">
                <option value="">select Department</option>
                <?php
                   $count=mysqli_num_rows($select);
                   if($count>0){
                      while($row=mysqli_fetch_assoc($select)){
                        echo "
                <option value='".$row['Dname']."'>".$row['Dname']."</option>

                        ";
                      }
                   }
                ?>

               </select>
               </div></div><div class="col-md-4"><div class="form-group">
               <label for="profile">Address</label>
               <input type="text" name="address" class="custom-select form-control"></div></div><div class="col-md-4"><div class="form-group">
               <label for="depart">Gender</label>
               <select name="gender" id="depart" class="form-control">
                <option>select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
               </select>
               </div></div></div>
             <input type="submit" name="submit" class="btn btn-primary text-center" value="Add Doctor" style="margin-left: 45%;">
              
        </form>
            </div>
    </div>
   </div>
</body>
</html>