<?php 
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from drug_requist");
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
              body{
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)),url(../images/p2.jpg);
    background-size: cover;
    background-position: center;
              }
          </style>
    </head>
    <body>
        <div class="doctor">
            <div class="doc1">
               <h1>Drug Portal</h1>
               <p>Drug > All Requists</p>
            </div>
            <div class="t1">
                <h2>All Requists</h2>
                <hr>
                    <table class="table">
                        <thead>
                        <tr>
                        <th>Ro. No</th>
                        <th>Drug Name</th>
                        <th>Prescriper Name</th>
                        <th>Total Number</th>
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
                    <td>".$row['dname']."</td>
                    <td>".$row['prescriper_name']."</td>
                    <td></td>
                    <td>penging</td>
                
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