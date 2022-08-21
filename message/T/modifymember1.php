<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<?php 
  include ('style.html'); 
  $account = $_GET['account']; 
  $password = $_GET['password']; 
  
  ?> 

 <body> 
       <div class="flex-center position-ref full-height"> 
                  <div class="top-right home"> 
                          <a href='manage.php?account=" . $account . "&password=" . $password . "'>Manage</a> 
                          <a href="index.php">Login</a> 
                          <a href='message.php?account=" . $account . "&password=" . $password . "'>Register</a> 
                    </div>
        
  
  <?php 
    include ('mydb.php'); 
    include ('style.html');
    $query = "SELECT * FROM member"; //選出該位使用者所留下的所有留言
    $result = mysqli_query($conn, $query);    
   
    while ($rs = mysqli_fetch_assoc($result))
    {
        echo "<div class='content'> ";
        echo "<div class='m-b-md'>";       
        echo "<form name='form1' action='modifymember.php' method='post'> ";
        
        echo "No:<input type='text' name='no' value='$rs[no]'><br>";
      
        echo "Name:<input type='text' name='name' value='$rs[name]'><br>";
       
        echo "Account:<input type='text' name='account' value='$rs[account]'><br>";
      
        echo "Password:<input type='text' name='password' value='$rs[password]'><br>";
       
        echo "Telephone:<input type='text' name='tel' value='$rs[tel]'><br>";
      
        echo "Address:<input type='text' name='address' value='$rs[address]'><br>";
       
        echo "Gif:<input type='text' name='gif' value='$rs[gif]'><br>";
     
        echo "Memdate:<input type='text' name='memdate' value='$rs[memdate]'><br>";

        echo "<input type='submit' name='submit' value='SAVE'> ";

        echo "<input type='reset' name='reset' value='REWRITE'> ";
       
        echo "<hr>";
        // echo "<textarea style= 'font-family: Nunito, sans-serif; 
        // font-size:20px; width:550px; height:100px; background:#FFCCCC';
        //  name='content'>$rs[content]</textarea>"; 
        echo "<br>";       
    }
    ?> 
                          
                      <style> 
                          input {padding:5px 15px; background:#ffcccc; border:0 none; 
                          cursor:pointer; 
                          -webkit-border-radius: 5px; 
                          border-radius: 5px; } 
                      </style> 
                          
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
                $name = $_POST['name']; 
                $account = $_POST['account']; 
                $password = $_POST['password']; 
                $tel = $_POST['tel']; 
                $address = $_POST['address']; 
                $gif = $_POST['gif']; 
              
                $sql = "UPDATE member SET name='$name',account='$account',password='$password',tel='$tel', address='$address' where name='$name'"; 
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
                      {window.location.href='view.php?name=" . $name . "&account=" . $account . "';},200); 
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
