<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message</title>
</head>
<?php 
  include ('style.html'); 
  $name = @$_GET['name']; 
  $no = @$_GET['no']; 
  
  ?> 

 <body> 
       <div class="flex-center position-ref full-height"> 
                  <div class="top-right home"> 
                          <a href='view.php?name=" . $name . "&no=" . $no . "'>View</a> 
                          <a href="index.php">Login</a> 
                          <a href="register.php">Register</a> 
                    </div>
        
  
  <?php 
    include ('db.php'); 
    include ('style.html');
    $query = "SELECT * FROM guestbook WHERE  no=" .@$_GET['no']; //選出該位使用者所留下的所有留言
    $result = mysqli_query($conn, $query); 
    $no =@$_GET['no']; 
    while (@$rs = mysqli_fetch_array($result)){
        echo "<div class='content'> ";
        echo "<div class='m-b-md'>";
        echo "<form name='form1' action='edit.php' method='post'> ";
        echo "<input type='hidden' name='no' value='$rs[no]'>";
        echo "<input type='hidden' name='name' value='$rs[name]'>";
        echo "<p>SUBJECT</p>";
        echo "<input type='text' name='subject' value='$rs[subject]'>";
        echo "<p>CONTENT</p> ";
        echo "<textarea style= 'font-family: Nunito, sans-serif; 
        font-size:20px; width:550px; height:100px; background:#FFCCCC';
         name='content'>$rs[content]</textarea>"; 
        echo "<br>";       
    }
    ?> 
                          <p><input type="submit" name="submit" value="SAVE"> 
                      <style> 
                          input {padding:5px 15px; background:#ffcccc; border:0 none; 
                          cursor:pointer; 
                          -webkit-border-radius: 5px; 
                          border-radius: 5px; } 
                      </style> 
                          <input type="reset" name="Reset" value="REWRITE"> 
                      <style> 
                          input { 
                              padding:5px 20px; 
                              background:#FFCCCC; 
                              border:0 none;                              
                              cursor:pointer; 
                              -webkit-border-radius: 5px; 
                              border-radius: 5px; 
                              font-family: Nunito, sans-serif; 
                              font-size: 19px; 
                          } 
                      </style> 
                      </form> 
            </div>
            <?php
            include('db.php'); 
              if (isset($_POST['submit'])) 
              {  
                $no = $_POST['no']; 
                $name = $_POST['name']; 
                $subject = $_POST['subject']; 
                $content = $_POST['content']; 
              
                $sql = "UPDATE guestbook SET subject='$subject', content='$content' where no='$no'"; 
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
                else 
                { 
                echo '<p><div class="success">Click <strong>SAVE</strong> when you\'re done.</div>'; 
                } 

              ?>
        </div>
                       
       <br>
      
        
                                 
  </body> 
  </html> 

 