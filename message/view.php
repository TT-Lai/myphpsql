<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All messages</title>
</head>
   <?php 
 
   include ('style.html'); 
   $account = $_GET['account'];
  
  ?> 
  <body> 
    <div class="flex-center position-ref full-height"> 
    <div class="top-right home"> 
        <?php 
        if (!$account)
        { 
            echo '<a href="index.php">Log in</a>'; 
        } 
        else
        { 
            echo "<a href='modifymessage_id.php?account=".$account. "'>Write some messages</a>";
            echo '<a href="index.php">Log out</a>'; 
        }
        ?> 
   </div>    
   </div> 
  <div class="note full-height"> 
  <?php 

  //session_start();
  include ("mydb.php");
  $sql = "select * from message";
  $result = mysqli_query($conn, $sql); 
  $_SESSION['account'] = $name = $_GET['account']; //登入者名稱
   while ($row = mysqli_fetch_assoc($result)) //從資料庫中撈留言紀錄並顯示出來
   { 
    echo "<br>Visitor Account:" . $row['account']; //留言者名稱
    echo "<br>Subject:" . $row['subject']; 
    echo "<br>Content:" . nl2br($row['content']) . "<br>"; 
     if ($account == $row['account']) {  //若登入者名稱和留言者名稱一致，顯示出編輯和刪除的連結
       echo '  
      <a href=" modifymessage_id.php?id=' . $row['id'] . '&account=' . $account . '">Edit message content</a>
      &nbsp|&nbsp
      <a href="delete.php?id=' . $row['id'] . '">Delete the message</a><br>';
          }
    echo "Time:" . $row['mdate'] . "<br>";
    echo "<hr>"; 
   
  } 
  echo "<br>"; 
  echo '<div class="bottom left position-abs content">'; 
  echo "There are " . mysqli_num_rows($result) . " messages."; 
  ?> 
  </div>
</body> 
  </html>
