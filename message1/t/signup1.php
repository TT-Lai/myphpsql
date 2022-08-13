<?php 
header("Content-Type: text/html; charset=utf8"); 
  if (isset($_POST['submit'])) { 
  include ('db.php'); 
  include('style.html');
  $name = $_POST['name']; 
  $password = $_POST['password']; 
  if ($name && $password) { 
    $sql = "select * from user where name = '$name' and password='$password'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_num_rows($result); 
 
    if ($rows) { 
      echo '<div class="success" >welcome! </div>'; 
      echo  
      "<script> 
      setTimeout(function(){window.location.href='view.php?name=" . $name . "';},3600); 
      </script>";       
      exit; 
    } 
    else
     { 
      echo '<div class="warning">Wrong Username or Password!</div>'; 
    } 
  } 
  else 
  {  
    echo '<div class="warning">Incompleted form!</div>'; 
    echo '<script>setTimeout(function(){window.location.href="index.php";},2000); </script>'; 
  } 
  $conn->close(); 
 
}  
?> 
 