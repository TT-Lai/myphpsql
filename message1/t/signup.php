<?php 
header("Content-Type: text/html; charset=utf8"); 
include ('db.php');
if (isset($_POST['submit'])) {  
  include ('db.php'); 
  $name = $_POST['name']; 
  $password = $_POST['password']; 
  if ($name && $password) { 
    $sql = "select * from user where name = '$name'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_num_rows($result); 
    if (!$rows) { //若這個username還未被使用過
       $sql = "insert user(id,username,password) values (null,'$name','$password')"; 
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
        setTimeout(function(){window.location.href='signup.php';},1000); 
        </script>"; 
    } 
  } 
  else
   {  
    echo '<div class="warning">Incompleted form! </div>'; 
//以下為javascript語法，註冊成功後會自動跳轉到登入頁面 
    echo " 
    <script> 
    setTimeout(function(){window.location.href='login.php';},2000); 
    </script>"; 
  } 
} 
 
mysqli_close($conn); 
?> 