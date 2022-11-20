
<?php
  include('../conn.php');
  include('../session.php');
  $user_id=$_SESSION['user_id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $row=mysqli_fetch_assoc($select);
  $id=$row['doctor'];
  $s1=mysqli_query($conn,"select *from staff where ID='$id'");
  $r1=mysqli_fetch_assoc($s1);
  if(isset($_POST['submit'])){
    $status="2";
    $update=mysqli_query($conn,"update patient set status='$status' where ID='$user_id'");
    $n1=$_POST['n1']; $n2=$_POST['n2'];  $n3=$_POST['n3'];
    $n4=$_POST['n4'];  $n5=$_POST['n5']; $n6=$_POST['n6'];
    $n7=$_POST['n7'];  $n8=$_POST['n8']; $n9=$_POST['n9'];
    $n10=$_POST['n10'];  $n11=$_POST['n11'];$n12=$_POST['n12'];
    $n13=$_POST['n13'];$n14=$_POST['n14']; $n15=$_POST['n15'];
    $n16=$_POST['n16'];$n17=$_POST['n17'];$n18=$_POST['n18'];
    $n20=$_POST['n20']; $n30=$_POST['n30'];$n31=$_POST['n31'];
    $n32=$_POST['n32']; $n33=$_POST['n33']; $n34=$_POST['n34'];
    $n35=$_POST['n35'];$n36=$_POST['n36'];  $n37=$_POST['n37'];
    $n38=$_POST['n38'];  $n39=$_POST['n39'];  $n1=$_POST['n1'];
    $n1=$_POST['n1']; $n1=$_POST['n1']; $n1=$_POST['n1'];
    $n1=$_POST['n1'];   $n1=$_POST['n1'];  $m1=$_POST['n21'];   $m2=$_POST['n22'];
    $m3=$_POST['n23'];$m4=$_POST['n24']; $m5=$_POST['n25'];$m6=$_POST['n26'];  $m7=$_POST['n27'];
    $m9=$_POST['n30'];$m10=$_POST['n31']; $m11=$_POST['n32'];
    $m12=$_POST['n33'];$m13=$_POST['n34']; $m14=$_POST['n35']; $m15=$_POST['n36'];
    $m16=$_POST['n37'];$m17=$_POST['n38'];  $m18=$_POST['n39'];
    $insert=mysqli_query($conn,"insert into pharmacy(student_id,weight,region,town,woreda,kebele,house,diag,n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12,n13,n14,n15,n16,n17,n18,n20,n30,n31,n32,n33,n34,n35,n36,n37,n38,n39) values('$user_id','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13','$n14','$n15','$n16','$n17','$n18','$n20','$m9','$m10','$m11','$m12','$m13','$m14','$m15','$m16','$m17','$m18')");
    if($insert){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='patient.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='patient.php'</script>";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .inp{
            width: 200px;
        }.tt1{
            margin-left: 150px;
            margin-top: 20px;
        }.tt2{
            margin-left: 230px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="t2">
        <div class="y1">
            <h2>Werabe University Student Clinic</h2>
            <h1>PRESCRIPTION PAPER</h1><hr>
        </div>
        <div class="pdr-2">
                <div class="two">
                    <label>Patient's Full Name:</label>
                    <input type="text" name="fname" value="<?php echo $row['Fname']; echo " "; echo $row['Lname']; ?>" class="inp" readonly>
                </div>
                <div class="two">
                    <label>USER ID:</label>
                    <input type="text" name="user_id" value="<?php echo $row['User_id']; ?>"   readonly class="inp">
                </div>
                <div class="two">
                    <label>Sex:</label>
                    <input type="text" name="sex" value="<?php echo $row['gender']; ?>"   readonly class="inp">
                </div>
                <div class="two">
                    <label>Tel.No:</label>
                    <input type="text" name="user_id" value="<?php echo $row['phone']; ?>" class="inp" readonly>
                </div>
            </div>
        <div class="pdr-2">
                <div class="two"><form action="" method="post">
                    <label>Institution Name: </label>
                    <input type="text" name="" class="inp" value="Werabe University">
                </div>
                <div class="two">
                    <label>Weight:</label>
                    <input type="number" name="n21" class="inp" style="background: white; color: black;">
                </div>
                <div class="two">
                    <label>Region:</label>
                    <input type="text" name="n22" class="inp" style="background: white; color: black;">
                </div>
                <div class="two">
                    <label>Town: </label>
                    <input type="text" name="n23"  class="inp" style="background: white; color: black;">
                </div>
            </div><div class="pdr-2">
                <div class="two">
                    <label>Woreda</label>
                    <input type="text" name="n24"  class="inp" style="background: white; color: black;">
                </div>
                <div class="two">
                    <label>Kebele:</label>
                    <input type="text" name="n25" class="inp" style="background: white; color: black;">
                </div>
                <div class="two">
                    <label>House No </label>
                    <input type="text" name="n26" class="inp" style="background: white; color: black;">
                </div>
                <div class="two">
                    <label>Diagnosis, if not ICD</label>
                    <input type="text" name="n27" class="inp" style="background: white; color: black;">
                </div>
            </div>
            <div class="t1">
            <table border="1px" class="table">
                <tr bgcolor="gray">
                <th>Drug Name, Strength, Dosage Form, Dose, Frequency, Duration, Quantity, How to use & other information</th>
                <th>Price(Dispemserss use only)</th>
            </tr>
            <tr>
                <td><input type="text" name="n1" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n2" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n3" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n4" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n5" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n6" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n7" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n8" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n9" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n10" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n11" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n12" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n13" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n14" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n15" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n16" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td><input type="text" name="n17" style="width: 98%; padding-left: 10px;"></td>
                <td><input type="text" name="n18" style="width: 95%; padding-left: 10px;"></td>
            </tr>
            <tr>
                <td align="right">Total Price</td>
                <td><input type="text" name="n20" style="width: 95%; padding-left: 10px;"></td>
            </tr>
           
            </table>
            <input type="submit" name="submit" value="send" class="submit">
        </div>
        <div class="pdr-2"><h3 class="tt1">Prescriber's</h3><h3 class="tt2">Dispenser's</h3></div>
        <div class="pdr-2"><label>Full Name: </label><input type="text" name="n30" style="margin-left: 40px; padding-left: 10px; color: black; background: white;" class="inp"><input type="text" name="n31" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp"></div>
        <div class="pdr-2"><label>Qualification: </label><input type="text" name="n32" style="margin-left: 20px; padding-left: 10px; color: black; background: white;" class="inp"><input type="text" name="n33" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp"></div>
        <div class="pdr-2"><label>Registration: </label><input type="text" name="n34" style="margin-left: 23px; padding-left: 10px; color: black; background: white;" class="inp"><input type="text" name="n35" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp"></div>
        <div class="pdr-2"><label>Signature: </label><input type="text" name="n36" style="margin-left: 39px; padding-left: 10px; color: black; background: white;" class="inp"><input type="text" name="n37" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp"></div>
        <div class="pdr-2"><label>Date: </label><input type="text" name="n38" style="margin-left: 78px; padding-left: 10px; color: black; background: white;" class="inp"><input type="text" name="n39" style="margin-left: 50px; padding-left: 10px; color: black; background: white;" class="inp"></div>
        </form>
    </div>
</body>
</html>
