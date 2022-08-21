<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<?php 
 
  include('style.html'); 
  include('mydb.php');
  if ($_GET['account'])
  {$account=$_GET['account'];
  $password=$_GET['password'];
  } 
  if ($account && $password)//如果使用者名稱和密碼都不為空
  { 
    $sql = "select * from member where account = '$account'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_fetch_assoc($result); 
  }
  ?> 
<body>
    <form name="form1" method="post" action="addmember.php" enctype= "multipart/form-data">

     <div class="content"> 
     <div class="m-b-md" > 
            <p>Please modify your personal message: or <a href=index.php>Back to the login page</a></p>
            <p>&nbsp;</p>
            <p>
            login name:
            <input type="text" name='name' maxlenth='20' size="20" value=<?php echo $rows[name] ?>><br>
            login account:
            <input type="text" name="account" maxlength="20" size="20" value=<?php echo $rows[account] ?>><br>
            member password:
            <input type="password" name='password' maxlenth='20' size='20' value=<?php echo $rows[password] ?>><br>
            member telephone:
            <input type="text" name='tel' maxlenth='20' size='20' value=<?php echo $rows[tel] ?>><br>
            member address:
            <input type="text" name='address' maxlenth='20' size='20' value=<?php echo $rows[addr] ?>><br>
            member photo:
            <input type="file" name="gif" id="file"><br>
            <input type="submit" value='modify'>
            <input type="reset">
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
</p>
</form>
</body>
</html>
<?php
            include('mydb.php'); 
              if (isset($_POST['submit'] ) )
              {  
                $no = $_POST['no']; 
                $name = $_POST['name']; 
                $subject = $_POST['subject']; 
                $content = $_POST['content']; 
              
                $sql = "UPDATE member SET subject='$subject', content='$content' where no='$no'"; 
                if (!mysqli_query($conn, $sql)) 
                { 
                  die(mysqli_error($conn)); 
                } 
                else 
                { 
                  echo 
                    " 
                      <script>
                    setTimeout(function()
                      {window.location.href='view.php?name=" . $name . "&no=" . $no . "';},200); 
                      </script> ";
                   //setTimeout(要执行的代码, 等待的毫秒数)
                   //setTimeout(JavaScript 函数, 等待的毫秒数)
                } 
              }
 









