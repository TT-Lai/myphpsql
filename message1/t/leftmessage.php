<?php 
 //送出留言後會執行下面這段程式碼 
   if (isset($_POST['submit'])) 
     { 
     include("db.php"); 
     echo '<div class="success">Added successfully !</div>'; 
     $name = $_POST['name']; 
     $subject = $_POST['subject']; 
     $content = $_POST['content']; 
     $sql = "INSERT guestbook(name, subject, content, time) VALUES ('$name', '$subject', '$content', now())"; 
     if (!mysqli_query($conn, $sql)) 
     { 
       die(mysqli_error($conn)); 
     }
      else 
      { 
       //若成功將留言存進資料庫，會自動跳轉到顯示留言的頁面 
       echo " 
          <script> 
         setTimeout(function(){window.location.href='view.php?name=" . $name . "';},500); 
          </script>"; 
    
        } 
        } 
     else 
     { 
     echo '<div class="success">Click <strong>Send</strong> when you\'re done.</div>'; 
   } 
   ?> 