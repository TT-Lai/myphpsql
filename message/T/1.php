<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form name="form1" method="post" action="2.php" enctype="multipart/form-data">
    <p>請輸入會員的基本資料:</p>
    <p>
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

        <p>
        <input type="submit" value="新增">
        <input type="reset">
        </p>
        </form>
</body>
</html>