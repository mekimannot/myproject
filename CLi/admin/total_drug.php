<?php
  include('../session.php');
  include('../conn.php');
  $select=mysqli_query($conn,"select *from drug");
  if(isset($_POST['btn'])){
    $search=$_POST['search'];
    $select=mysqli_query($conn,"select *from drug where Dname='$search'");
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage Drug</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
     <div class="doctor">
        <div class="doc1">
            <h1>Drug portal</h1>
            <p>Drug > manage Drug</p>
        </div>
        
        <div class="t1">
         <form action="" method="post">
            <div class="s">
            <h3 id="h3">All Drug</h3>
            <div class="search"><input type="search" class="ser" name="search"><button class="serc" name="btn">Search</button> </div>
        </div></form>
            <hr>
            <table class="table">
                        <thead>
                        <tr>
                        <td>Ro. No</td>
                        <td>Drug name</td>
                        <td>Total in number</td>
                        <td>Product Date</td>
                        <td>Expired Date</td>
                        <td>Price</td>
                        <td>Expired Status</td>
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
                        <td>".$row['total']."</td>
                        <td>".$row['Pdate']."</td>
                        <td>".$row['Edate']."</td>
                        <td>".$row['price']."</td>";
                        $date=date("Y-m-d");
                        if($row['Edate']>=$date){
                          echo "
                             <td style='color: green;'>not Expired</td>
                    </tr>
                          ";
                        }else{
                            echo "
                             <td style='color: red;'>Expired</td>                    
                             </tr>
                            ";
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