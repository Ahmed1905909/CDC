<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="cdc";


$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
  echo"Failed to connect with the DataBase";
}
?>

<link rel="stylesheet" href="css/Login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/CDC1c.css">
<header class="header">

  <a href="CDC1h.html" class="logo"> <i class="fa-light fa-teeth"></i> CDC MIU. </a>
</header>
<br>
<br>
<br>
<br>
<br>
<form method ="POST" action="">

  <div class="container"></div>    
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter your username" name="username" required>
<br>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
    <br>
    <input type="submit" name="submit" value="login">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <?php 
if(isset($_POST['submit']))
{
  $uname=$_POST['username'];
  $password= $_POST['password'];

  $sql="select * from user where Username = '".$uname."' AND Password='".$password."'";

  $result=$conn->query($sql);

  if(mysqli_num_rows($result)==1)
  {
    echo "<h1> login success </h1>";
    header("CDC1h.html");
    //echo "<form method="post" action="CDC1h.html">";
  }
  else{
    echo "<h1> incorrect login </h1>";
    header("Login.php");
    //echo "<form method="post" action="login.php">";
  }
}

?>
     
   


  <div class="container" style="background-color:#f1f1f1">
    <a href="CDC1h.html" class="cancelbtn">Cancel</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</html>
