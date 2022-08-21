<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add successfully</title>
</head>
<?php 
  include('style.html'); 
  $name = $_POST['account']; 
  ?> 
 <body> 
       <div class="flex-center position-ref "> 
                  <div class="top-right home">                           
                          <a href="index.php">Logout</a>                           
                  </div> 
        </div> 
                 

<?php
include('mydb.php');
include('style.html');

if ($_POST['account'])
{
$sql = "INSERT INTO message (account, content, mdate)
VALUES('$_POST[account]', '$_POST[message]',sysdate())";

$result=mysqli_query($conn, $sql);//执行某个针对数据库的查询。
}
mysqli_query($conn,"SELECT * FROM message where account='$name'");
 if (mysqli_affected_rows($conn))//返回前一次 MySQL 操作所影响的记录行数。mysqli_affected_rows(connection);
 {  
    echo '<div class="content"> ';
   
    // echo "<div class='flex-center position-ref half-height'>" ;
        echo "<br>Add successfully";
        echo "<br>共有 " . mysqli_affected_rows($conn);
        echo "筆資料";        
    }
    echo "</div>";
    echo "<div class='content'>"; 
    $sql1="SELECT m1.id,m1.content,m2.name,m1.mdate FROM message m1 join member m2 on m1.account=m2.account where m2.account='$name'";
    $row=mysqli_query($conn,$sql1);
    echo '<br>You have totally'.mysqli_num_rows($row).'messages';
    echo "</div>";
    if ($name)
    {   
        echo "<table width=70% border=2 align=center cellpadding=0 cellspacing=0 >";
        echo "<tr bgcolor=#004466 style='color:#FFFFFF' align=center font-weight:600 >
            <td >message number</td>
            <td >message content</td>
            <td>message member</td>
            <td>message date</td>
            <td>ModifyMessage</td>
            </tr>";}
    while ($row1=mysqli_fetch_array($row))
    {
        echo "<tr bgcolor=#FFA500 class='form2'>
        <td>$row1[0]</td>
        <td>$row1[1]</td>
        <td>$row1[2]</td>
        <td>$row1[3]</td>
        <td><a href=modifymessage_id.php?id=$row1[0]>Modify</a></td>
        </tr>";
    }    
    echo "</table>";
    ?>
</body>
</html>




