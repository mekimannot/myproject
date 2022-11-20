<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $row=mysqli_fetch_assoc($select);
  if(isset($_POST['save'])){
  	$backup=$_POST['backup'];
  	$email=$_POST['email'];
  	$phone=$_POST['phone'];
  	$gender=$_POST['gender'];
  	$address=$_POST['address'];
  	$update=mysqli_query($conn,"update staff set Backup='$backup',email='$email',phone='$phone',Gender='$gender',Address='$address' where ID='$session_id'");
  	 if($update){
        echo "<script type='text/javascript'>alert('seccussfully Updated');</script>";
        echo "<script type='text/javascript'>document.location='profile.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='profile.php';</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Leave Management System</title>
	<link rel="stylesheet" type="text/css" href="st.css">
<script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
  <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="../fontawesome/css/brands.css" rel="stylesheet">
  <link href="../fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
  <div class="coldd-1">

	<div class="rowa-1">
		<h1>Profile</h1>
		<p>Dashboard >  Profile</p>
	</div>
	<div class="rowa-2">
		<form action="" method="post" enctype="multipart/form-data">
		<div class="pro-1">
			<div class="pro-2">
		<img src="../images/no.jpg" class="image">
		<div class="pro-3">
			<label for="firsting" id="uploadBtn"><i class="fa-solid fa-edit"></i></label>
			<input type="file" id="firsting" name="image" style="display: none; visibility: none;">
			<button type="submit" name="update_image">update</button>
		</div>
	</div>
		<h1 style="margin-left: 40px;">Edit Your personal Setting</h1><br><br>
	
		<div class="row">
		<div class="all">
		<div class="lab"><label>First Name: </label></div>
		<input type="text" name="fname" class="in" value="<?php echo $row['Fname']; ?>" readonly></div>
		<div class="all">
		<div class="lab"><label>Last Name: </label></div>
		<input type="text" name="lname" class="in" value="<?php echo $row['Lname']; ?>" readonly></div>
	</div><div class="row">
		<div class="all">
		<div class="lab"><label>User Id: </label></div>
		<input type="text" name="user_id" class="in" value="<?php echo $row['User_id']; ?>" readonly></div>
		<div class="all">
		<div class="lab"><label>Backup: </label></div>
		<input type="password" name="backup" class="in" value="<?php echo $row['Backup']; ?>"></div></div>
		<div class="row">
		<div class="all">
		<div class="lab"><label>Email: </label></div>
		<input type="email" name="email" class="in" value="<?php echo $row['email']; ?>"></div>
		<div class="all">
		<div class="lab"><label>Phone Number: </label></div>
		<input type="text" name="phone" class="in" value="<?php echo $row['phone']; ?>"></div></div>
		<div class="row">
		<div class="all">
		<div class="lab"><label>Gander: </label></div>
		<select class="in" name="gender">
			<option value=""><?php echo $row['Gender']; ?></option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
		</select>
		</div>
		<div class="all">
		<div class="lab"><label>Address: </label></div>
		<input type="text" name="address" value="<?php echo $row['Address']; ?>" class="in"></div></div><div class="row">
		<div class="all">
		<div class="lab"><label>Role: </label></div>
		<input type="text" name="depart" class="in" value="<?php echo $row['role']; ?>" readonly>
		<button style="margin-left: 20px;" name="save" class="btn2">Save & Update</button></div></div></form>
	</div>
  </div>
  <script type="text/javascript" src="jscr.js">
  </script>
</body>
</html>