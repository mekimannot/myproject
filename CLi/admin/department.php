<?php
  include('../session.php');
  include('../conn.php');
  if(isset($_POST['submit'])){
    $depart=$_POST['depart'];
    $dsname=$_POST['sdepart'];
    $insert=mysqli_query($conn,"insert into department(Dname,Dsname) values('$depart','$dsname')");
    if($insert){
        echo "<script type='text/javascript'>alert('seccussfult added');</script>";
        echo "<script type='text/javascript'>document.location='department.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='department.php';</script>";
    }

  }$select=mysqli_query($conn,"select *from department");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"delete from department where ID='$id'");
    if($delete){
        echo "<script type='text/javascript'>alert('seccussfult Deleted');</script>";
        echo "<script type='text/javascript'>document.location='department.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='department.php';</script>";
    }
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link rel="stylesheet" href="styl.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../bootstrap.css">
      <style type="text/css">
          body{
            background: lightgrey;
          }.form-group{
            margin-left: 10px;
            margin-top: 13px;
          }
      </style>


</head>
<body>
   <div class="doctor">
    <div class="doc1">
        <h1>Department portal</h1>
        <p>Department > Add Department</p>
    </div>
    <div class="dep2">
        <div class="dep3">
            <h3>New Department</h3>
            <hr>
            <form action="" method="post">
                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input type="text" name="depart" class="form-control">
                </div></div></div>
                <div class="row">                
                    <div class="col-md-12">
                <div class="form-group">
                    <label for="">Department Short name</label>
                    <input type="text" name="sdepart" class="form-control">
                </div></div></div>

                <input type="submit" class="submit btn btn-primary" value="REGISTER" name="submit">
            </form>
        </div>
        <div class="dep4">
            <h3>Department Lists</h3>
            <hr>
            <div class="t1">
                <table class="table">
                    <thead>
                    <tr>
                    <th>Ro. No</th>
                    <th>Department Name</th>
                    <th>Shor Name</th>
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
                    <td>".$row['Dname']."</td>
                    <td>".$row['Dsname']."</td>
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