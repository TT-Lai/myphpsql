<?php
include('mydb.php');
include('style.html'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='content'>
    <form name="form2" method="POST" action="addmessage.php">
    <p>message content:</p>
    <textarea name="message" rows="10" cols="60"></textarea>
    <input type="hidden" name="account" value=<?php echo "$row[account]";?>>
    <br>
    <input type="submit" name="submit" vlaue="send">
    <input type="reset" name="reset" value="rewrite"></form>
</div>
    
</body>
</html>
<!--  <?php
            include('mydb.php'); 
            if (isset($_POST['submit'] ) )
            {  
              $account = $_POST['account']; 
              $content = $_POST['content'];                           
              $sql = "INSERT INTO message (account, content, mdate) VALUES ('$account', '$content',sysdate());"; 
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
                    {window.location.href='message.php?id=" . $id . "&account=" . $account . "';},200); 
                    </script> ";
                 //setTimeout(要执行的代码, 等待的毫秒数)
                 //setTimeout(JavaScript 函数, 等待的毫秒数)
              } 
            }
              else 
              { 
              echo '<p><div class="success">Click <strong>SAVE</strong> When you\'re done.</div>'; 
              }  

            ?> -->
