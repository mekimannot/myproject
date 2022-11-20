<?php
  include('../conn.php');
  include('../session.php');
  $sel=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $rr1=mysqli_fetch_assoc($sel);
  $presname=$rr1['Fname'];
  /*
  if(isset($_GET['gg'])){
    $gg=$_POST['gg'];
    echo $gg;
  }*/
  $select=mysqli_query($conn,"select *from measurement");
  $select2=mysqli_query($conn,"select *from drug_name");
  $select1=mysqli_query($conn,"select *from drug where status='1'");
  if(isset($_POST['btn'])){
    $dname=$_POST['search'];
    $select1=mysqli_query($conn,"select *from drug where dname='$dname' and status='1'");
  }
  if(isset($_POST['submit'])){
    $dname=$_POST['name'];
    $total=$_POST['total'];
    $measure=$_POST['measure'];
    $pdate=$_POST['pdate'];
    $edate=$_POST['edate'];
    $price=$_POST['price'];
    $p=$price*$total;
    $c1=mysqli_num_rows($select1);
    $n1=2;
    if($c1>0){
        while($r1=mysqli_fetch_assoc($select1)){
           if($dname==$r1['Dname']){
             $n1=1;
           }
        }
    }
    if($n1=='1'){
        echo "<script>alert('it is already exist');</script>";
        echo "<script>document.location='drug.php';</script>";
    }else if($n1=='2'){
    $insert=mysqli_query($conn,"insert into drug(dname,total,Pdate,Edate,price,status) values('$dname','$total','$pdate','$edate','$p','1')");
    if($insert){
        echo "<script>alert('seccussfuly inserted');</script>";
        echo "<script>document.location='drug.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='drug.php';</script>";

    }
}
  }if(isset($_POST['sub'])){
    $dname=$_POST['name'];

    $insert=mysqli_query($conn,"insert into drug_requist(dname,prescriper_name) values('$dname','$presname')");
    if($insert){
        echo "<script>alert('seccussfuly sended');</script>";
        echo "<script>document.location='all_requist.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='drug.php';</script>";

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
          <link rel="stylesheet" type="text/css" href="../bootstrap.css">
    <style type="text/css">
              body{
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)),url(../images/p2.jpg);
    background-size: cover;
    background-position: center;
              }
        #r{
            background: green;
            color: white;
            padding: 10px 5px;
        }#r:hover{
            color: lightgray;
        }#m{
            background: blue;
            color: white;
            padding: 10px 5px;
        }#m:hover{
            color: lightgray;
        }.in1{
            padding-left: 10px;
        }
    </style>
