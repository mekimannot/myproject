<?php
  include('../conn.php');
  include('../session.php');
  /*if(isset($_POST['meki'])){
    $nn=$_POST['nn'];
    $up=mysqli_query($conn,"update patient set amount='$nn' where ID='17' ");
    if($up){
        echo "<script >alert('secccccccccccc')</script>";
    }else{

        echo "<script >alert('noooooooooooooo')</script>";
    }
  }*/$n1=0;
  if(isset($_GET['dd'])){
    $id=$_GET['dd'];
    $select=mysqli_query($conn,"select *from drug where ID='$id' ");
    $r2=mysqli_fetch_assoc($select);
    $total=$r2['total'];
    $price=$r2['price'];
    $p=$price/$total;
    $n1=1;
  }
  if(isset($_GET['id'])){
    $_SESSION['iddd']=$_GET['id'];
}
    $ii=$_SESSION['iddd'];
    $s1=mysqli_query($conn,"select *from patient where ID='$ii'");
    $r5=mysqli_fetch_assoc($s1);
    if(isset($_POST['submit'])){
        $amount=$_POST['amount'];
        $select2=mysqli_query($conn,"select *from patient where ID='$ii' ");
        $r3=mysqli_fetch_assoc($select2);
        $drug=$r3['drug'];
        $dname=$r2['Dname'];
        $p1=$p*$amount;
        if($drug=="NULL" or $drug==""){
        $update=mysqli_query($conn,"update patient set drug='$dname',amount='$amount',price='$p1' where ID='$ii'");
    if($update){
        $total=$total-$amount;
        $price=$price-$p1;
        $up=mysqli_query($conn,"update drug set total='$total',price='$price' where ID='$id'");
        echo "<script>alert('successfully withdrawn');</script>";
        echo "<script>document.location='price.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='price.php';</script>";
    }
    }else{
        $total=$total-$amount;
        $price=$price-$p1;
        $up=mysqli_query($conn,"update drug set total='$total',price='$price' where ID='$id'");
        $a=$r3['amount'];
        $p2=$r3['price'];
        $dname=$drug.",".$dname;
        $amount=$a.",".$amount;
        $p1=$p2+$p1;
        $update=mysqli_query($conn,"update patient set drug='$dname',amount='$amount',price='$p1' where ID='$ii'");
    if($update){

        echo "<script>alert('successfully withdrawn');</script>";
        echo "<script>document.location='price.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='price.php';</script>";
    }
    }
    }
    $date=date("Y-m-d");

  $select1=mysqli_query($conn,"select *from drug where Edate>='$date' and total>'0'");
  if(isset($_POST['btn'])){
    $dname=$_POST['search'];
    $select1=mysqli_query($conn,"select *from drug where dname='$dname'");
  }if(isset($_POST['yes'])){
    $upd=mysqli_query($conn,"update patient set status='4' where ID='$ii'");
    if($upd){
        echo "<script>alert('withdrawn is finished thank you!');</script>";
        echo "<script>document.location='patient.php';</script>";
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
    <link href="jquery/jquery-ui.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
    <style type="text/css">
        .h{
            background-color: lightgray;
            color: gray;
            width: 80px; 
            background: green; 
            padding: 0px 5px; 
            color: aliceblue; border: 1px solid blue;'
        }.h:hover{
            color: gray;
        }#a1{
            color: white;
            border-radius: 20px;
            height: 30px;
            background-color: red;
            float: right;
            position: relative;
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            margin-top: -5px;
        }#a1:hover{
            background-color: blue;
        }
        #a2{
            color: aliceblue;
            border-radius: 20px;
            margin-left: 5px;
            width: 30px;
            height: 30px;
            background-color: blue;
            float: right;
            margin-right: 30px;
            text-align: center;
            padding-top: 5px;
        }.s2{

        }#p1{
            color: white; 
            background: red; 
            border-radius: 60px;
            text-align: center;
            width: 55px;
            height: 50px;
            padding-top: 15px;
        }#p2{
             color: white; 
             background: blue;
             border-radius: 60px;
            text-align: center;
            width: 55px;
            height: 50px;
            padding-top: 15px;
        }
    </style>
