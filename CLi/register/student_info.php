<?php  
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from student");
  if(isset($_POST['btn'])){
    $student_id=$_POST['search'];
    $select=mysqli_query($conn,"select *from student where Student_id='$student_id'");
  }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ar1">
        <div class="ac1">
           <h2>Patient status</h2>
           <p>Patient info > </p>
        </div>
        <div class="rc1">
            <form action="" method="post"> 
            <div class="se">
            <h2>Patient Information</h2>
            <div class="search">
                <input type="search" name="search" class="sr">
                <button class="btn5" name="btn">Search</button>
            </div>
        </div></form>
            <hr>
                <table class="table">
                    <thead>
                    <tr>
                    <th>Ro. No</th>
                    <th>User  ID</th>
                    <th>Full Name</th>
                    <th>department</th>
                    <th>Phone Number</th>
                    <th>Address</th>
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
        <td>".$row['Student_id']."</td>
        <td>".$row['Fname']." ".$row['Lname']."</td>
        <td>".$row['Department']."</td>
        <td>".$row['Phone']."</td>
        <td>".$row['Address']."</td>
        <td><a href='add_patient.php?id=".$row['Student_id']."' id='td'>select</a></td>
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