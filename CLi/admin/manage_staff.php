<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from staff");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"delete from staff where ID='$id'");
    if($delete){
        echo "<script type='text/javascript'>alert('seccussfult Deleted');</script>";
        echo "<script type='text/javascript'>document.location='manage_staff.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('something wrong');</script>";
        echo "<script type='text/javascript'>document.location='manage_staff.php';</script>";
    }
  }
  if(isset($_POST['btn'])){
    $search=$_POST['search'];
    $select=mysqli_query($conn,"select *from staff where User_id='$search'");
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../bootstrap.css">
      <style type="text/css">
          body{
            background: lightgray;
          }
      </style>
</head>
<body>
     <div class="doctor">
        <div class="doc1">
            <h1>staff portal</h1>
            <p>staff > manage staff</p>
        </div>
        
        <div class="t1"><form action="" method="post">
            <div class="s">
            <h3 id="h3">All staff</h3>
            <div class="search"><input type="search" class="ser" name="search"><button class="serc" name="btn">Search</button> </div>
        </div></form>
            <hr>
            <table class="table data-table">
                <thead>
                <tr>
                <th>Ro. No</th>
                <th>Profile</th>
                <th>NAME</th>
                <th>User_ID</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone </th>
                <th>Role</th>
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
                <td><img src='../images/no.jpg' alt='' height='30px' width='30px' style='border-radius: 40px;'></td>
                <td>".$row['Fname']." ".$row['Lname']."</td>
                <td>".$row['User_id']."</td>
                <td>".$row['email']."</td>
                <td>".$row['Address']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['role']."</td>
                <td style='display: flex;'><a href='edit_staff.php?id=".$row['ID']."' target='iframe'><i class='fa-solid fa-edit' id='dtrash' title='delete' style='color: blue;'></i></a><a href='manage_staff.php?id=".$row['ID']."'><i class='fa-solid fa-trash' id='dtrash' title='delete'></i></a></td>
            </tr>
                   ";
                   $rn++;
                
                   }
                }
                 ?>  
            
            </tbody>
            </table>
            
        </div>
        </div>
</body>
</html>