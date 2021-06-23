<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
   <style>
   *{margin:0;}

      h3 {
            width:350px; 
            height:60px;
            border-left:10px solid #333333;
            line-height:60px;
            font-size:20px;
            text-indent:10px;

         }        
      #content{
               width:350px; 
               height:106px; 
               background:#ffffff;
               border-top:2px dashed #333333;               
               border-bottom:2px dashed #333333;               
            }
      #content ul li{list-style:square; line-height:50px;}
      #close{
               width:350px; 
               height:50px; 
               background:#ffffff; 
               cursor:pointer;
               position:relative;
            
            }
      #close>p{text-align:center; line-height:40px; border-radius:20px; width:150px; height:40px; font-weight:bold; color:#ffffff; background:rgba(157,74,247,1) 100%; position:absolute; left:100px; top:5px;}

   </style>
</head>

<body>
   <div id="header"></div>
   <h3>아이디 중복체크</h3>
   <div id="content">
      <ul>
<?php
   define('DBuser','aze624');
   define('DBpass','ay2111!!');
   define('DBname','aze624');
   
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

 
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
    
      mysqli_close($con);
   }
?>
      </ul>
   </div>
   <div id="close" onclick="javascript:self.close()"><p>닫기</p></div>
   <div id="bottom"></div> 
</body>
</html>