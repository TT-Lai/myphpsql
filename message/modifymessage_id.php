<?php

include('mydb.php');
include('style.html'); 
@$id = $_GET['id']
//$password = $_GET['password']; 


//echo '<br>You have totally'.mysqli_num_rows($row).'members';


              ?>

<html>
<head>
<meta charset="utf-8">
<title>newmember</title>
</head>
<body>

<?php 
  
  $query = "SELECT * FROM message WHERE  id=" .@$_GET['id']; //選出該位使用者所留下的所有留言
  $result = mysqli_query($conn, $query); 
  $id =@$_GET['id']; 
  while (@$rs = mysqli_fetch_array($result)){
      echo "<div class='content'> ";
      echo "<div class='m-b-md'>";
      echo "<form name='form1' action='modifymessage_id.php' method='post'> ";
      echo "<input type='hidden' name='id' value='$rs[id]'>";
      echo "<input type='hidden' name='account' value='$rs[account]'>";
      echo "<p>MessageNumber</p>";
      echo "<input type='text' name='subject' value='$rs[id]'>";
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
                        <input type="reset" name="reset" value="REWRITE"> 
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
          include('mydb.php'); 
            if (isset($_POST['submit'] ) )
            {  
              $id = $_POST['id']; 
              $account = $_POST['account']; 
              $content = $_POST['content']; 
            
            
              $sql = "UPDATE message SET id='$id', content='$content' where id='$id'"; 
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
                    {window.location.href='message-r.php?account=" . $account . "';},200); 
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


