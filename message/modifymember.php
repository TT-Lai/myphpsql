
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<body>
    <form name="form1" method="post" action="addmember.php enctype="multipart/form-data">
    <?php
    include('mydb.php');
    session_start();
    $sql="select * from member where no=$_SESSION[no]";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
   
    ?>
    <p>Please modify your personal message: or <a href=index.php>
        back to the login page</a></p>
        <p>&nbsp;</p>
        <p>
            login account:
            <input type="text" name='id' maxlenth='20' size="20" value=<?php echo $row[id] ?>><br>
            login password:
            <input type="password" name="password" maxlength="20" size="20" value=<?php echo $row[password] ?>"><br>
            member name:
            <input type="text" name='name' maxlenth='20' size='20' value=<?php echo $row[name] ?>><br>
            member telephone:
            <input type="text" name='tel' maxlenth='20' size='20' value=<?php echo $row[tel] ?>><br>
            member address:
            <input type="text" name='address' maxlenth='20' size='20' value=<?php echo $row[addr] ?>><br>
            <input type="submit" value='modify'>
            <input type="reset">
</p>
</form>
</body>
</html>