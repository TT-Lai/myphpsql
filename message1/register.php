<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
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
                    <form name="signup" action="register.php" method="post"> 
                        <p>Username : <input type=text name="name"></p> 
                        <p>Password : <input type=password name="password"></p> 
                        <p><input type="submit" name="submit" value="Sign up"> 
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
                            border:0 none; 
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

include ('db.php');
if (isset($_POST['submit'])) 
{  
  $name = $_POST['name']; 
  $password = $_POST['password']; 
  if ($name && $password)//如果使用者名稱和密碼都不為空
  { 
    $sql = "select * from user where name = '$name'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_fetch_assoc($result); 
     if (!$rows)      
      { //若這個username還未被使用過rows
       $sql = "INSERT INTO user(id,name,password) values (null,'$name','$password')"; 
        mysqli_query($conn, $sql); 
        if (!$result) 
       { 
        die('Error: ' . mysqli_error($conn)); 
      }
       else 
       { 
        echo '<div class="success">Sign up successfully !</div>'; 
        echo " 
        <script> 
        setTimeout(function(){window.location.href='view.php?name=" . $name . "';},2000); 
        </script>"; 
        } 
    } 
    else
     { //這個username已被使用 
      echo '<div class="warning">The Username has already been used !</div>'; 
      echo " 
        <script>        
        setTimeout(function(){window.location.href='register.php';},6000); 
        </script>"; 
    } 
  } 
  else
   {  
    echo '<div class="warning">Incompleted form! </div>'; //以下為javascript語法，註冊成功後會自動跳轉到登入頁面 
    echo " 
    <script> 
    setTimeout(function(){window.location.href='index.php';},2000); 
    </script>"; 
  } 
} 
 
mysqli_close($conn); 
?> 