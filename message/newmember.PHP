<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form name="form2" action="addmember.php" method="post" enctype="multipart/form-data">
    <!-- <label for="file">文件名：</label> -->
        會員姓名:
        <input type="text" name="name" maxlength="20" size="20"><br>
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
    <input type="submit" name="submit" value="提交">
</form>

</body>
</html>