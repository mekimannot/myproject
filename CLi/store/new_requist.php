<?php 
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from drug_requist where status='0'");
  $select1=mysqli_query($conn,"select *from drug where status='1'");
  if(isset($_POST['submit'])){
    $did=$_POST['did'];
    $dname=$_POST['drug'];
    $total=$_POST['total_number'];
    $pdate=$_POST['pdate'];
    $edate=$_POST['edate'];
    $price=$_POST['single_price'];
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
    $insert=mysqli_query($conn,"insert into drug(dname,total,Pdate,Edate,price,status) values('$dname','$total','$pdate','$edate','$p','2')");
    $udpate=mysqli_query($conn,"update drug_requist set total_number='$total', single_price='$price', product_date='$pdate', expired_date='$edate', status='1' where ID='$did'");
    if($insert){
        echo "<script>alert('seccussfuly inserted');</script>";
        echo "<script>document.location='new_requist.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='new_requist.php';</script>";

    }
    }else if($n1=='2'){
    $insert=mysqli_query($conn,"insert into drug(dname,total,Pdate,Edate,price,status) values('$dname','$total','$pdate','$edate','$p','1')");
    $udpate=mysqli_query($conn,"update drug_requist set total_number='$total', single_price='$price', product_date='$pdate', expired_date='$edate', status='1' where ID='$did'");
    if($insert){
        echo "<script>alert('seccussfuly inserted');</script>";
        echo "<script>document.location='new_requist.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='new_requist.php';</script>";

    }
}
  }
  if(isset($_POST['reject'])){
    $did=$_POST['did'];
    $update=mysqli_query($conn,"update drug_requist set approvale='no', status='1' where ID='$did'");
    if($update){
        echo "<script>alert('seccussfuly Rejected');</script>";
        echo "<script>document.location='new_requist.php';</script>";
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='new_requist.php';</script>";

    }

  }
 ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Werabe University Clinic Mansgement System</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
          <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
          <link href="../fontawesome/css/brands.css" rel="stylesheet">
          <link href="../fontawesome/css/solid.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="../bootstrap.css">
          <style type="text/css">
              .approvale{
                width: 500px;
                height: 440px;
                background: lightgray;
                border-radius: 10px;
                display: none;
                position: absolute;
                top: 70px;
                left: 25%;
                padding: 10px;
              }.subb{
                margin-top: 30px;
                margin-left: 30%;
              }.subbb{
                margin-left: 55%;
                margin-top: -37px;
              }
          </style>
    </head>
    <body>
        <div class="doctor">
            <div class="doc1">
               <h1>Drug Portal</h1>
               <p>Drug > New Requist</p>
            </div>
            <div class="t1">
                <h2>New requist</h2>
                <hr>
                    <table class="table">
                        <thead>
                        <tr>
                        <th>Ro. No</th>
                        <th>Drug Name</th>
                        <th>Prescriper Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr></thead>
                    <tbody>
                    <?php  
                    $rn=1;
                    $count=mysqli_num_rows($select);
                    if($count>0){
                      while($row=mysqli_fetch_assoc($select)){
                        echo "
                    <tr>
                    <td>".$rn."</td>
                    <td>".$row['dname']."</td>
                    <td>".$row['prescriper_name']."</td>
                    <td style='color: blue;'>pending</td>
                <td> <a target='iframe' id='td'  onclick='showmenu()'></i>View</a></td>
                </tr><div class='approvale' id='show'>
                        <h2>Add drug portal</h2><hr>
                        <form action='' method='post'>
                            <div class='form-group'>
                                <label>drug name</label>
                                <input type='text' name='drug' class='form-control' value=".$row['dname']." readonly>
                            </div>
                            <div class='col-md-12'><div class='form-group'>
                                <label>Total number</label>
                                <input type='text' name='total number' class='form-control' required>
                            </div></div>
                           <div class='col-md-12'> <div class='form-group'>
                                <label>Single price</label>
                                <input type='text' name='single_price' class='form-control' required>
                            </div></div>
                            <div class='row'>
                           <div class='col-md-6'> <div class='form-group'>
                                <label>Product Date</label>
                                <input type='date' name='pdate' class='form-control' required>
                            </div></div>
                           <div class='col-md-6'> <div class='form-group'>
                                <label>Expired Date</label>
                                <input type='date' name='edate' class='form-control' required>
                            </div></div></div>
                            <input type='text' name='did' class='form-control' value=".$row['ID']." style='display: none;' readonly>
                        <input type='submit' name='submit' class='btn btn-primary subb'>
                    </form><form method='post' action=''>

                            <input type='text' name='did' class='form-control' value=".$row['ID']." style='display: none;' readonly>
                         <input type='submit' name='reject' class='btn btn-primary subbb' style='background: red; border: 1px solid red;' value='Reject'></form>
                    </div>
                     
                                    ";
                   

                        $rn++;
                      }
                    }


                    ?>
                    
                    </tbody>
                    </table>
            </div>
        </div>
         <script type="text/javascript">

         var state=false;
      function showmenu(){
         state=!state

         if(state===true){
            document.getElementById("show").style.display="block";
         }else{
            document.getElementById("show").style.display="none";
         }
      }
     </script>
    </body>
    </html>