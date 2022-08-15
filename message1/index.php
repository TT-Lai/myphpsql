<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<?php 
include('style.html'); 
?> 
<body> 
     <div class="flex-center position-ref full-height"> 
                <div class="top-right home"> 
                        <a href="view.php?name=$_GET['name']">View</a> 
                        <a href="index.php">Login</a> 
                        <a href="register.php">Register</a> 
                </div> 
      <div class="content"> 
                <div class="m-b-md">                     
                    <form name="login" action="index.php" method="post"> 
                        <p>Username : <input type=text name="name"></p> 
                        <p>Password : <input type=password name="password"></p> 
                        <p><input type="submit" name="submit" value="Log in"> 
                    <style> 
                        input {padding:5px 15px; background:#ccc; border:0 none; 
                        cursor:pointer; 
                        -webkit-border-radius: 5px; 
                        border-radius: 5px; } 
                    </style> 
                        <input type="reset" name="Reset" value="Reset"> 
                    <style> 
                        input { 
                            padding:5px 15px; 
                            background:#FFCCCC;                             
                            border:0 none;f 
                            cursor:pointer; 
                            -webkit-border-radius: 5px; 
                            border-radius: 5px; 
                            font-family: 'Nunito', sans-serif; 
                            font-size: 19px; 
                        } 
                    </style> 
                    </form> 
                </div> 
 
</body> 
</html> 
<?php 
    if (isset($_POST['submit']))
{ 
    include 'db.php'; 
    $name = $_POST['name']; 
    $password = $_POST['password']; 
   
    if ($name && $password) //如果使用者名稱和密碼都不為空   
    {      
    $sql = "select * from user where name = '$name' and password='$password'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_num_rows($result); 
    if ($rows)
    {
      echo '<div class="sucess">welcome! </div>'; 
      echo " 
      <script> 
      setTimeout(function(){window.location.href='view.php?name=" . $name . "';},2600); 
      </script>";       
     
    } 
    else 
    { 
      echo '<div class="warning">Wrong Username or Password!</div>'; 
      echo " 
      <script> 
      setTimeout(function(){window.location.href='index.php?name=" . $name . "';},2600); 
      </script>";    
    } 
  } 
  else
   { 
 
    echo '<div class="warning">Incompleted form! </div>'; 
    echo " 
            <script> 
            setTimeout(function(){window.location.href='index.php';},2000); 
            </script>"; 
  } 
  mysqli_close($conn); 
 
}
?> 
 