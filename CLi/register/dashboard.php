<?php
  include('../conn.php');
  include('../session.php');
  $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
  $row=mysqli_fetch_assoc($select);

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
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)), url(../images/r2.jpg);
    position: absolute;
    background-position: center;
    background-size: cover;
}.r2{
    text-align: center;
    margin-top: 150px;
}.r2 h1{
    color: white;
    font-size: 40px;
    margin-bottom: 20px;
}.r2 p{
    color: white;
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
}@media(max-width: 700px)
{
    .dc1{
        width: 90%;
    }
    }
    </style>

</head>
<body>
    <div class="dr1">
        <div class="dc1">
        <p>Welcome back</p>
            <h2><?php echo $row['Fname']; echo " "; echo $row['Lname']; ?></h2>
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