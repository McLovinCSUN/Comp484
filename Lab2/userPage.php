<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content=width=device-width, initial-scale=1.0"/>
  <title>UserPage&#128190;</title>
  <style>
   .container{
     border:groove 5px blue;
     border-radius:10px;
     width:30%;
     background:lightblue;
     display: block;
     margin: 0 auto;
    }
    h1{
     text-align:center;
    }
   div{
     text-align:center;
     display: block;
     margin: 0 auto;
     padding-bottom:10px;
   }
  </style>
  <script>
    function color(){
        document.getElementsByTagName("BODY")[0].style.backgroundColor="#FA697C";
    }
     function logout(){
       location.replace("http://192.168.56.103/index.php");
     }
 </script>
</head>
<body>
<div class="container">
<?php
  $name=$_REQUEST["username"];
  $dbhandle =mysqli_connect("localhost","root","Assmuncher69!","Lab2");
  if(! $dbhandle){
    print(mysqli_connect_error());
  }
  $sql="SELECT Name from user WHERE UserName='$name'";
  $result=mysqli_query($dbhandle,$sql);
  $row=mysqli_fetch_row($result);
  print("<h1>Welcome $row[0]!</h1>");
  mysqli_close($dbhandle);
?>
<div>
   <button id="color" onclick="color()">Change Color</button>
   <button id="logOut" onclick="logout()">LogOut</button>
 </div>
</div>
 </body>
</html>
