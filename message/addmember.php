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
include('style.html'); 
$name = $_POST['name']; 
 $password = $_POST['password']; 
 $a=$_FILES["gif"]["tmp_name"];
if ($name && $password)//如果使用者名稱和密碼都不為空
  { 
    $sql = "select * from member where name = '$name'"; 
    $result = mysqli_query($conn, $sql); 
    $rows = mysqli_fetch_assoc($result); 
     if (!$rows)      //若這個username還未被使用過rows
      { 
       $sql = "INSERT INTO member(name, account, password, tel, address,gif,memdate) 
       values ('$_POST[name]', '$_POST[account]','$_POST[password]', '$_POST[tel]', '$_POST[address]','$a',sysdate())"; 
       move_uploaded_file($_FILES["gif"]["tmp_name"], "upload/" . $_FILES["gif"]["name"]);
        mysqli_query($conn, $sql); 
        if (!$result) 
       { 
        die('Error: ' . mysqli_error($conn)); 
      }
       else 
       { 
        echo '<div class="success">Sign up successfully !</div>'; 
        echo " 
        <script> 
        setTimeout(function(){window.location.href='message.php?name=" . $name . "';},2000); 
        </script>"; 
        } 
    } 
    else
     { //這個username已被使用 
      echo '<div class="warning">The Username has already been used !</div>'; 
      echo " 
        <script>        
        setTimeout(function(){window.location.href='newmember.php';},3000); 
        </script>"; 
    } 
  } 
else
{  
    echo '<div class="warning">Incompleted form! </div>'; //以下為javascript語法，註冊成功後會自動跳轉到登入頁面 
    echo " 
    <script> 
    setTimeout(function(){window.location.href='newmember.php';},2000); 
    </script>"; 
} 

 
mysqli_close($conn); 
?> 
<!--
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
?> -->