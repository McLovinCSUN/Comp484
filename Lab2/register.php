<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8"/>
  <meta name="ciewport" content="width=device-width, initial-scale="/>
  <title>Register</title>
  <style>
    .container{
      border:groove 5px blue;
      border-radius: 10px;
      width:30%;
      background:lightblue;
      display:block;
      margin:0 auto;
     }
     h2{
       color:red;
     }
    #div{
     padding-bottom:10px;
    }
  </style>
 </head>
 <?php
     $message="";
     $firstname=$_GET['firstname'];
     $username=$_GET['username'];
     $password=$_GET['password'];
     if(count($_GET)>0){
       $conn=mysqli_connect("localhost","root","Assmuncher69!","Lab2");
       $result=mysqli_query($conn,"SELECT * FROM user WHERE UserName='$username'");
       $count=mysqli_num_rows($result);
       if($count==0){
        $insert="INSERT INTO user (UserName, Password, Name) VALUES ('$username','$password','$firstname')";
        $added=mysqli_query($conn,$insert);
        if($added){
         $message="<h2>Registered Successfully</h2>";
        }
       }else{
        $message="<h2>Username already exist!</h2>";
       }
     }
      mysqli_close($conn);
    ?>
 <body>
  <div class="container">
   <form method="GET" action="#">
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
      <tr>
         <td align="center" clospan="2"><h1>Register</h1></td>
      </tr>
      <div class="message" align="center"><?php if($message!=""){echo $message;}?>
      <tr>
         <td>
          Please enter your first name<br/>
           <input type="text" name="firstname" placeholder="First Name" required pattern="[A-Za-z]+">
         </td>
      </tr>
      <tr>
         <td>
          Please enter a username <i>(letters and numbers only, 8 char min)</i><br/>                    <input type="text" name="username" placeholder="Username" minlength="8" required pattern="[A-Za-z0-9]+">
          </td>
      </tr>
      <tr>
         <td>
          Please enter a password <i>(must be 9 digits long)</i><br/>
          <input type="password" name="password" placeholder="Password" minlength="9" maxlength="9" required pattern="[0-9]+">
          <div id="password" class="failMessage"></div>
         </td>
      </tr>
      <tr>
         <td align="center">
          <button type="submit" id="submit" align="center">Submit</button>
         </td>
      </tr>
     </table>
    </form>
   </div>
   <div id="div" class="container" align="center">
<p>Once done please click here to return to login page<br/>&#128071;</p>
     <button type="button" id="logout" onclick="logOut()">LogOut</button>
   </div>
   <script>
      function logOut(){
      window.open("http://192.168.56.103/index.php","_self");
   }
  </script>
  </body>
</html>


