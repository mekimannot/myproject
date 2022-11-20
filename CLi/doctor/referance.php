
<?php
  include('../conn.php');
  include('../session.php');
  $user_id=$_SESSION['user_id'];
  $select=mysqli_query($conn,"select *from patient where ID='$user_id'");
  $row=mysqli_fetch_assoc($select);
  if(isset($_POST['submit'])){
    $text=$_POST['text'];
    $update=mysqli_query($conn,"update patient set Description='$text' where ID='$user_id'");
    if($update){
        echo "<script>alert('Seccussfuly updated');</script>";
        echo "<script>document.location='referance.php'</script>";
    }else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>document.location='referance.php'</script>";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Management System</title>
    <link rel="stylesheet" type="text/css" href="st.css">
    <style type="text/css">
        .ref_container{
            background: white;
            padding: 100px;
        }.date{

        }.top{
            display: grid;
        }.title{
            border-bottom: 1px solid black;
        }.bottom{
            display: grid;
        }
    </style>
</head>
<body>
     <div class="ref_container" id="div_print">
        <div class="top">
         <div class="date" style="display: flex;margin-left: 75%;"><p>ቀን </p><p style=" margin-left: 10px;"> <span style="border-bottom: 1px dashed black;">10/12/2022</span></p></div>
         <h2><span class="title">ለወራቤ ኮምፕሬንሄስቭ ስፔስሻላዝድ ሆስፒታል</span></h2>
         <h2><span style="border-bottom:  1px solid black;">ወራቤ</span></h2>
         <h3 style="margin-left: 20%;">ጉዳይ:- <span style="border-bottom: 1px solid black;">የዱቤ ህክምና ይመለከታል</span></h3>
         <p>በወራቤ ዩንቨርሲቲ በ <span style="border-bottom: 1px dashed black;">ወራቤ</span> ኮሌጅ <span style="border-bottom: 1px dashed black;">ኮምቢውተር</span> ዲፓርትመንት በአይድ ቁጥር <span style="border-bottom: 1px dashed black;">WRU/2121/12</span> የሚማር /የምትማር ተማሪ <span style="border-bottom: 1px dashed black;">መኪ ኤርመና</span> ከሆስፒታላችሁ ጋር በ 30/04/2010 ዓ.ም በገባነው ውል መሰረት የህክምና አገልግሎት እንዲያገኝ /እንድታገኝ መላካችን እየገልፅን ለተለመደው ትብብራቹሁ ምስጋናችን በመስቀደም ነው።</p>
         <p style="margin-top: 70px; margin-bottom: 70px;">የላከው በላሙያ ስም..........................................ፍርማ.........................</p>
</div><div class="bottom">
         <div class="date" style="display: flex;margin-left: 75%;"><p>ቀን </p><p style=" margin-left: 10px;"><span style="border-bottom: 1px dashed black;">10/12/2022</span> </p></div>
         <h2><span class="title">ለወራቤ ኮምፕሬንሄቭ ስፔስሻላዝድ ሆስፒታል</span></h2>
         <h2><span style="border-bottom:  1px solid black;">ወራቤ</span></h2>
         <h3 style="margin-left: 20%;">ጉዳይ:- <span style="border-bottom: 1px solid black;">የዱቤ ህክምና ይመለከታል</span></h3>
         <p>በወራቤ ዩንቨርሲቲ በ <span style="border-bottom: 1px dashed black;">ወራቤ</span> ኮሌጅ <span style="border-bottom: 1px dashed black;">ኮምቢውተር</span> ዲፓርትመንት በአይድ ቁጥር <span style="border-bottom: 1px dashed black;">WRU/2121/12</span> የሚማር /የምትማር ተማሪ <span style="border-bottom: 1px dashed black;">መኪ ኤርመና</span> ከሆስፒታላችሁ ጋር በ 30/04/2010 ዓ.ም በገባነው ውል መሰረት የህክምና አገልግሎት እንዲያገኝ /እንድታገኝ መላካችን እየገልፅን ለተለመደው ትብብራቹሁ ምስጋናችን በመስቀደም ነው።</p>
         <p style="margin-top: 70px; margin-bottom: 70px;">የላከው በላሙያ ስም..........................................ፍርማ.........................</p>
</div>
     </div>
<input onclick="print()" type="submit" class="sub" value="Print" id="hide">
     <script type="text/javascript">
         function print(){
            var div_content=document.getElementById("div_print").innerHTML;
            var a=window.open('','','height=1000, width=1000');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(div_content);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
         }
     </script>
</body>
</html>
