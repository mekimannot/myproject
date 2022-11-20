<?php
  include('../session.php');
  include('../conn.php');
  if(isset($_GET['id'])){
  $id=$_GET['id'];
  $select=mysqli_query($conn,"select *from student where Student_iD='$id'");
  $count=mysqli_num_rows($select);
  $row=mysqli_fetch_assoc($select);
  }
  
  if(isset($_POST['save'])){
  	$backup=$_POST['backup'];
  	$email=$_POST['email'];
  	$phone=$_POST['phone'];
  	$gender=$_POST['gender'];
  	$address=$_POST['address'];
  	$update=mysqli_query($conn,"update student set age='$backup',email='$email',Phone='$phone',Gender='$gender',Address='$address' where Student_id='$id'");
  	 if($update){
        echo "<script type='text/javascript'>alert('seccussfully Updated');</script>";
        echo "<script type='text/javascript'>document.location='manage_student.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='manage_student.php';</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
  <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="../fontawesome/css/brands.css" rel="stylesheet">
  <link href="../fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
  <div class="coldd-1">

	<div class="rowa-1">
		<h1>Edit student</h1>
		<p>Student >  manage Student > edit Student</p>
	</div>
	<div class="rowa-2">
		<form action="" method="post" enctype="multipart/form-data">
		<div class="pro-1">
		<h1>Edit Student personal Setting</h1><br><br>
	
		<div class="row">
		<div class="all">
		<div class="lab"><label>First Name: </label></div>
		<input type="text" name="fname" class="inp" value="<?php echo $row['Fname']; ?>" readonly></div>
		<div class="all">
		<div class="lab"><label>Last Name: </label></div>
		<input type="text" name="lname" class="inp" value="<?php echo $row['Lname']; ?>" readonly></div>
	</div><div class="row">
		<div class="all">
		<div class="lab"><label>User Id: </label></div>
		<input type="text" name="user_id" class="inp" value="<?php echo $row['Student_id']; ?>" readonly></div>
		<div class="all">
		<div class="lab"><label>Age: </label></div>
		<input type="text" name="backup" class="inp" value="<?php echo $row['age']; ?>"></div></div>
		<div class="row">
		<div class="all">
		<div class="lab"><label>Email: </label></div>
		<input type="email" name="email" class="inp" value="<?php echo $row['email']; ?>"></div>
		<div class="all">
		<div class="lab"><label>Phone Number: </label></div>
		<input type="text" name="phone" class="inp" value="<?php echo $row['Phone']; ?>"></div></div>
		<div class="row">
		<div class="all">
		<div class="lab"><label>Gander: </label></div>
		<select class="inp" name="gender">
			<option value=""><?php echo $row['Gender']; ?></option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
		</select>
		</div>
		<div class="all">
		<div class="lab"><label>Address: </label></div>
		<input type="text" name="address" value="<?php echo $row['Address']; ?>" class="inp"></div></div><div class="row">
		<div class="all">
		<div class="lab"><label>Department: </label></div>
		<input type="text" name="depart" class="inp" value="<?php echo $row['Department']; ?>" readonly></div>
		<div class="all">
		</div><div class="row">
		<div class="all">
		<button name="save" class="btn2">Save & Update</button>
		</div></div></form>
	</div>
  </div>
  <script type="text/javascript" src="jscr.js">
  </script>
</body>
</html>