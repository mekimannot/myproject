<?php
  include('../session.php');
  include('../conn.php');
  if(isset($_POST['submit'])){
    $dname=$_POST['dname'];
    $dsname=$_POST['dsname'];
    $insert=mysqli_query($conn,"insert into drug_name(dname,dsname) values('$dname','$dsname')");
    if($insert){
        echo "<script type='text/javascript'>alert('seccussfult added');</script>";
        echo "<script type='text/javascript'>document.location='drug_name.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='drug_name.php';</script>";
    }

  }$select=mysqli_query($conn,"select *from drug_name");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"delete from drug_name where ID='$id'");
    if($delete){
        echo "<script type='text/javascript'>alert('seccussfult Deleted');</script>";
        echo "<script type='text/javascript'>document.location='drug_name.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='drug_name.php';</script>";
    }
  }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Drug</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">


</head>
<body>
   <div class="doctor">
    <div class="doc1">
        <h1>Drug portal</h1>
        <p>Drug >  </p>
    </div>
    <div class="a">
        <div class="left">
            <p>New Drug</p>
            <hr>
            <form action="" method="post">
                <div>
                <div class="two">
                    <label for="">Drug Name</label>
                    <input type="text" name="dname" class="in1">
                </div>
                <div class="two">
                    <label for="">Drug short Name</label>
                    <input type="text" name="dsname" class="in1">
                </div>
            </div>
                <input type="submit" class="sub" value="REGISTER" name="submit" style=" width: 110px;">
            </form>
        </div>
        <div class="drug">
            <h2>Drug Lists</h2>
            <hr>
            <div class="tb">
                <table class="table">
                    <thead>
                    <tr>
                    <th>Ro. No</th>
                    <th>Drug Name</th>
                    <th>Drug Short Name</th>
                    <th>Action</th>
                </tr></thead>
                <tbody>
            <?php
               $count=mysqli_num_rows($select);
               $rn=1;
               if($count>0){
                while($row=mysqli_fetch_assoc($select)){
                    echo "
                   <tr>
                    <td>".$rn."</td>
                    <td>".$row['dname']."</td>
                    <td>".$row['dsname']."</td>
                    <td><a href='drug_name.php?id=".$row['ID']."' style='color: red;'  ><i class='fa-solid fa-trash' id='dtrash' title='delete'></i></a></td>
                </tr>
                    ";
                    $rn++;
                }
               }
            ?>
                
                </tbody>
                </table></div>
        </div>
    </div>
    </div>
</body>
</html>