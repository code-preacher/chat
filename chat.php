<?php
$name=$_GET['uname'];
$pin=$_GET['pin'];

include"connect.php";

$find=mysqli_query($con,"SELECT * FROM reg WHERE uname='$name' and passkey='$pin'")   ;
$row=mysqli_num_rows($find)  ;
$fop=mysqli_fetch_array($find);
$picx=$fop['pix'];
if($row<1){  
   echo"  
<head>
<style>
body{
background:#f9f9f9;
color:white; padding: 0px;
}
#header1{
background:blue; height:100px; width:698px; margin:auto; border-radius:4px;
font-weight: bolder; padding:10px;  border:1px solid gray;
}
#header2{
background:#ccbbaa; color:white; height:40px; width:600px; padding:10px;
 margin:0px 0px 0px 27px ; border-radius:13px 10px 23px 44px; 
}
#body2{
background:white; color:blue; font-size:16; height:300px; width:680px;    border:1px solid gray;
margin:auto; border-radius:0px 0px 22px 22px; padding:17px;
}
a:link{text-decoration: none; color: white;}
a:hover{color:brown; border-radius:67px 78px 45px 90px; background-color:#f9f9f9; padding: 10px; height: 25px;}
a:active{color:white;}
li{
font-size:18;
font-family:trebuchet ms;
float:left;
padding:16px;
margin: -19px 24px 24px 15px; 
list-style: none outside none;
}
.footer{
background:#0F7ACC; height:30px; width:672px; margin:-25px 0px 0px -18px ; border-radius:1px 1px 30px 30px;
font-weight: bolder; padding:22px;
color: white;
}
.img{
margin:-13px 10px 20px -13px; padding:4px; 
}
.title{
background:black; 
margin: -80px 60px 60px 180px; padding:4px; width:500px;
font-weight:bolder; font-size:30; border-radius:50px 56px 53px 67px;
}
.titlebottom{
font-size:14;
margin: -65px 0px 60px 365px; 
}
.main{
margin :auto; height:70; width:40%;
}
.mainform{ 
font-family:trebuchet ms;
font-weight:bolder;
float:;
color:brown;
}
.sam2{
float:right; 
}
.input{
height:40px; color:; width:300px; font-family:trebuchet ms; font-size:16; border-radius:7px;
}
.fieldset{
height:118px;
width:600px;
border-radius:7px;
}
.submit{
background:#0F7ACC;
color:white;
font-size:18;
font-family:trebuchet ms;
font-weight:bolder; width:145px; height:38px;
}
.submit:hover{
background:white;
color:black;
font-size:20;
font-family:trebuchet ms;
font-weight:bolder;
}
</style>   </head><body>
<center> <img src=\"images/friendz2.png\" height=\"118\" width=\"717\" alternate=\"Logo\">
<div id=\"body2\">
<div id=\"header2\">
<ul><li>ERROR PAGE</li>
   <li></li>
   <li></li>
   <li></li>
   <li><a href=\"index.html\">Home</a></li>
  </ul>
</div>
<center>
<br><br>
<fieldset class=\"fieldset\">
<div class=\"mainform\"><br><br>
                                    
<center>Invalid Password or Username<br><br></center>  
</fieldset>
<br><br><br>



</div>

     

</div> </center> </body></html>
";    
    echo"<script>
  alert('Invalid Password or Username') ;
  window.location='index.html';
  
  
  </script>"; 
exit();
}

  echo"



