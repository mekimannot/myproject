
<?php
  include('../conn.php');
  include('../session.php');
  $user_id=$_GET['id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $row=mysqli_fetch_assoc($select);
  $ii=$row['doctor'];
  $s1=mysqli_query($conn,"select *from staff where ID='$ii'");
  $r1=mysqli_fetch_assoc($s1);
  $s3=mysqli_query($conn,"select *from lab where patient_id='$user_id'");
  $n5=mysqli_num_rows($s3);
  $r5=mysqli_fetch_assoc($s3);
  if(isset($_POST['submit'])){
    $status="5";
    $update=mysqli_query($conn,"update patient set status='$status' where ID='$user_id'");
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
    $m3=$_POST['m3'];
    $m4=$_POST['m4'];
    $m5=$_POST['m5'];
    $m6=$_POST['m6'];
    $m7=$_POST['m7'];
    $m8=$_POST['m8'];
    $m9=$_POST['m9'];
    $update=mysqli_query($conn,"update lab set hg='$m1',hct='$m2',wbcm='$m3',netrophils='$m4',basophils='$m5',eosinophils='$m6',monocytes='$m7',lymphocytes='$m8',esr='$m9' where patient_id='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly Sended');</script>";
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
        .bottom{
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        width: 220px;
        height: 20px;
        }.inp{
            width: 250px;
        }
    </style>
</head>
<body>
    <div class="t2">
        <div class="y1">
            <h2>Werabe University Student Clinic</h2>
            <h1>LABORATORY REQUEST</h1><hr>
        </div>
        <div class="pdr-2">
                <div class="two">
                    <label>FULL NAME:</label>
                    <input type="text" name="fname" value="<?php echo $row['Fname']; ?>" class="inp" readonly>
                </div>
                <div class="two">
                    <label>AGE:</label>
                    <input type="number" name="age" value="<?php echo $row['age']; ?>"   readonly class="inp">
                </div>
                <div class="two">
                    <label>SEX:</label>
                    <input type="text" name="sex" value="<?php echo $row['gender']; ?>"   readonly class="inp">
                </div>
            </div>
        <div class="pdr-2">
                <div class="two">
                    <label>USER ID:</label>
                    <input type="text" name="user_id" value="<?php echo $row['User_id']; ?>" class="inp" readonly>
                </div>
                <div class="two">
                    <label>Name of Prescriber's </label>
                    <input type="text" name="pname" value="<?php  echo $r1['Fname']; echo " ";echo $r1['Lname']; ?>"   readonly class="inp">
                </div>
                <div class="two">
                    <label>Date</label>
                    <input type="text" name="date" value="<?php 
    $registration= date("d-m-y"); echo $registration; ?>"   readonly class="inp">
                </div>
            </div><form action="" method="post">
            <div class="t1">
            <table border="1px" class="table">
                <tr bgcolor="gray">
                <th>STOOL</th>
                <th>UNINALYSIS</th>
                <th colspan="2">HEAMATOLOGY</th>
                <th colspan="2">SEROLOGY</th>
            </tr>
            <tr>
                <td><div class="c1"><p>APP</p> <output type="checkbox"<?php if($n5>0){ if($r5['app']=='ok'){ ?> checked <?php } } ?> class="c2" readonly ></div></td>
                <td><div class="c1">color<input type="checkbox"<?php if($n5>0){ if($r5['color']=='ok'){ ?> checked <?php } }?> name="c2" class="c2"></div></td>
                <td colspan="2"><div class="c1">Hg   <p><input type="text" name="m1">Mg/di</p></div></td>
                <td rowspan="3" align="center">Widal <br>& <br>Weil Flex</td>
                <td><div class="c1">'O'<input type="checkbox"<?php if($n5>0){ if($r5['o']=='ok'){ ?> checked <?php }} ?> name="c3" class="c2" ></div></td>
            </tr>
            <tr>
                <td><div class="c1">Cons<input type="checkbox"<?php if($n5>0){ if($r5['cons']=='ok'){ ?> checked <?php }} ?> name="c4" class="c2"></div></td>
                <td><div class="c1">Leucocyte<input type="checkbox"<?php if($n5>0){ if($r5['leucocyte']=='ok'){ ?> checked <?php }} ?> name="c5" class="c2"></div></td>
                <td colspan="2"><div class="c1">Hct<p><input type="number" name="m2">%</p></div></td>
                <td><div class="c1">'H'<input type="checkbox"<?php if($n5>0){ if($r5['h']=='ok'){ ?> checked <?php }} ?> name="c6" class="c2"></div></td>
            </tr>
            <tr>
                <td><div class="c1">OIP<input type="checkbox"<?php if($n5>0){ if($r5['oip']=='ok'){ ?> checked <?php }} ?> name="c7" class="c2"></div></td>
                <td><div class="c1">nitrite<input type="checkbox"<?php if($n5>0){ if($r5['nitrite']=='ok'){ ?> checked <?php }} ?> name="c8" class="c2"></div></td>
                <td colspan="2"><div class="c1">WBC<p><input type="text" name="m3">Mm3</p></div></td>
                <td><div class="c1">'Ox'<input type="checkbox"<?php if($n5>0){ if($r5['ox']=='ok'){ ?> checked <?php }} ?> name="c9" class="c2"></div></td>
            </tr>
            <tr>
                <td rowspan="10"></td>
                <td><div class="c1">Urobilinogen<input type="checkbox"<?php if($n5>0){ if($r5['urobilinogen']=='ok'){ ?> checked <?php }} ?> name="c10" class="c2"></div></td>
                <td rowspan="5" class="bottom" align="center">Diff Count</td>
                <td><div class="c1">Netrophils<p><input type="number" name="m4">%</p></div></td>
                <td colspan="2"><div class="c1">RPR<input type="checkbox"<?php if($n5>0){ if($r5['rpr']=='ok'){ ?> checked <?php }} ?> name="c11" class="c2"></div></td>
            </tr>
            <tr>
                <td><div class="c1">Protein<input type="checkbox"<?php if($n5>0){ if($r5['protein']=='ok'){ ?> checked <?php }} ?> name="c12" class="c2"></div></td>
                <td><div class="c1">Basophils<p><input type="number" name="m5">%</p></div></td>
                <td colspan="2"><div class="c1">Rheumatoid factor<input type="checkbox"<?php if($n5>0){ if($r5['rhe']=='ok'){ ?> checked <?php }} ?> name="c13" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">PH<input type="checkbox"<?php if($n5>0){ if($r5['o']=='ok'){ ?> checked <?php }} ?> name="c14" class="c2"></div></td>
                <td><div class="c1">Eosinophils<p><input type="number" name="m6">%</p></div></td>
                <td colspan="2"><div class="c1">HCG<input type="checkbox"<?php if($n5>0){ if($r5['hcg']=='ok'){ ?> checked <?php }} ?> name="c15" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Blood<input type="checkbox"<?php if($n5>0){ if($r5['blood']=='ok'){ ?> checked <?php }} ?> name="c16" class="c2"></div></td>
                <td><div class="c1">Monocytes<p><input type="number" name="m7">%</p></div></td>
                <td colspan="2"><div class="c1">FBC/RBS<input type="checkbox"<?php if($n5>0){ if($r5['fbc']=='ok'){ ?> checked <?php }} ?> name="c17" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Spec. gravity<input type="checkbox"<?php if($n5>0){ if($r5['spec']=='ok'){ ?> checked <?php }} ?> name="c18" class="c2"></div></td>
                <td><div class="c1">Lymphocyted<p><input type="number" name="m8">%</p></div></td>
                <td colspan="2"><div class="c1">Bactreglology<input type="checkbox"<?php if($n5>0){ if($r5['bact']=='ok'){ ?> checked <?php }} ?> name="c19" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Ketones<input type="checkbox"<?php if($n5>0){ if($r5['ketones']=='ok'){ ?> checked <?php }} ?> name="c20" class="c2"></div></td>
                <td colspan="2"><div class="c1">ESR<p><input type="text" name="m9">mm/hr</p></div></td>
                <td colspan="2"><div class="c1">Gram stan<input type="checkbox"<?php if($n5>0){ if($r5['gram']=='ok'){ ?> checked <?php }} ?> name="c21" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Bilirubin<input type="checkbox"<?php if($n5>0){ if($r5['bilirubin']=='ok'){ ?> checked <?php }} ?> name="c22" class="c2"></div></td>
                <td colspan="2"><div class="c1">Blood Film<input type="checkbox"<?php if($n5>0){ if($r5['bloodfilm']=='ok'){ ?> checked <?php }} ?> name="c23" class="c2"></div></td>
                <td colspan="2"><div class="c1">A+B<input type="checkbox"<?php if($n5>0){ if($r5['a']=='ok'){ ?> checked <?php }} ?> name="c24" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Glucose<input type="checkbox"<?php if($n5>0){ if($r5['glucose']=='ok'){ ?> checked <?php }} ?> name="c25" class="c2"></div></td>
                <td colspan="2"><div class="c1">IMUNOHEAMATOLOGY<input type="checkbox"<?php if($n5>0){ if($r5['imun']=='ok'){ ?> checked <?php }} ?> name="c26" class="c2"></div></td>
                <td colspan="2"><div class="c1">Other<input type="checkbox"<?php if($n5>0){ if($r5['other']=='ok'){ ?> checked <?php }} ?> name="c27" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">RBC/HPF<input type="checkbox"<?php if($n5>0){ if($r5['rbc']=='ok'){ ?> checked <?php }} ?> name="c28" class="c2"></div></td>
                <td colspan="2"><div class="c1">BLOOD group & RH<input type="checkbox"<?php if($n5>0){ if($r5['bloodgroup']=='ok'){ ?> checked <?php }} ?> name="c29" class="c2"></div></td>
                <td colspan="2"></td>
            </tr><tr>
                <td><div class="c1">WBC/HPF<input type="checkbox"<?php if($n5>0){ if($r5['wbc']=='ok'){ ?> checked <?php }} ?> name="c30" class="c2"></div></td>
                <td colspan="2"></td>
                <td colspan="2"></td>
            </tr><tr bgcolor="green">
                <td colspan="6"><div class="c1"><p style="margin-left: 20px; color: white;">Reported by</p><p style="margin-right: 230px; color: white;">Sig.</p></div></td>
            </tr>
            </table>
            <input type="submit" name="submit" value="send" class="submit">
        </div></form>
    </div>
</body>
</html>
