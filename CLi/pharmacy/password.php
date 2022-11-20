<?php
  include('../session.php');
  include('../conn.php');
  if(isset($_POST['save'])){
  	$cpass=$_POST['cpass'];
  	$npass=$_POST['npass'];
  	$conpass=$_POST['conpass'];
	$select = mysqli_query($conn,"select * from staff where  ID='$session_id' AND Password='$cpass' ");
	$row =mysqli_fetch_assoc($select);
	if($row>0){
	if($conpass==$npass)
	{
    $result = mysqli_query($conn,"update staff set  Password='$npass' where ID='$session_id'         
		")or die(mysqli_error());
    if ($result) {
     	echo "<script>alert('Your Password Successfully Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'password.php'; </script>";
	} else{
	  die(mysqli_error());
   }
}
else{
	echo "<script>alert('new password and confirm password are not match');</script>";
	echo "<script type='text/javascript'> document.location = 'password.php'; </script>";
}
}
else{
	echo "<script>alert('current password is incorrect');</script>";
	echo "<script type='text/javascript'> document.location = 'password.php'; </script>";
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
</head>
<body>

  <div class="coldd-1">

	<div class="rowa-1">
		<h1>Reset Password</h1>
		<p>Dashboard >  Reset</p>
	</div>
	<div class="rowa-2">
		<div class="pro-1">
			<form action="" method="post">
		<div class="row">
		<h1>Edit Your Password </h1><br>
		<div class="all">
		<div class="lab"><label>Current Password: </label></div>
		<input type="password" name="cpass" class="in" placeholder="Current Password"></div>
		<div class="all">
		<div class="lab"><label>New Password: </label></div>
		<input type="password" name="npass" class="in" placeholder="New Password"></div>
	</div>
		<div class="row">
		<div class="all">
		<div class="lab"><label>Confirm Password: </label></div>
		<input type="password" name="conpass" placeholder="Confirm Password" class="in"></div>
		<div class="all">
		<button style="margin-left: 20px;" name="save" class="btn2">Save & Update</button>
		</div></div></form>
	</div>
  </div>
</body>
</html>