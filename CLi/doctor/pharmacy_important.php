
<?php
  include('../conn.php');
  include('../session.php');
  $user_id=$_SESSION['user_id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $select1=mysqli_query($conn,"select *from drug_name");
  $select2=mysqli_query($conn,"select *from drug_name");
  $select3=mysqli_query($conn,"select *from drug_name");
  $select4=mysqli_query($conn,"select *from drug_name");
  $select5=mysqli_query($conn,"select *from drug_name");
  $row=mysqli_fetch_assoc($select);
  
  if(isset($_POST['s1'])){
    $status="2";
    $drug=$_POST['drug'];
    $amount=$_POST['n1'];
    $description=$_POST['text'];
    $update=mysqli_query($conn,"update patient set drug='$drug',amount='$amount',status='$status',Description='$description' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }
  }if(isset($_POST['s2'])){
    $status="2";
    $drug=$_POST['drug'];
    $drug1=$_POST['drug2'];
    $drug=$drug.",".$drug1;
    $amount=$_POST['text'];
    $update=mysqli_query($conn,"update patient set drug='$drug',amount='$amount',status='$status' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }
  }if(isset($_POST['s3'])){
    $status="2";
    $drug=$_POST['drug'];
    $amount=$_POST['text'];
    $update=mysqli_query($conn,"update patient set drug='$drug',amount='$amount',status='$status' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }
  }if(isset($_POST['s4'])){
    $status="2";
    $drug=$_POST['drug'];
    $amount=$_POST['text'];
    $update=mysqli_query($conn,"update patient set drug='$drug',amount='$amount',status='$status' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }
  }if(isset($_POST['s5'])){
    $status="2";
    $drug=$_POST['drug'];
    $amount=$_POST['text'];
    $update=mysqli_query($conn,"update patient set drug='$drug',amount='$amount',status='$status' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='pharmacy.php'</script>";
    }
  }
  $number=0;
  if(isset($_POST['btn'])){
    $number=$_POST['number'];
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
            <form action="" method="post">
                <!--<div class="two">
                    <label>how many type of drug</label>
                   <div  style="display: flex;">
                    <select name="number" style="height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" name="btn" value="GO" style="width: 70px; background: green; height: 40px; color: aliceblue; font-size: 25px;"></div>
                </div>-->
                <?php
                if($number==1){
                    echo "
           <div class='two'>
                <label>Drug</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug'>
                    <option value=''>select Drug</option>";
                       $c=mysqli_num_rows($select1);
                       if($c>0){
                        while($r=mysqli_fetch_assoc($select1)){
                            echo "
                              <option value='".$r['dname']."''>".$r['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><div style="display: grid; margin-top: -40px"><label>Number</label><input type="number" name="n1" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div></div>
            </div><div class="two">
                <label>Description</label>
                <textarea name="text" class="txt"></textarea>
            </div>
            <input type="submit" name="s1" value="submit" class="sub" style="margin-top: 10px; margin-bottom: 10px;"><?php
                  }else if($number==2){
           echo "
           <div class='two'>
                <label>Drug 1</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug'>
                    <option value=''>select Drug</option>";
                       $c=mysqli_num_rows($select1);
                       if($c>0){
                        while($r=mysqli_fetch_assoc($select1)){
                            echo "
                              <option value='".$r['dname']."''>".$r['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n1" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div><?php
              echo "
           <div class='two'>
                <label>Drug 2</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug2'>
                    <option value=''>select Drug</option>";
                       $c1=mysqli_num_rows($select2);
                       if($c1>0){
                        while($r1=mysqli_fetch_assoc($select2)){
                            echo "
                              <option value='".$r1['dname']."''>".$r1['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n2" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <div class="two">
                <label>Amount</label>
                <textarea name="text" class="txt"></textarea>
            </div>
            <input type="submit" name="s2" value="submit" class="sub" style="margin-top: 10px; margin-bottom: 10px;"><?php
                  }else if($number==3){
                    echo "
           <div class='two'>
                <label>Drug 1</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug'>
                    <option value=''>select Drug</option>";
                       $c=mysqli_num_rows($select1);
                       if($c>0){
                        while($r=mysqli_fetch_assoc($select1)){
                            echo "
                              <option value='".$r['dname']."''>".$r['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n1" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div><?php
              echo "
           <div class='two'>
                <label>Drug 2</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug2'>
                    <option value=''>select Drug</option>";
                       $c1=mysqli_num_rows($select2);
                       if($c1>0){
                        while($r1=mysqli_fetch_assoc($select2)){
                            echo "
                              <option value='".$r1['dname']."''>".$r1['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n2" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 3</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug3'>
                    <option value=''>select Drug</option>";
                       $c3=mysqli_num_rows($select3);
                       if($c3>0){
                        while($r3=mysqli_fetch_assoc($select3)){
                            echo "
                              <option value='".$r3['dname']."''>".$r3['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n3" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <div class="two">
                <label>Amount</label>
                <textarea name="text" class="txt"></textarea>
            </div>
            <input type="submit" name="s3" value="submit" class="sub" style="margin-top: 10px; margin-bottom: 10px;"><?php
                  }else if($number==4){
                    echo "
           <div class='two'>
                <label>Drug 1</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug'>
                    <option value=''>select Drug</option>";
                       $c=mysqli_num_rows($select1);
                       if($c>0){
                        while($r=mysqli_fetch_assoc($select1)){
                            echo "
                              <option value='".$r['dname']."''>".$r['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n1" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div><?php
              echo "
           <div class='two'>
                <label>Drug 2</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug2'>
                    <option value=''>select Drug</option>";
                       $c2=mysqli_num_rows($select2);
                       if($c2>0){
                        while($r2=mysqli_fetch_assoc($select2)){
                            echo "
                              <option value='".$r2['dname']."''>".$r2['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n2" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 3</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug3'>
                    <option value=''>select Drug</option>";
                       $c3=mysqli_num_rows($select3);
                       if($c3>0){
                        while($r3=mysqli_fetch_assoc($select3)){
                            echo "
                              <option value='".$r3['dname']."''>".$r3['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n3" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 4</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug4'>
                    <option value=''>select Drug</option>";
                       $c4=mysqli_num_rows($select4);
                       if($c4>0){
                        while($r4=mysqli_fetch_assoc($select4)){
                            echo "
                              <option value='".$r4['dname']."''>".$r4['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n4" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <div class="two">
                <label>Amount</label>
                <textarea name="text" class="txt"></textarea>
            </div>
            <input type="submit" name="s4" value="submit" class="sub" style="margin-top: 10px; margin-bottom: 10px;"><?php
                  }else if($number==5){
                    echo "
           <div class='two'>
                <label>Drug 1</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug'>
                    <option value=''>select Drug</option>";
                       $c=mysqli_num_rows($select1);
                       if($c>0){
                        while($r=mysqli_fetch_assoc($select1)){
                            echo "
                              <option value='".$r['dname']."''>".$r['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n1" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div><?php
              echo "
           <div class='two'>
                <label>Drug 2</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug2'>
                    <option value=''>select Drug</option>";
                       $c2=mysqli_num_rows($select2);
                       if($c2>0){
                        while($r2=mysqli_fetch_assoc($select2)){
                            echo "
                              <option value='".$r2['dname']."''>".$r2['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n2" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 3</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug3'>
                    <option value=''>select Drug</option>";
                       $c3=mysqli_num_rows($select3);
                       if($c3>0){
                        while($r3=mysqli_fetch_assoc($select3)){
                            echo "
                              <option value='".$r3['dname']."''>".$r3['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n3" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 4</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug4'>
                    <option value=''>select Drug</option>";
                       $c4=mysqli_num_rows($select4);
                       if($c4>0){
                        while($r4=mysqli_fetch_assoc($select4)){
                            echo "
                              <option value='".$r4['dname']."''>".$r4['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n4" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <?php
              echo "
           <div class='two'>
                <label>Drug 5</label><div style='display: flex;''>
                <select  style='height: 40px; width: 230px; border-radius: 10px; border: 1px solid black;' name='drug5'>
                    <option value=''>select Drug</option>";
                       $c5=mysqli_num_rows($select5);
                       if($c5>0){
                        while($r5=mysqli_fetch_assoc($select5)){
                            echo "
                              <option value='".$r5['dname']."''>".$r5['dname']."</option>
                            ";
                        }
                       }
                    ?>
                </select><input type="number" name="n5" style="width: 70px;background: ; border-radius: 10px; border: 1px solid blue; height: 40px; color: black; font-size: 25px;"></div>
            </div>
            <div class="two">
                <label>Amount</label>
                <textarea name="text" class="txt"></textarea>
            </div>
            <input type="submit" name="s5" value="submit" class="sub" style="margin-top: 10px; margin-bottom: 10px;"><?php
                  }else{
                    echo "<p style='margin-top: 30%; margin-left: 20%; color: blue;'>please select 1 to 5 only</p>";
                  }
                ?>
   	     		
   	     	</form>
        </div>
        <div class="dep4">
            <h3>Patient Information</h3>
            <hr>
            <form action="" method="post">
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
   	     			<input type="text" name="depart" value="<?php echo $row['Department']; ?>"  readonly class="inp">
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
   	     			<input type="text" name="patient_id" value="<?php echo $row['User_id']; ?>"   readonly class="inp">
   	     		</div>
   	     	</div>
   	     </div></div></form>
        </div>
    </div>
    </div>
</body>
</html>
