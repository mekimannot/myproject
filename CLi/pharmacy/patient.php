<?php 
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from patient where status='4'");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $update=mysqli_query($conn,"update patient set status='4' where ID='$id' ");

  }

 ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
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
                        <th>Drug</th>
                        <th>Amount</th>
                        <th>Doctor Info</th>
                        <th>Phone</th>
                        <th>Status</th>
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
                    <td>".$row['User_id']."</td>
                    <td>".$row['Fname']." ".$row['Lname']."</td>
                    <td>".$row['drug']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['Description']."</td>
                    <td>".$row['phone']."</td>
                    <td><span style='color: green; font-size: 20px;'>Accepted</span></td>
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