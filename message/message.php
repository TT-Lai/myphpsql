<?php
include('mydb.php');
$sql="select * from member where account='$_GET[account]' and password='$_GET[password]'";

$result=mysqli_query($conn, $sql);//执行某个针对数据库的查询。
if (!$row=mysqli_fetch_array($result))//从结果集中取得一行作为关联数组，或数字数组，或二者兼有。
{
    echo 'login failured<br>';
    echo "<a href =index.php>back to the login page</a>";
    die();
}
?>

<!-- mysqli_query($con,"SELECT * FROM websites");
mysqli_query($con,"INSERT INTO websites (name, url, alexa, country)
VALUES ('百度','https://www.baidu.com/','4','CN')"); -->
<!-- mysqli_fetch_array(result,resulttype);
mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有。
resulttype	可选。规定应该产生哪种类型的数组。可以是以下值中的一个：
MYSQLI_ASSOC
MYSQLI_NUM
MYSQLI_BOTH -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
</head>
<body>
    <?php echo "How are you" .$row['name'] . 'Please,Leave the message'?>
    <form name="form2" method="post" action="addmessage.php">
    message content:
    <textarea name="message" rows="10" cols="60"></textarea>
    <input type="hidden" name="no" value=<?php echo "$row[no]";?>>
    <input type="submit" vlaue="send">
    <input type="reset" value="rewrite"></form>
</body>
</html>