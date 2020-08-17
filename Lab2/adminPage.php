<!DOCTYPE html>
 <html lang="en">
  <head>
   <meta charset="UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale="/>
   <title>AdminPage</title>
   <style>
    table, td, th{
     border:2px groove blue;
     }
    table{
     display: block;
     margin: 0 auto;
     width:30%;
    }
    .container{
     border:5px groove blue;
     background-color:lightblue;
     text-align:center;
     width: 30%;
     padding-bottom:30px;
     dispaly:block;
     margin: 0 auto;
    }
   </style>
  <script>
   function button(){
    location.replace("http://192.168.56.103/index.php");
       }
  </script>
  </head>
  <body>
   <div class="container">
    <h1>Welcome
 <?php
  $dbhandle = mysqli_connect("localhost", "root", "Assmuncher69!","Lab2");
  if(! $dbhandle){
   print("<br/>");
   print("<br/></h1></tbody></table></div><p>Could not connect to database</p>");
   print(mysqli_connect_error());
   print("</body></html>");
   die();
  }
  $sql2 ="SELECT Name from user";
  $result2 =mysqli_query($dbhandle,$sql2);

  $row2 = mysqli_fetch_row($result2);
  print($row2[0]);
  print("!");

  mysqli_close($dbhandle);
?>
    <br/>
    </h1>
    <table>
     <tbody>
               <tr>
       <th>Username</th>
       <th>Password</tr>
      <tr>
<?php
  $dbhandle = mysqli_connect("localhost", "root", "Assmuncher69!","Lab2");
  if(! $dbhandle){
   print("<br/>");
   print("</h1></tbody></table></div><p>Could not connect to database</p>");
   print(mysqli_connect_error());
   print("</body></html>");
   die();
  }
  $sql ="SELECT UserName,Password from user ORDER BY UserName";
  $result=mysqli_query($dbhandle,$sql);

  while($row = mysqli_fetch_row($result)){
   print("<tr><td>");
   print($row[0]);
   print("</td><td>");
   print($row[1]);
   print("</td></tr>");
  }
  mysqli_close($dbhandle);
?>
    </tbody>
   </table>
   <br/>
   <div>
    <button onclick="button()"id="logOff">Log Off</button>
   </div>
  </div>
 </body>
</html>


