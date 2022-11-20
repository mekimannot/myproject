
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
    $status="3";
    $update=mysqli_query($conn,"update patient set status='$status' where ID='$user_id'");
    if(isset($_POST['c1'])){$c1="ok";}else{$c1="no";}
    if(isset($_POST['c2'])){$c2="ok";}else{$c2="no";}
    if(isset($_POST['c3'])){$c3="ok";}else{$c3="no";}
    if(isset($_POST['c4'])){$c4="ok"; } else { $c4="no";}
    if(isset($_POST['c5'])){$c5="ok";}else{$c5="no";}
    if(isset($_POST['c6'])){$c6="ok";}else{$c6="no";}
    if(isset($_POST['c7'])){$c7="ok"; }else { $c7="no";}
    if(isset($_POST['c8'])){$c8="ok";}else{$c8="no";}
    if(isset($_POST['c9'])){$c9="ok";}else{$c9="no";}
    if(isset($_POST['c10'])){$c10="ok";}else{$c10="no";}
    if(isset($_POST['c11'])){$c11="ok";}else{$c11="no";}
    if(isset($_POST['c12'])){$c12="ok";}else{$c12="no";}
    if(isset($_POST['c13'])){$c13="ok";}else{$c13="no";}
    if(isset($_POST['c14'])){$c14="ok";}else{$c14="no";}
    if(isset($_POST['c15'])){$c15="ok";}else{$c15="no";}
    if(isset($_POST['c16'])){$c16="ok"; } else { $c16="no";}
    if(isset($_POST['c17'])){$c17="ok";}else{$c17="no";}
    if(isset($_POST['c18'])){$c18="ok";}else{$c18="no";}
    if(isset($_POST['c19'])){$c19="ok"; }else { $c19="no";}
    if(isset($_POST['c20'])){$c20="ok";}else{$c20="no";}
    if(isset($_POST['c21'])){$c21="ok";}else{$c21="no";}
    if(isset($_POST['c22'])){$c22="ok";}else{$c22="no";}
    if(isset($_POST['c23'])){$c23="ok";}else{$c23="no";}
    if(isset($_POST['c24'])){$c24="ok";}else{$c24="no";}
    if(isset($_POST['c25'])){$c25="ok"; }else { $c25="no";}
    if(isset($_POST['c26'])){$c26="ok";}else{$c26="no";}
    if(isset($_POST['c27'])){$c27="ok";}else{$c27="no";}
    if(isset($_POST['c28'])){$c28="ok";}else{$c28="no";}
    if(isset($_POST['c29'])){$c29="ok";}else{$c29="no";}
    if(isset($_POST['c30'])){$c30="ok";}else{$c30="no";}
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
    $m3=$_POST['m3'];
    $m4=$_POST['m4'];
    $m5=$_POST['m5'];
    $m6=$_POST['m6'];
    $m7=$_POST['m7'];
    $m8=$_POST['m8'];
    $m9=$_POST['m9'];
    $insert=mysqli_query($conn,"insert into lab(patient_id,app,color,o,cons,leucocyte,h,oip,nitrite,ox,urobilinogen,rpr,protein,rhe,ph,hcg,blood,fbc,spec,bact,ketones,gram,bilirubin,bloodfilm,a,glucose,imun,other,rbc,bloodgroup,wbc,hg,hct,wbcm,netrophils,basophils,eosinophils,monocytes,lymphocytes,esr) values('$user_id','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','$c16','$c17','$c18','$c19','$c20','$c21','$c22','$c23','$c24','$c25','$c26','$c27','$c28','$c29','$c30','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9')");
    if($insert){
        echo "<script>alert('Seccussfuly sended');</script>";
        echo "<script>document.location='lab.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='lab.php'</script>";
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
        width: 160px;
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
                <td><div class="c1">APP <input type="checkbox" name="c1" class="c2"></div></td>
                <td><div class="c1">color<input type="checkbox" name="c2" class="c2"></div></td>
                <td colspan="2"><div class="c1">Hg   <p><input type="text" name="m1" readonly>Mg/di</p></div></td>
                <td rowspan="3" align="center">Widal <br>& <br>Weil Flex</td>
                <td><div class="c1">'O'<input type="checkbox" name="c3" class="c2"></div></td>
            </tr>
            <tr>
                <td><div class="c1">Cons<input type="checkbox" name="c4" class="c2"></div></td>
                <td><div class="c1">Leucocyte<input type="checkbox" name="c5" class="c2"></div></td>
                <td colspan="2"><div class="c1">Hct<p><input type="number" name="m2" readonly>%</p></div></td>
                <td><div class="c1">'H'<input type="checkbox" name="c6" class="c2"></div></td>
            </tr>
            <tr>
                <td><div class="c1">OIP<input type="checkbox" name="c7" class="c2"></div></td>
                <td><div class="c1">nitrite<input type="checkbox" name="c8" class="c2"></div></td>
                <td colspan="2"><div class="c1">WBC<p><input type="text" name="m3" readonly>Mm3</p></div></td>
                <td><div class="c1">'Ox'<input type="checkbox" name="c9" class="c2"></div></td>
            </tr>
            <tr>
                <td rowspan="10"></td>
                <td><div class="c1">Urobilinogen<input type="checkbox" name="c10" class="c2"></div></td>
                <td rowspan="5" class="bottom" align="center">Diff Count</td>
                <td><div class="c1">Netrophils<p><input type="number" name="m4" readonly>%</p></div></td>
                <td colspan="2"><div class="c1">RPR<input type="checkbox" name="c11" class="c2"></div></td>
            </tr>
            <tr>
                <td><div class="c1">Protein<input type="checkbox" name="c12" class="c2"></div></td>
                <td><div class="c1">Basophils<p><input type="number" name="m5" readonly>%</p></div></td>
                <td colspan="2"><div class="c1">Rheumatoid factor<input type="checkbox" name="c13" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">PH<input type="checkbox" name="c14" class="c2"></div></td>
                <td><div class="c1">Eosinophils<p><input type="number" name="m6" readonly>%</p></div></td>
                <td colspan="2"><div class="c1">HCG<input type="checkbox" name="c15" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Blood<input type="checkbox" name="c16" class="c2"></div></td>
                <td><div class="c1">Monocytes<p><input type="number" name="m7" readonly>%</p></div></td>
                <td colspan="2"><div class="c1">FBC/RBS<input type="checkbox" name="c17" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Spec. gravity<input type="checkbox" name="c18" class="c2"></div></td>
                <td><div class="c1">Lymphocyted<p><input type="number" name="m8" readonly>%</p></div></td>
                <td colspan="2"><div class="c1">Bactreglology<input type="checkbox" name="c19" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Ketones<input type="checkbox" name="c20" class="c2"></div></td>
                <td colspan="2"><div class="c1">ESR<p><input type="text" name="m9" readonly>mm/hr</p></div></td>
                <td colspan="2"><div class="c1">Gram stan<input type="checkbox" name="c21" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Bilirubin<input type="checkbox" name="c22" class="c2"></div></td>
                <td colspan="2"><div class="c1">Blood Film<input type="checkbox" name="c23" class="c2"></div></td>
                <td colspan="2"><div class="c1">A+B<input type="checkbox" name="c24" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">Glucose<input type="checkbox" name="c25" class="c2"></div></td>
                <td colspan="2"><div class="c1">IMUNOHEAMATOLOGY<input type="checkbox" name="c26" class="c2"></div></td>
                <td colspan="2"><div class="c1">Other<input type="checkbox" name="c27" class="c2"></div></td>
            </tr><tr>
                <td><div class="c1">RBC/HPF<input type="checkbox" name="c28" class="c2"></div></td>
                <td colspan="2"><div class="c1">BLOOD group & RH<input type="checkbox" name="c29" class="c2"></div></td>
                <td colspan="2"></td>
            </tr><tr>
                <td><div class="c1">WBC/HPF<input type="checkbox" name="c30" class="c2"></div></td>
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