</head>
<body>
     <div class="doctor">
        <form action="" method="post">
        <div class="a">
        <div class="left" style="padding-bottom: 30px;">
            <p>patinet Information</p>
            <hr>
            <div class="rr">
                <div class="two">
                <label>First name</label>
                <input type="text" name="pdate" class="in2" readonly value="<?php echo $r5['Fname']; ?>">
            </div>
                <div class="two">
                <label>Last Name</label>
                <input type="text" name="edate" class="in2" readonly value="<?php echo $r5['Lname']; ?>">
            </div>
            
            </div>
            <div class="rr">
                <div class="two">
                <label>User ID</label>
                <input type="text" name="pdate" class="in2" readonly value="<?php echo $r5['User_id']; ?>">
            </div>
                <div class="two">
                <label>Age</label>
                <input type="text" name="edate" class="in2" readonly value="<?php echo $r5['age']; ?>">
            </div>
            
            </div>
            <div class="r">
                <div class="two">
                <label>Doctor Description</label>
                <textarea name="description" class="txt" style="width: 90%; cursor: pointer;" readonly><?php echo $r5['Description']; ?></textarea>
            </div>
            <?php if($n1==1){ ?>
            <div class="rr">
                <div class="two" style="margin-top: 5px;">
                <label>Drug</label>
                <input type="text" name="drug" class="in2" readonly value="<?php echo $r2['Dname']; ?>">
            </div>
                <div class="two" style="margin-top: 5px;">
                <label>Price</label>
                <input type="text" name="price" class="in2" readonly value="<?php echo $p; ?>">
            </div>
            
            </div><div class="rr">
                <div class="two" style="margin-top: 5px;">
                <label>Drug Amount</label>
                <input type="number" name="amount" class="in2" style="background: white; color: black; font-size: 25px; width: 80%;">
            </div>
            <input style="padding-left: 5px; padding-right: 10px; margin-left: 10px; margin-top: 40px; width: fit-content;" type="submit" name="submit" class="sub" value="Withdraw">
            </div><?php } else{  echo "<h2 style='margin-top: 13%; text-align: center; color: blue;' >waiting for withdrawal</h2>"; }?>
            <div style="display: flex; margin-left: 30px; color: maroon; padding-top: 0px;" ><p style="font-size: 25px;">withdrawal is finished</p><button name="yes" class="yes" onclick='sure()'>yes</button><button class="no">no</button></div>
            </div>
            
            
        </div></form>
        <div class="drug">
            <form action="" method="post">
                <div class="se">
                <h2>Withdraw</h2>
                <div class="search">
                    <input type="search" name="search" class="sr">
                    <button class="btn5" name="btn">Search</button>
                </div>
            </div></form>
            <hr>
            <table class="table">
                        <thead>
                        <tr>
                        <td>Ro. No</td>
                        <td>Drug name</td>
                        <td>Total in number</td>
                        <td>Product Date</td>
                        <td>Expired Date</td>
                        <td>No of day for Expired</td>
                        <td>Price</td>
                        <td>withdraw</td>
                    </tr></thead>
                    <tbody><form action="" method="post">
                     <?php
               $coun=mysqli_num_rows($select1);
               $rn=1;
               $t=0;
               $p=0;

               if($coun>0){
                while($row=mysqli_fetch_assoc($select1)){

                  $DF=date_create(date("Y-m-d"));
                  $DT=date_create($row['Edate']);
                  $diff =  date_diff($DF , $DT );
                  $num_days = (1 + $diff->format("%a"));
                    echo "
                    
                   <tr>
                    <td>".$rn."</td>
                    <td>".$row['Dname']."</td>
                    <td>".$row['total']."</td> 
                    <td>".$row['Pdate']."</td>
                    <td>".$row['Edate']."</td>";
                    if($num_days>='360'){
                        echo "<div><td><p id='p2'>".$num_days." </p></td>";
                }else{
                        echo "<td><p id='p1'>".$num_days." </p></td>";
                }echo"
                    <td>".$row['price']." birr</td>
                    <td><a href='price.php?dd=".$row['ID']."'  id='a1'>Withdraw</a></td>
                </tr>
                    ";
                    $t+=$row['total'];
                    $rn++;
                    $p+=$row['price'];
                }echo "
                <tr style='background: green;'>
                <td colspan='3' align='right' style='padding-right: 12%;color: aliceblue; font-size: 25px;'>Total: ".$t."</td>
                <td colspan='4' align='right' style='color: aliceblue; font-size: 25px;'>Total Price: ".$p." BIRR</td>
                <td></td>
            </tr>";
               }
            ?>
                    </form> 
            
                   </tbody>
                    </table>

        </div></div>
    </div>
    <script type="text/javascript">
        function sure(){
            return Confirm('Are you sure?');

        }
    </script>
</body>
</html>
<!--</a><a href='price.php?ddd=".$row['ID']."' id='a2'><i class='fa-solid fa-plus'></i></a>-->