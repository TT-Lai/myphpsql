
<?php
    $servername = "localhost";
    $username = "root";
    $password = "72340aikido";
    $dbname = "message";
     
    // 创建连接
    $conn = new mysqli($servername, $username, $password,$dbname);
     
    // 检测连接
    if ($conn->connect_error) {
        die("connection失败: " . $conn->connect_error);
    } 
    echo "connection成功";

    //  $upload_dir='./upload/';
    //  if ($_FILES["file"]["error"]>0)
    // {
    //      echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    // }
    // else
    // {
    //      echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    //     echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    //      echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //      echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
    // }
    //          if (file_exists("upload/" . $_FILES["file"]["name"]))
    //     {
    //         echo $_FILES["file"]["name"] . " 文件已经存在。 ";
    //      }
    //      else
    // {move_uploaded_file($_FILES["file"]["tmp_name"], 
    //  "upload_dir".$_FILES["file"]["name"]);
    //  echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];"上傳成功...";
    //  }
    $upload_dir='./upload/';
    move_uploaded_file($_FILES["gif"]["tmp_name"], $upload_dir . $_FILES["gif"]["name"]);
    $a=$_FILES["gif"]["name"];
    $sql="INSERT INTO member (name, account, password, tel, address, gif,memdate) 
    VALUES('$_POST[name]','$_POST[account]','$_POST[password]', '$_POST[tel]', '$_POST[address]','$a',sysdate())";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();

//name,id,password,tel,address , memdate    ,'$a',sysdate()
//'$_post[name]','$_post[id]','$_post[password]','$_post[tel]','$_post[address]',$a,sysdate()

    //$sql="insert into message (membername,id,password,tel,address,gif,memdate) 
    // values($_post['name'],
    // $_post["id"],
    // '$_post["password"]',
    // '$_post["tel"]',
    // '$_post["address"]',
    // '$a',
    // sysdate())";
    // echo $sql;
    // //$result=mysql_query($sql);
    // if (mysql_affected_rows()>=1)
    // echo "新增成功<br>";

    ?>
