<html>
<head>
    <meta charset="utf-8">
        <title>newmember</title>
</head>
<?php 
  include('style.html'); 
  
  ?> 
<body>       
 <div class="content"> 
     <div class="m-b-md" > 
        <form name="form2" class="note" action="addmember.php" method="post" enctype="multipart/form-data">
            <!-- <label for="file">文件名：</label> -->
                會員姓名:
                <input type="text" name="name" maxlength="20" size="20" ><br>                
                登入帳號:
                <input type="text" name="account" maxlength="20" size="20"><br>
                登入密碼:
                <input type="text" name="password" maxlength="20" size="20"><br>  
                會員電話:
                <input type="text" name="tel" maxlength="20" size="20"><br>          
                會員地址:
                <input type="text" name="address" maxlength="20" size="20"><br> 
                會員照片:     
                <input type="file" name="gif" id="file"><br>
                <style> 
                        input {padding:5px 15px; background:#ffcccc; border:0 none; 
                        cursor:pointer; 
                        -webkit-border-radius: 5px; 
                        border-radius: 5px; } 
                    </style> 

                <input type="submit" name="submit" value="提交">
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
        </form>
</div>
</div>

</body>
</html>