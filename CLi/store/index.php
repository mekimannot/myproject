<?php 
   
   include('../conn.php');
   include('../session.php');
   $select=mysqli_query($conn,"select *from staff where ID='$session_id'");
   $row=mysqli_fetch_assoc($select);
/*

            <div class="sub-menu-1">
               <ul>
                  <?php
                  if($count>0){
                     while($row=mysqli_fetch_assoc($select1)){
                        echo "
                  <li><a href='med.php?dsname=".$row['dsname']."' target='frame'>".$row['dname']."</a></li>
                        ";
                     }
                  } 
                  ?>
               </ul>
            </div>*/
            if(!isset($_SERVER['HTTP_REFERER'])){
   header('../403.php');
   exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Werabe University Clinic System</title>
   <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/3012035e7a.js" crossorigin="anonymous"></script>
      <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
      <link href="../fontawesome/css/brands.css" rel="stylesheet">
      <link href="../fontawesome/css/solid.css" rel="stylesheet">
  
</head>
<body style="overflow: hidden;">
   <a >
   <div class="index_box"  >
      <div class="nav_left" id="index_box" style="">
         <div style="display: flex">
         <img src="../images/w.jpg" width="30px" height="34px" id="im">
         <i class='fa-solid fa-arrow-left ii' onclick="hideMenu()" class="an_profile"></i>
      </div><hr>
         <div class="nav_all">
         <ul>
            <li><i class='fa-solid fa-house' id="an_right"></i><a href="dashboard.php" target="iframe" onclick="hideMenu()">Home</a></li> 
            <li><i class='fa-solid fa-tablet' id="an_right"></i><a href="new_requist.php" target="iframe" onclick="hideMenu()">New Requist</a></li>
            <li><i class='fa-solid fa-tablet' id="an_right"></i><a href="all_requist.php" target="iframe" onclick="hideMenu()">All Requist</a></li>
            
        
      </ul></div>
      </div>
      <div class="nav_right">
         <div class="nav_top">
            <i class='fa-solid fa-bars' id="bar" onclick="showmenu()" ></i>
            <div class="nav_top_right">
               <img src="../images/no.jpg" class="profile" id="photo"></li>
               <a onclick="profile_left()"><?php echo $row['Fname']; echo " "; echo $row['Lname']; ?><i class='fa-solid fa-angle-right' id="profile_right"></i></a>
             <div class="profile_left" id="profile" style="display: none; font-size: 14px;">
                <a onclick="bb()" href="profile.php" target="iframe"><i class='fa-solid fa-user' id="an_right"></i>Profile</a>
                <a onclick="bb()" href="password.php" target="iframe"><i class='fa-solid fa-key' id="an_right"></i>Reset Password</a>
                <a href="../logout.php"><i class='fa-solid fa-lock' id="an_right"></i>Logout</a>
             </div>
            </div>
         </div>
            <iframe src="dashboard.php" name="iframe" class="iframe" onclick="bb()"></iframe>
      </div>
   </div></a>
   <script type="text/javascript">

         var state=false;
         var state1=false;
         var state2=false;
      function g(){
         state=!state

         if(state===true){
            document.getElementById("sub-menu-2").style.display="block";
            document.getElementById("an_down").style.display="block";
             document.getElementById("an_rightt").style.display="none";
             document.getElementById("an_righttt").style.top="64%";
            document.getElementById("sub-menu-3").style.display="none";
             document.getElementById("an_downn").style.display="none";
             document.getElementById("an_righttt").style.display="flex";
         }else{
            document.getElementById("sub-menu-2").style.display="none";
             document.getElementById("an_down").style.display="none";
             document.getElementById("an_rightt").style.display="flex";
             document.getElementById("an_righttt").style.top="48%";
         }
      }
      function g1(){
         state2=!state2

         if(state2===true){
            document.getElementById("sub-menu-2").style.display="none";
             document.getElementById("an_down").style.display="none";
             document.getElementById("an_rightt").style.display="flex";
            document.getElementById("sub-menu-3").style.display="block";
            document.getElementById("an_downn").style.display="block";
             document.getElementById("an_righttt").style.display="none";
             document.getElementById("an_righttt").style.top="48%";

         }else{
            document.getElementById("sub-menu-3").style.display="none";
             document.getElementById("an_downn").style.display="none";
             document.getElementById("an_righttt").style.top="48%";
             document.getElementById("an_righttt").style.display="flex";
         }
      }
      function profile_left(){
         state1=!state1;
         if(state1===true){
            document.getElementById("profile").style.display="grid"
         }else{            
            document.getElementById("profile").style.display="none"
         }
      }
      function bb(){  
            document.getElementById("profile").style.display="none"    
         }
   var index_box = document.getElementById("index_box");
   function showmenu(){
      index_box.style.left="0";
   }
   function hideMenu(){
      index_box.style.left ="-300px";
   }
     </script>
</body>
</html>