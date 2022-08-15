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
            <form name="form2" method="get" action="message.php">
                <p>會員登入:<br>
                輸入帳號:<input type="text" name="account" maxlength="20" size="20"><br>
                輸入密碼:<input type="password" name="password" maxlength="20" size="20">
                </p>
                <p>
                <input type="submit" value="登入">
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