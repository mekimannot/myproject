<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from patient where status='4'");
  if(isset($_POST['btn'])){
    $search=$_POST['search'];
    $select=mysqli_query($conn,"select *from student where Student_id='$search' and status='4'");
  }
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"delete from student where ID='$id'");
    if($delete){
        echo "<script type='text/javascript'>alert('seccussfult Deleted');</script>";
        echo "<script type='text/javascript'>document.location='manage_staff.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='manage_staff.php';</script>";
    }
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../bootstrap.css">
      <style type="text/css">
          body{
            background: lightgrey;
          }
      </style>
</head>
<body>
     <div class="doctor">
        <div class="doc1">
            <h1>Student portal</h1>
            <p>Student > manage Student<p>
        </div>
        
        <div class="t1">
         <form action="" method="post">
            <div class="s">
            <h3 id="h3">All Student</h3>
            <div class="search"><input type="search" class="ser" name="search"><button class="serc" name="btn">Search</button> </div>
        </div></form>
            <hr><div class="pb-400">
            <table class="data-table table stripe hover nowrap" style="font-size: 14px;">
                <thead>
                <tr>
                <th>Student ID </th>
                <th>Profile</th>
                <th>Full NAME</th>
                <th>Department</th>
                <th>Address</th>
                <th>Phone </th>
                <th>Drug</th>
                <th>number of drug</th>
                <th>Registration Date</th>
                <th>Price</th>
            </tr></thead>
            <tbody>
                <?php
                $count=mysqli_num_rows($select);
                if($count>0){
                   while($row=mysqli_fetch_assoc($select)){
                    echo "
                 <tr>
                <td>".$row['User_id']."</td>
                <td><img src='../images/no.jpg' alt='' id='img' style='border-radius: 40px;'></td>
                <td>".$row['Fname']." ".$row['Lname']."</td>
                <td>".$row['Department']."</td>
                <td>".$row['Address']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['drug']."</td>
                <td>".$row['amount']."</td>
                <td>".$row['registration_date']."</td>
                <td>".$row['price']."</td>
            </tr>
                   ";
                
                   }
                }
                 ?>  
            
            </tbody>
            </table></div>
            
        </div>
        </div>
</body>
</html>