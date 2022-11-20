
<?php
  include('../conn.php');
  include('../session.php');

  if(isset($_GET['id'])){
    $_SESSION['iddd']=$_GET['id'];
}
  $user_id=$_SESSION['iddd'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $select1=mysqli_query($conn,"select *from pharmacy where student_id='$user_id'");
  $r2=mysqli_fetch_assoc($select);
  $id=$r2['doctor'];
  $s1=mysqli_query($conn,"select *from staff where ID='$id'");
  $r1=mysqli_fetch_assoc($s1);
  $row=mysqli_fetch_assoc($select1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <style type="text/css">
        .inp{
            width: 200px;
        }.tt1{
            margin-left: 150px;
            margin-top: 20px;
        }.tt2{
            margin-left: 230px;
            margin-top: 20px;
        }.t2{
            background: lightgray;
            padding: 20px;
        }.row{
            margin-left: 10px;
            margin-top: 20px;
        }.pdr-2{
            margin-top: 20px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="t2">
        <div class="y1">
            <h2>Werabe University Student Clinic</h2>
            <h1>PRESCRIPTION PAPER</h1><hr>
        </div>
        <div class="row"><div class="col-md-3">
                <div class="form-group">
                    <label>Patient's Full Name:</label>
                    <input type="text" name="fname" value="<?php echo $r2['Fname']; echo " "; echo $r2['Lname']; ?>" class="form-control" readonly>
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>USER ID:</label>
                    <input type="text" name="user_id" value="<?php echo $r2['User_id']; ?>"   readonly class="form-control">
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Sex:</label>
                    <input type="text" name="sex" value="<?php echo $r2['gender']; ?>"   readonly class="form-control">
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Tel.No:</label>
                    <input type="text" name="user_id" value="<?php echo $r2['phone']; ?>" class="form-control" readonly>
                </div></div>
            </div>
        <div class="row"><div class="col-md-3">
                <div class="form-group"><form action="" method="post">
                    <label>Institution Name: </label>
                    <input type="text" name="" class="form-control" value="Werabe University" value="Werabe University" readonly>
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Weight:</label>
                    <input type="number" name="n21" class="form-control" value="<?php echo $row['weight']; ?>" style="background: white; color: black;" readonly>
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Region:</label>
                    <input type="text" name="n22" class="form-control" value="<?php echo $row['region']; ?>" style="background: white; color: black;" readonly>
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Town: </label>
                    <input type="text" name="n23"  class="form-control" value="<?php echo $row['town']; ?>" style="background: white; color: black;" readonly>
                </div></div>            
            </div><div class="row"><div class="col-md-3">
                <div class="form-group">
                    <label>Woreda</label>
                    <input type="text" name="n24"  class="form-control" value="<?php echo $row['woreda']; ?>" style="background: white; color: black;" readonly>
                </div></div><div class="col-md-3">                
                    <div class="form-group">
                    <label>Kebele:</label>
                    <input type="text" name="n25" class="form-control" style="background: white; color: black;">
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>House No </label>
                    <input type="text" name="n26" class="form-control"<?php echo $row['house']; ?> style="background: white; color: black;" readonly>
                </div></div><div class="col-md-3">
                <div class="form-group">
                    <label>Diagnosis, if not ICD</label>
                    <input type="text" name="n27" class="form-control" value="<?php echo $row['diag']; ?>" style="background: white; color: black;" readonly>
                </div></div>
            </div>
            <div class="t1">
            <table border="1px" class="table">
                <tr bgcolor="gray">
                <th>Drug Name, Strength, Dosage Form, Dose, Frequency, Duration, Quantity, How to use & other information</th>
                <th>Price(Dispemserss use only)</th>
            </tr>
            <tr>
                <td><input type="text" name="n1" value="<?php echo $row['n1']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n2" value="<?php echo $row['n2']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n3" value="<?php echo $row['n3']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n4" value="<?php echo $row['n4']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n5" value="<?php echo $row['n5']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" value="<?php echo $row['n6']; ?>" name="n6" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n7" value="<?php echo $row['n7']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n8" value="<?php echo $row['n8']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n9" value="<?php echo $row['n9']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n10" value="<?php echo $row['n10']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n11" value="<?php echo $row['n11']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n12" value="<?php echo $row['n12']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n13" value="<?php echo $row['n13']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n14" value="<?php echo $row['n14']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n15" value="<?php echo $row['n15']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n16" value="<?php echo $row['n16']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td><input type="text" name="n17" value="<?php echo $row['n17']; ?>" style="width: 98%; padding-left: 10px;" readonly></td>
                <td><input type="text" name="n18" value="<?php echo $row['n18']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
            <tr>
                <td align="right">Total Price</td>
                <td><input type="text" name="n20" value="<?php echo $row['n20']; ?>" style="width: 95%; padding-left: 10px;" readonly></td>
            </tr>
           
            </table>
            <a href="price.php" target="iframe" class="btn btn-primary">Withdraw</a>
            <input type="submit" name="sub" value="cancel" class="btn btn-primary">
        </div>
        <div class="pdr-2"><h3 class="tt1">Prescriber's</h3><h3 class="tt2">Dispenser's</h3></div>
        <div class="pdr-2"><label>Full Name: </label><input type="text" name="n30" value="<?php echo $row['n30']; ?>" style="margin-left: 40px; padding-left: 10px; color: black; background: white;" class="inp" readonly><input type="text" name="n31" value="<?php echo $row['n31']; ?>" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp" readonly></div>
        <div class="pdr-2"><label>Qualification: </label><input type="text" name="n32" value="<?php echo $row['n32']; ?>" style="margin-left: 20px; padding-left: 10px; color: black; background: white;" class="inp" readonly><input type="text" name="n33" value="<?php echo $row['n33']; ?>" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp" readonly></div>
        <div class="pdr-2"><label>Registration: </label><input type="text" name="n34" value="<?php echo $row['n34']; ?>" style="margin-left: 23px; padding-left: 10px; color: black; background: white;" class="inp" readonly><input type="text" name="n35" value="<?php echo $row['n35']; ?>" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp" readonly></div>
        <div class="pdr-2"><label>Signature: </label><input type="text" name="n36" value="<?php echo $row['n36']; ?>" style="margin-left: 39px; padding-left: 10px; color: black; background: white;" class="inp" readonly><input type="text" name="n37" value="<?php echo $row['n37']; ?>" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp" readonly></div>
        <div class="pdr-2"><label>Date: </label><input type="text" name="n38" value="<?php echo $row['n39']; ?>" style="margin-left: 78px; padding-left: 10px; color: black; background: white;" class="inp" readonly><input type="text" name="n39" value="<?php echo $row['n40']; ?>" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp" readonly></div>
        </form>
    </div>
</body>
</html>
