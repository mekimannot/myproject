<?php
  include('../session.php');
  include('../conn.php');
  if(isset($_POST['submit'])){
    $depart=$_POST['depart'];
    $dsname=$_POST['sdepart'];
    $insert=mysqli_query($conn,"insert into measurement(mname,munit) values('$depart','$dsname')");
    if($insert){
        echo "<script type='text/javascript'>alert('seccussfult added');</script>";
        echo "<script type='text/javascript'>document.location='mesurement.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='mesurement.php';</script>";
    }

  }$select=mysqli_query($conn,"select *from measurement");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"delete from measurement where ID='$id'");
    if($delete){
        echo "<script type='text/javascript'>alert('seccussfult Deleted');</script>";
        echo "<script type='text/javascript'>document.location='mesurement.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='measurement.php';</script>";
    }
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">


</head>
<body>
   <div class="doctor">
    <div class="doc1">
        <h1>Measurement portal</h1>
        <p>Measurement ></p>
    </div>
    <div class="dep2">
        <div class="dep3">
            <h3>New Measurement</h3>
            <hr>
            <form action="" method="post">
                <div class="two">
                    <label for="">Measurement Name</label>
                    <input type="text" name="depart" class="in">
                </div>
                <div class="two">
                    <label for="">Measurement unit</label>
                    <input type="text" name="sdepart" class="in">
                </div>
                <input type="submit" class="submit" value="REGISTER" name="submit">
            </form>
        </div>
        <div class="dep4">
            <h3>Measurement Lists</h3>
            <hr>
            <div class="t1">
                <table class="table">
                    <thead>
                    <tr>
                    <th>Ro. No</th>
                    <th>Measurement</th>
                    <th>measurement unit</th>
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
                    <td>".$row['mname']."</td>
                    <td>".$row['munit']."</td>
                    <td><a href='department.php?id=".$row['ID']."'   ><i class='fa-solid fa-trash' id='dtrash' title='delete'></i></a></td>
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