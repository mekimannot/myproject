<?php 
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from drug_requist where status='1'");
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
                        <th>Single price</th>
                        <th>Total price</th>
                        <th>Product date</th>
                        <th>Pxpired date</th>
                        <th>Status</th>
                    </tr></thead>
                    <tbody>
                    <?php  
                    $rn=1;
                    $count=mysqli_num_rows($select);
                    if($count>0){
                      while($row=mysqli_fetch_assoc($select)){
                    if($row['approvale']=="yes"){
                        $single_price=$row['single_price'];
                        $total_number=$row['total_number'];
                        $total_price=$single_price*$total_number;
                        echo "
                    <tr>
                    <td>".$rn."</td>
                    <td>".$row['dname']."</td>
                    <td>".$row['prescriper_name']."</td>
                    <td>".$total_number."</td>
                    <td>".$single_price."</td>
                    <td>".$total_price."</td>
                    <td>".$row['product_date']."</td>
                    <td>".$row['expired_date']."</td>
                    <td style='color: green;'>Approved</td></tr>";
                    }else{
                        echo "
                    <tr>
                    <td>".$rn."</td>
                    <td>".$row['dname']."</td>
                    <td>".$row['prescriper_name']."</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td style='color: red;'>Rejected</td></tr>";
                    }
                    
                                    
                   

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