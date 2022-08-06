<?php
include('mydb.php');


$sql = "INSERT INTO message (name, content, mdate)
VALUES('$_POST[no]', '$_POST[message]',sysdate())";

echo $sql;

 $result=mysqli_query($conn, $sql);//执行某个针对数据库的查询。
 if (mysqli_affected_rows($conn))//返回前一次 MySQL 操作所影响的记录行数。mysqli_affected_rows(connection);
      echo 'add successfully<br>';
    
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



