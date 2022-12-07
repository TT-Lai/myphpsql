<?php
  //  require_once 'login.php';
   // $conn=new mysqli($hn,$un,$pw,$db);
   // if ($conn->connect_error) 
    //die("Fatal Error");
   
$servername = "localhost";
$username = "root";
$password = "72340aikido";
$dbname = "message";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接

        // if(!$conn) {
        //         echo "MySQL 伺服器連結失敗";}
        // else {
        //         echo "MySQL 伺服器連結成功"; }
        // mysqli_close($conn);

     if ($conn->connect_error) {
         die("connection失败: " . $conn->connect_error);
    } 
     
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql) === TRUE) {
//    echo "数据库创建成功";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
 
//$conn->close();


//if ( ! mysql_connect("localhost","root","72340aikido"))
//    die("無法連線資料庫伺服器,請聯絡系統管理員");
//    mysql_query("SET NAMES utf8");
//if ( ! mysql_select_db('message'))
//    die("無法使用資料庫");
    // ?php

    //         $db_link = mysqli_connect(“localhost”, “root”, “12345678”);

    //         if(!$db_link) {

    //                 echo “MySQL 伺服器連結失敗”;}

    //         else {

    //                 echo “MySQL 伺服器連結成功”; }

    //         mysqli_close($db_link);

    // 
?>