</head>
<body>
     <div class="doctor">
        <form action="" method="post">
        <div class="a">
        <div class="left">
            <h3 style="font-size: 18px; margin-top: 20px; margin-left: 20px;">Recieve Drug From Store</h3>
            <hr>
            <div class="r">
                <div class="two">
                    <label>drug name</label>
                <input type="text" name="name" class="form-control"value="<?php if(isset($_GET['m'])){
    $id=$_GET['m'];
    $s1=mysqli_query($conn,"select *from drug where ID='$id'");
     $r5=mysqli_fetch_assoc($s1); 
     echo $r5['Dname'];}?>" <?php if(isset($_GET['m'])) { ?> readonly <?php }else{ echo "readonly";} ?>>
                <!--
                      $c=mysqli_num_rows($select2);
                        if($c>0){
                            while($r=mysqli_fetch_assoc($select2)){
                                echo "
                    <option value='".$r['dname']."'>".$r['dname']."</option>
                                ";
                            }
                        }-->
            </div>
            
            </div><?php if(isset($_GET['m'])){?>
            <input style="margin-top: 20px; margin-left: 40%;" type="submit" name="sub" class="btn btn-primary" value="Requist"><?php } else {?>
                
                <?php }?>
        </div></form>
        <div class="drug">
            <form action="" method="post">
                <div class="se">
                <h2>Drug Information</h2>
                <div class="search">
                    <input type="search" name="search" class="sr">
                    <button class="btn5" name="btn">Search</button>
                </div>
            </div></form>
            <hr>
            <?php if(isset($_GET['n'])){ ?><table class="table">
                        <thead>
                        <tr>
                        <td>Ro. No</td>
                        <td>Drug name</td>
                        <td>Total in number</td>
                        <td>Product Date</td>
                        <td>Expired Date</td>
                       <td>Expired Status</td>
                    </tr></thead>
                    <tbody>
                     <?php
                     $n=$_GET['n'];
                     $s3=mysqli_query($conn,"select *from drug where ID='$n'");
                     $r4=mysqli_fetch_assoc($s3);
                     $dname=$r4['Dname'];
                     $select1=mysqli_query($conn,"select *from drug where Dname='$dname'");
               $coun=mysqli_num_rows($select1);
               $rn=1;
               $t=0;
               $p=0;
               if($coun>0){
                while($row=mysqli_fetch_assoc($select1)){
                    echo "
                   <tr>
                    <td>".$rn."</td>
                    <td>".$row['Dname']."</td>
                    <td>".$row['total']."</td>
                    <td>".$row['Pdate']."</td>
                    <td>".$row['Edate']."</td>";
                        $date=date("Y-m-d");
                        if($row['Edate']>=$date){
                          echo "
                             <td nowrap style='color: green;'>not Expired</td>
                    </tr>
                          ";
                        }else{
                            echo "
                             <td style='color: red;'>Expired</td>                    
                             </tr>
                            ";
                        }
                    $t+=$row['total'];
                    $rn++;
                    $p+=$row['price'];
                }echo "
                <tr style='background: green;'>
                <td colspan='3' align='right' style='padding-right: 12%;color: aliceblue; font-size: 25px;'>Total: ".$t."</td>
                <td colspan='4' align='right' style='color: aliceblue; font-size: 25px;'>Total Price: ".$p." BIRR</td>
            </tr>";
               }
            ?>
            
                    </tbody>
                    </table><?php } else{ ?>
            <table class="table">
                        <thead>
                        <tr>
                        <td>Ro. No</td>
                        <td>Drug name</td>
                        <td>Total in number</td>
                        <td>Update drug</td>
                        <td>View Detail</td>
                       <!-- <td>Expired Status</td>-->
                    </tr></thead>
                    <tbody>
                     <?php
               $coun=mysqli_num_rows($select1);
               $rn=1;
               $t=0;
               $p=0;
               if($coun>0){
                while($row=mysqli_fetch_assoc($select1)){
                    $dname=$row['Dname'];
                    $s2=mysqli_query($conn,"select *from drug where Dname='$dname'");
                    $c2=mysqli_num_rows($s2);
                    $total=0;
                    if($c2>0){
                        while($r3=mysqli_fetch_assoc($s2)){
                            $total=$total+$r3['total'];
                         $t+=$r3['total'];
                    $p+=$r3['price'];
                        }
                    }
                    echo "
                   <tr>
                    <td>".$rn."</td>
                    <td>".$row['Dname']."</td>
                    <td>".$total."</td>
                    <td nowrap><a id='r' href='drug.php?m=".$row['ID']."' target='iframe'>Recieve drug</a></td>
                    <td nowrap><a id='m' href='drug.php?n=".$row['ID']."' target='iframe'>View Detail</a></td>";
                       /* $date=date("Y-m-d");
                        if($row['Edate']>=$date){
                          echo "
                             <td nowrap style='color: green;'>not Expired</td>
                    </tr>
                          ";
                        }else{
                            echo "
                             <td style='color: red;'>Expired</td>                    
                             </tr>
                            ";
                        }*/
                    $rn++;
                }echo "
                <tr style='background: green;'>
                <td colspan='3' align='right' style='padding-right: 12%;color: aliceblue; font-size: 25px;'>Total: ".$t."</td>
                <td colspan='4' align='right' style='color: aliceblue; font-size: 25px;'>Total Price: ".$p." BIRR</td>
            </tr>";
               }
            ?>
            
                    </tbody>
                    </table><?php }?><!--
                    <div class="t" style="display: flex;"> 
                    <div class="bottom" style="margin-left: 22%; color: blue;"></div>
                    <div class="p" style="margin-left: 47%;"></div>-->
                </div>
        </div></div>
    </div>
</body>
</html>