<html>
<head>
<title>FRIENDZ_CHAT_FORUM</title>
<style type=\"text/css\"> 
     body{ background-color:#f9f9f9;}
   
   .submit{
background:#708090;
color:white;
font-size:18;        border-radius:25px;
font-family:trebuchet ms;
font-weight:bolder; width:145px; height:38px;
}
.submit:hover{
background:white;
color:black;
font-size:20;
font-family:trebuchet ms;
font-weight:bolder;
}
     #in{ height:30px; width: 20px;} 
.body2{background-color: #fffffd; width: 950px; height: 250px; }
.body3{background-color: #fffffd; width: auto; height: auto;  position:relative;
font-size:20; font-weight:soft; color:brown;  font-family:trebuchet ms;
} 
.head{background-color: #708090; width: 100%; height:50px; margin:-50px 0px 0px 0px;}
h1{ text-align:center; text-decoration:none; font-family:trebuchet ms; font-size:34; font-weight:lighter; color:white;}
#footer{font-size:18; font-weight:bolder; background-color: #000f0d; color:white; width: 100%; height:90px; margin:2000px 0px 0px -18px;}
.h3{margin:-30px 0px 0px 13px; color:black; position:fixed;}
a:link{text-decoration: none; color: blue;}
ul li a:hover{color:white; border-radius:90px 120px 70px 100px; background-color:#000000; padding: 10px; height:55px;}
ul li a:visited{color: white; }fieldset{border-color:transparent; border-radius:20px; height:1520; width:917; }
h2{ text-align:center; text-decoration:none; font-family:trebuchet ms; font-size:28; font-weight:lighter; color:white;}
.h2{margin:-63px 0px 0px 740px;}    
   
   
       .input{
height:auto; color:brown; width:auto; font-family:trebuchet ms; font-size:18; border-radius:7px; position:relative;
}
   #fam{ background:#000000; width:100%; height:auto; text-align:center; color:white; font-size:25px; font-weight:bolder;font-family: trebuchet ms;  }

</style>


     <script type='text/javascript'>
      <!--
      function oche(){
       var sam;
       if(confirm('Are you sure you want to logout......?')) {
        window.location='index.html';     }
        else{
         window.location='';     
        }

      }
         now= new Date();
/**document.write(\"Time: \" + now.getHours() + \":\" + now.getMinutes() + \"<br>\");
document.write(\"Date: \" + (now.getMonth() + 1) + \"/\" + now.getDate() +\"/\" +
(1900 + now.getYear()));**/
      //-->
      
      
      
      
     </script>
             
</head>
<body>




       <img src=\"images/friendz2.png\" width=\"100%\" height=\"150\"> <br><br><br>
 <div class=\"head\"><h1>FRIENDZ FORUM</h1><h2 class=\"h2\"><a href=\"index.html\" style=\"color:#ffffff\">HOME</a></h2> </div>
    <div class=\"body3\"> 
    
   ";
      
   
    echo"
   <div style=\"float: right; font-family:trebuchet ms;\"> Hello $name<a href='search.php?uname=$name&passkey=$pin'><img src=\"img/$picx\" width=\"80\" height=\"80\"></a><br>&nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;
  &nbsp;<a href='javascript:oche()'>logout</a></div> 
     ";
?> 
    
    




 <form action="" method="post" enctype="multipart/form-data">
    
    <br>
    
       <div align="center">
        <textarea name="chat" cols="70" rows="3" required="required" class="input"></textarea>


      
        <label>
        <input type="submit" name="comment"  value="Send" class="submit">
        </label>

</div>
    </form>  </html>
    <?php

 if(isset($_POST['comment'])) {
    $chat=$_POST['chat'];
    $date=date("d-m-y @ g:i A");

    
mysqli_query($con,"INSERT INTO chat(chat,name,pic,date) VALUES('$chat','$name','$picx','$date')");
 }
     
          ?>


<?php


 
    
 
  $seat=mysqli_query($con,"SELECT all *FROM chat order by ID_NO DESC ");
 while($row3=mysqli_fetch_array($seat)){
 $chat=$row3['chat'];    
  $name=$row3['name'];
  $pix=$row3['pic'];
 $date=$row3['date'];
   
   
   
      
 
   
       echo"<div style='width: auto; height: auto;  box-shadow:2px 10px 23px #888888;  background-color: #fff ; margin:auto; word-wrap:break-word;'>";
   
           echo"<div style='width:auto; height:auto ;  box-shadow:2px 10px 23px #888888;  background-color: #fff ; margin:auto; word-wrap:break-word;'>";
   
   
          echo"<table>
             <tr><td><img src=img/$pix width=90 height=75></td>
          
        <td>  $chat</td></tr></table>";
        echo"<hr>";
          echo"<div style='float:right; font-size:12px;'>$name &nbsp;&nbsp; $date</div>";
               
     echo"</div><br>"; echo" </div> "; 
 }
 
   echo"<br><br>";     
      echo"<br><br>";

      
 
   
?>
 
<br>   <br>  <br>  

  
   <div id="fam"> <br>Friendz Copyright &copy; &nbsp;<script>document.write((now.getYear() + 1900)) ;</script> by blessing<br><br></div>

   
   
    </body>
</html>