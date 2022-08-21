
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
</head>
<?php 
include('style.html'); 
?> 
<body>
    
  
    <div class="flex-center position-ref half-height"> 
                  <div class="top-right home"> 
                    <a href="newmember.php">註冊</a>
                    </div>
        </div>
    <div class="content">
        <div class="m-b-md"> 
            <form name="form2" method="post" action="index.php">
                <p>會員登入:<br>
                輸入帳號:<input type="text" name="account" maxlength="20" size="20"><br>
                輸入密碼:<input type="password" name="password" maxlength="20" size="20">
                </p>
                <p>
                <input type="submit" name="submit" value="登入">
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
        </div>
</div>
</body>
</html>
<?php 

    if (isset($_POST['submit']))
{ 
    include 'mydb.php'; 
    $account = $_POST['account']; 
    $password = $_POST['password']; 
   
    if ($account && $password) //如果使用者名稱和密碼都不為空   
    {      
    $sql = "select * from member where account = '$account' and password='$password'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_num_rows($result); 
    if ($rows)
    {
      echo '<div class="success">Welcome! </div>'; 
      echo " 
      <script> 
      setTimeout(function(){window.location.href='message.php?account=" . $account . "&password=" . $password . "';},2600); 
      </script>";       
     
    } 
    else 
    { 
      echo '<div class="warning">Wrong Account or Password!</div>'; 
      echo " 
      <script> 
      setTimeout(function(){window.location.href='index.php?account=" . $account . "';},2600); 
      </script>";    
    } 
  } 
  else
   { 
 
    echo '<div class="warning">Incompleted Form! </div>'; 
    echo " 
            <script> 
            setTimeout(function(){window.location.href='index.php';},2000); 
            </script>"; 
  } 
  mysqli_close($conn); 
 
}
?> 
 