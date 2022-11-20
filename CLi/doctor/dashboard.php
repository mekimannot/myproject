
<?php
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $row=mysqli_fetch_assoc($select);
  $select1=mysqli_query($conn,"select *from patient where status='1' or status='5' and doctor='$session_id'");
  $n1=mysqli_num_rows($select1);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}body{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)), url(../images/d1.jpg);
    position: absolute;
    background-position: center;
    background-size: cover;
}.r2{
    text-align: center;
    margin-top: 150px;
}.r2 h1{
    color: black;
    font-size: 40px;
    margin-bottom: 20px;
}.r2 p{
    color: black;
}.dr1{
    display: block;
}.dc1{
    width: 97%;
    margin-top: 30px;
    border-radius: 10px;
    margin-left: 20px;
    margin-right: 20px;
    height: 80px;
    background-color: white;
    text-align: center;
    padding-top: 10px;

}.dc1 p{
    margin-bottom: 10px;
}@media(max-width: 700px){
    .dc1{
        width: 90%;
    }
    }.note1{
        text-align: left;
        margin-top:  15px;
        width: 40px;
        height: 40px;
        margin-left: 10px;
        background-color: green;
        float: left;
        text-align: center;
        border-radius: 30px;
    }.note2{
        text-align: right;
        margin-top:  -40px;
        width: 40px;
        height: 40px;
        margin-right: 10px;
        background-color: green;
        float: right;
        text-align: center;
        border-radius: 30px;

    }.note1 p{
        padding-top: 10px;
        color: white;
    }.note2 p{
        padding-top: 10px;
        color: white;
    }.h2{
        float: left;
        padding-top: 23px;
        margin-left: 10px;
        color: gainsboro;
    }.h3{
        float: right;
        color: gainsboro;
        margin-right: 60px;
        margin-top: -30px;
    }
    </style>

</head>
<body>
    <div class="dr1">
        <div class="dc1">
            <?php
               if($n1>0){
                echo "
                  <div class='note1'><p><marquee scrollamount='5' scrolldelay='5'>".$n1."</marquee></p></div>
                  <h3 class='h2'>new patient</h3>
            <div style='padding-right: 180px;'>
                ";

               }
            ?>        <p>Welcome back</p>
        <h2><?php echo $row['Fname']; echo " "; echo $row['Lname']; ?></h2>
        <?php
               if($n1>0){
                echo "</div>
        <div class='note2'><p><marquee scrollamount='5' scrolldelay='5'>".$n1."</marquee></p></div>
        <h3 class='h3'>new patient</h3>
        ";
               }
            ?>
            
        </div>
    <div class="r2">
        <h1>THE MOST VALUABLE</h1> 
        <h1>THING IS YOUR HEALTH</h1>
        <p>We care about your health Even the all-powerful Pointing no control about the</p>
        <p>Blind texts it is an almost unorthographic life</p>
    </div>
</div>
</body>
</html>