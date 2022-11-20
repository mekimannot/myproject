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
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
<script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
  <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="../fontawesome/css/brands.css" rel="stylesheet">
  <link href="../fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../bootstrap.css">
  <style type="text/css">
  	.inp{
  		width: 400px;
  	}.all{
  		margin-right: 20px;
  	}.btn2{
  		margin-left: px;
  	}body{
  		background: lightgray;
  	}.rowa-2{
  		padding: 20px;
  	}
  </style>
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
		<h1>Edit Your personal Setting</h1><br><br>
	
		<div class="row">
			<div class="col-md-6">
		<div class="form-group">
		<div class="lab"><label>First Name: </label></div>
		<input type="text" name="fname" class="form-control" value="<?php echo $row['Fname']; ?>" readonly></div>
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Last Name: </label></div>
		<input type="text" name="lname" class="form-control" value="<?php echo $row['Lname']; ?>" readonly></div>
	</div><div class="row"></div><div class="col-md-6"> 
		<div class="form-group">
		<div class="lab"><label>User Id: </label></div>
		<input type="text" name="user_id" class="form-control" value="<?php echo $row['User_id']; ?>" readonly></div>
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Backup: </label></div>
		<input type="password" name="backup" class="form-control" value="<?php echo $row['Backup']; ?>"></div></div>
		<div class="row">
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Email: </label></div>
		<input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>"></div>
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Phone Number: </label></div>
		<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>"></div></div>
		<div class="row">
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Gander: </label></div>
		<select class="custom-select form-control" name="gender">
			<option value=""><?php echo $row['Gender']; ?></option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
		</select>
		</div>
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Address: </label></div>
		<input type="text" name="address" value="<?php echo $row['Address']; ?>" class="form-control"></div></div><div class="row">
		</div><div class="col-md-6"><div class="form-group">
		<div class="lab"><label>Department: </label></div>
		<input type="text" name="depart" class="form-control" value="<?php echo $row['role']; ?>" readonly></div>
		</div><div class="col-md-6"> 
		<div class="form-group">
		<button name="save" class="btn2 btn btn-primary">Save & Update</button></div>
	</div>
		</form>
	</div>
  </div>
  <script type="text/javascript" src="jscr.js">
  </script>
</body>
</html>