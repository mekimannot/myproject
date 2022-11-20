<?php 
   include('../conn.php');
   include('../session.php');
   $_SESSION['user_id']=$_GET['id'];



 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .r1{
            display: flex;
            width: 100%;
            height: 92vh;
            

        }.c1{
    background-image: linear-gradient(rgba(7, 35, 3, 0.8),rgba(71, 71, 14, 0.8)),url(../images/p1.jpg);
    background-size: cover;
    background-position: center;
            margin-left: 20px;
            width: 31%;
            height: 92vh;
            text-align: center;
            border-radius: 10px;
        }.c2{
            background-image: linear-gradient(rgba(19, 100, 3, 0.2),rgba(71, 71, 14, 0.8)),url(../images/l1.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            margin-left: 20px;
            width: 31%;
            height: 92vh;
            border-radius: 10px;
            background-color: seagreen;
        }.c3{
            background-image: linear-gradient(rgba(7, 35, 3, 0.7),rgba(71, 71, 14, 0.8)),url(../images/d2.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            margin-left: 20px;
            width: 31%;
            height: 92vh;
            border-radius: 10px;
            background-color: seagreen;
        }
        .c1 a{
            text-decoration: none;
            color: white;
            text-align: center;
	        position: relative;
	        z-index: 1;
        }.c2 a{
            text-decoration: none;
            color: white;
            text-align: center;
	        position: relative;
	        z-index: 1;
        }.c3 a{
            text-decoration: none;
            color: white;
            text-align: center;
	        position: relative;
	        z-index: 1;
        }
        .c2 a p{
            margin-top: 60%;
            border: 1px solid blue;
            width: 100px;
            margin-left: 30%;
            padding: 9px 30px;
            background-color:blue;
	        position: relative;
	        z-index: 1;

        }.c1 a p{
            margin-top: 60%;
            border: 1px solid mediumseagreen;
            width: 100px;
            padding: 9px 30px;
            margin-left: 30%;
            background-color:mediumseagreen;
	        position: relative;
	        z-index: 1; 
        }.c3 a p{
            margin-top: 60%;
            border: 1px solid red;
            width: 100px;
            padding: 9px 30px;
            margin-left: 30%;
            background-color: red;
	        position: relative;
	        z-index: 1; 
        }
.c2  a p span{
	width: 0%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
	z-index: -1;
	transition: 0.5s;
}
.c2 a p:hover span{
	width: 100%;
}.c2 a p:hover{
	color: #000;
}.c3  a p span{
	width: 0%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
	z-index: -1;
	transition: 0.5s;
}
.c3 a p:hover span{
	width: 100%;
}.c3 a p:hover{
	color: #000;
}.c1  a p span{
	width: 0%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
	z-index: -1;
	transition: 0.5s;
}
.c1 a p:hover span{
	width: 100%;
}.c1 a p:hover{
	color: #000;
}@media(max-width: 700px){
    .r1{
        display: block;
    }.c1{
        width: 90%;
        margin-top: 10px;
        padding-top: 40%;
        height: 50vh;
        margin-bottom: 10px;
    }.c2{
        width: 90%;
        padding-top: 40%;
        height: 50vh;
        margin-bottom: 10px;
    }.c3{
        width: 90%;
        padding-top: 40%;
        height: 50vh;       
        margin-bottom: 10px;    
    }.c2 a p{
            margin-top: 15%;
            border: 1px solid blue;
            width: 100px;
            margin-left: 30%;
            padding: 9px 30px;
            background-color:blue;
            position: relative;
            z-index: 1;

        }.c1 a p{
            margin-top: 15%;
            border: 1px solid mediumseagreen;
            width: 100px;
            padding: 9px 30px;
            margin-left: 30%;
            background-color:mediumseagreen;
            position: relative;
            z-index: 1; 
        }.c3 a p{
            margin-top: 15%;
            border: 1px solid red;
            width: 100px;
            padding: 9px 30px;
            margin-left: 30%;
            background-color: red;
            position: relative;
            z-index: 1; 
        }
}
    </style>
</head>
<body>
    <div class="r1">
        <div class="c1">
            <a href="ph.php" target="iframe"><p><span></span>Pharmacy</p></a>
        </div>
        <div class="c2">
            <a href="lab.php" target="iframe"><p><span></span> Labratory</p></a>
        </div>
        <div class="c3">
            <a href="referance.php" target="iframe"><p><span></span> Referance</p></a>
        </div>
    </div>
</body>
</html>