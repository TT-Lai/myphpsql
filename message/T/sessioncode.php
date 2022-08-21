<?php
session_start(); 
  if ($_GET['account'])
  {$_SESSION['account']=$_GET['account'];
  $_SESSION['password']=$_GET['password'];
  }
  $sql="select * from member where account='$_SESSION[account]' and password='$_SESSION[password]'";
  $_SESSION['account']=$account=$_GET['account'];//登入者
   $_SESSION['password']=$password=$_GET['password'];//登入者
   $result=mysqli_query($conn, $sql);//执行某个针对数据库的查询。留言者

   echo '<div class="content"> ';
   if (!$row=mysqli_fetch_array($result))//擷取留言者
   {
      echo 'Login Failured<br>';
      echo "<a href =index.php>Back to the login page</a>";
      die();
   }