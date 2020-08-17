<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <style>
    .container{
     border:groove 5px blue;
     border-radius:10px;
     width:30%;
     background: lightblue;
     display:block;
     margin: 0 auto;
    }
   h2{
    color: red;
   }
  #div {
   padding-bottom:10px;
  }
 </style>
<?php
 $message="";
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(count($_POST)>0){
   $conn=mysqli_connect("localhost","root","Assmuncher69!","Lab2");
   $result=mysqli_query($conn,"SELECT * FROM user WHERE UserName='$username' AND Password='$password'");
    if($count==0){
     $message="<h2>Invalid username or password!</h2>";
   }else{
     if($username == "adminUser"){
      header("Location:adminPage.php");
     }else{
      $newLocation="http://192.168.56.103/userPage.php?username=$username";
      header("Location:$newLocation");
     }
   }
  }
?>
 </head>
 <body>
  <div class="container">
   <form name="frmUser" method="post" action="">
    <div class="message" align="center"><?php if($message!=""){echo $message;}?></div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
      <tr>
       <td align="center" colspan="2"><h1>Login Page</h1></td>
      </tr>
      <tr>
      <td>
       Username:<br/>
       <input type="text" name="username" placeholder="Username" required>
      </td>
     </tr>
     <tr>
     </td>
     </tr>
     <tr>
      <td>
       Password:<br/>
       <input type="password" name="password" minlength="9" maxlength="9" placeholder="Password" required>
      </td>
     </tr>
     <tr>
      <td align="center" colspan="2">
       <input type="submit" name="submit" value="Submit">
      </td>
     </tr>
   </table>
  </form>
  </div>
  <div class="container" id="div" align="center">
   <p>If you would like to create an account<br/>Click here<br/>&#128071;</p>
   <button onclick="register()">Register</button>
  </div>
  <script>
  function register(){
    window.open("http://192.168.56.103/register.php","_self");
   }
 </script>
 </body>
</html>