
<?php
  include('../conn.php');
  include('../session.php');
  $status="2";
  $select=mysqli_query($conn,"select *from patient where status='$status' or status='4'");
  if(isset($_POST['btn'])){
    $search=$_POST['search'];
    $select=mysqli_query($conn,"select *from patient where User_id='$search' and (status='$status' or status='4') ");
  }

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="st.css">
    </head>
    <body>
        <div class="doctor">
            <div class="doc1">
               <h1>Patient status</h1>
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
                        <th>Drug</th>
                        <th>Amount</th>
                        <th>Descriiption</th>
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
            <td>".$row['Department']."</td>
            <td>".$row['drug']."</td>
            <td>".$row['amount']."</td>
            <td>".$row['Description']."</td>
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