<?php
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from patient where status='3'");

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styl.css">
        <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
          <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
          <link href="../fontawesome/css/brands.css" rel="stylesheet">
          <link href="../fontawesome/css/solid.css" rel="stylesheet">
    </head>
    <body>
        <div class="doctor">
            <div class="doc1">
               <h1>New Patient</h1>
               <p>Patient > </p>
            </div>
            <div class="t1">
                <h2>New Patient</h2>
                <hr>
                    <table class="table">
                        <thead>
                        <tr>
                        <th>Ro. No</th>
                        <th>Patient Id</th>
                        <th>Full Name</th>
                        <th>Doctor Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr></thead>
                    <tbody>
                      <?php
                       $count=mysqli_num_rows($select);
                       $rn=1;
                       if($count>0){
                        while($row=mysqli_fetch_assoc($select)){
                        $iii=$row['doctor'];
                        $s1=mysqli_query($conn,"select *from staff where ID='$iii'");
                        $r1=mysqli_fetch_assoc($s1);
                          echo "
                     <tr>
                        <td>".$rn."</td>
                        <td>".$row['User_id']."</td>
                        <td>".$row['Fname']." ".$row['Lname']."</td>
                    <td>Dr ".$r1['Fname']." ".$r1['Lname']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['phone']."</td>
                        <td> <a href='lab.php?id=".$row['ID']."' target='iframe' id='td'></i>View</a></td>
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