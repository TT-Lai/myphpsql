<?php
$servername = "localhost";
$username = "root";
$password = "72340aikido";
$dbname = "message";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

// if ($_FILES["gif"]["error"] > 0)
// {
//     echo "错误：" . $_FILES["gif"]["error"] . "<br>";
// }
// else
// {
//     echo "上传文件名: " . $_FILES["gif"]["name"] . "<br>";
//     echo "文件类型: " . $_FILES["gif"]["type"] . "<br>";
//     echo "文件大小: " . ($_FILES["gif"]["size"] / 1024) . " kB<br>";
//     echo "文件临时存储的位置: " . $_FILES["gif"]["tmp_name"];
// }

$a=$_FILES["gif"]["tmp_name"];
$sql = "INSERT INTO member (name, account, password, tel, address,gif,memdate)
VALUES('$_POST[name]', '$_POST[account]','$_POST[password]', '$_POST[tel]', '$_POST[address]','$a',sysdate())";
move_uploaded_file($_FILES["gif"]["tmp_name"], "upload/" . $_FILES["gif"]["name"]);
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
    // $dest='upload/' .$_FILES['gif']['name'];
    // # 將檔案移至指定位置
    // move_uploaded_file($a, $dest);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>