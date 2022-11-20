<?php 
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from patient where status='1' and doctor='$session_id'");
 if(isset($_POST['phar'])){
    $_SESSION['user_id']=$_POST['id'];
        echo "<script>document.location='ph.php';</script>";
 }if(isset($_POST['lab'])){
    $_SESSION['user_id']=$_POST['id'];
        echo "<script>document.location='lab.php';</script>";
 }if(isset($_POST['ref'])){
    $_SESSION['user_id']=$_POST['id'];
        echo "<script>document.location='referance.php';</script>";
 }if(isset($_POST['no'])){
    $id=$_POST['id'];
    $delete=mysqli_query($conn,"delete from patient where ID='$id'");
        echo "<script>document.location='patient.php';</script>";
 }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sty.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../bootstrap.css">
      <style type="text/css">
              .where_to_go{
                width: 500px;
                height: 440px;
                background: lightgray;
                border-radius: 10px;
                display: none;
                position: absolute;
                top: 70px;
                left: 25%;
                padding: 10px;
              }.subb{
                margin-top: 30px;
                margin-left: 30%;
              }.subbb{
                margin-left: 55%;
                margin-top: -37px;
              }.row{
                margin-left: 40px;
                margin-top: 40px;
                width: 85%;
              }
          </style>
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
                    <th>Department</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>From</th>
                    <th>Take</th>
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
                    <td>".$row['age']."</td>
                    <td>".$row['phone']."</td>";
                    if($row['status']=='1'){
                            echo "<td style='color: blue;'>Registration</td>";
                        }else if($row['status']=='5'){
                        echo "<td style='color: blue;'>Labratory</td>";
                        }
                     echo "
                    
                    <td> <a onclick='showmenu()' target='iframe' id='td'>Send</a></td>
                </tr>

                  <div class='where_to_go' id='show'>
                      <form method='post'>
                        <div class='row'> 
                        <input type='text' name='id' style='display: none;' value=".$row['ID']."> 
                          <input type='submit' name='phar' value='To Pharmacy' class='btn btn-primary'></div>
                          <div class='row'><input type='submit' name='lab' value='To Lapratory' class='btn btn-primary'></div>
                          <div class='row'><input type='submit' name='ref' value='To Referance' class='btn btn-primary'></div>
                         <div class='row'> <input type='submit' name='no' value='No Where' class='btn btn-primary'></div>
                      
                      </form>
                  </div>
                        ";
                        $rn++;
                      }
                    }


                    ?>
                
                </tbody>
                </table>
        </div>
    </div>

         <script type="text/javascript">

         var state=false;
      function showmenu(){
         state=!state

         if(state===true){
            document.getElementById("show").style.display="block";
         }else{
            document.getElementById("show").style.display="none";
         }
      }
     </script>
</body>
</html>