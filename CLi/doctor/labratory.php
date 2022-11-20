
<?php
  include('../conn.php');
  include('../session.php');
  $user_id=$_SESSION['user_id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $row=mysqli_fetch_assoc($select);
  
  if(isset($_POST['submit'])){
    $status="3";
    $amount=$_POST['text'];
    $update=mysqli_query($conn,"update patient set Description='$amount',status='$status' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='labratory.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='labratory.php'</script>";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinic Management System</title>
	<link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>
	 <div class="doctor">
    <div class="dep2">
        <div class="dep3">
            <h3>Patient Portal</h3>
            <hr>
            <form action="" method="post"><div class="two">
   	     		<label>Descrition</label>
                <textarea name="text" class="txt"></textarea>
   	     	</div>
            <input type="submit" name="submit" value="Send" class="sub">
        </div>
        <div class="dep4">
            <h3>Patient Information</h3>
            <hr>
            <div class="tb">
                <div class="pdr-2">
   	     		<div class="two">
   	     			<label>First Name</label>
   	     			<input type="text" name="fname" value="<?php echo $row['Fname']; ?>" class="inp" readonly>
   	     		</div>
   	     		<div class="two">
   	     			<label>Last Name</label>
   	     			<input type="text" name="lname" value="<?php echo $row['Lname']; ?>"   readonly class="inp">
   	     		</div>
   	     	</div>
   	     	<div class="pdr-2">
   	     		<div class="two">
   	     			<label>Department</label>
   	     			<input type="text" name="depart"  readonly class="inp" value="<?php echo $row['Department']; ?>">
   	     		</div>
   	     		<div class="two">
   	     			<label>Address</label>
   	     			<input type="text" name="address" value="<?php echo $row['Address']; ?>" readonly class="inp">
   	     		</div>
   	     	</div><div class="pdr-2">
   	     		<div class="two">
   	     			<label>Phone</label>
   	     			<input type="text" name="phone" value="<?php echo $row['phone']; ?>"  readonly class="inp">
   	     		</div>
   	     		<div class="two">
   	     			<label>Patient Id</label>
   	     			<input type="text" name="patient_id" value="<?php echo $row['User_id']; ?>"  readonly class="inp">
   	     		</div>
   	     	</div><?php if($row['status']=='1'){}else if($row['status']=='5'){
                echo "
            <div class='two'>
                <label>Labratory Result</label>
                <textarea style='width: 97%;' name='text' class='txt' readonly>".$row['Lab_description']."</textarea>
            </div>
                ";
            } ?>
   	     </div></div></form>
        </div>
    </div>
    </div>
</body>
</html>
