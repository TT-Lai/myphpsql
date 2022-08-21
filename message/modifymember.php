
<!-- // $query = "SELECT * FROM member WHERE account=$account";
// $result = mysqli_query($conn, $query);
// @$rs = mysqli_fetch_array($result);//從資料庫中撈留言紀錄並顯示出來


// if ($_GET['del'])
// {
//     $a=$_GET['del'];
//     $s="delete from member where no=$a";
// } -->



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
<?php

if (!isset($_GET["account"]))
{echo "not exist";}
else{
    echo $_GET['account'];
}

include('mydb.php');
include('style.html'); 
$account = $_GET['account']; 
//$password = $_GET['password']; 
?>
<body>
     <div class="flex-center position-ref half-height "> 
                <div class="top-right home"> 
                <?php 
                    if (!$account) 
                    { 
                        echo '<a href="index.php">Log in</a>'; 
                    } 
                    else
                    { 
                        echo "<a href='modify.php?account=".$account. "'>Write some messages</a>"; 
                        echo '<a href="message.php?password='.$password.'">Log out</a>'; 
                    }
                    ?> 
                                    
            </div>  
                </div>
    
    <div class="content"> 
    <div class="m-b-md">
    <p><strong> <?="How are you?"  . $account ?></strong></p>
    <br>                </div>                
   <?php
    $sql="SELECT * FROM member ";
    $result=mysqli_query($conn,$sql);
    echo '<br>You have totally'.mysqli_num_rows($result).'members';
    echo '</div>';

    if ($_GET['account'])
    {   
        echo "<table width=80% border=2 align=center cellpadding=0 cellspacing=0 >";
        echo "<tr bgcolor=#004466 style='color:#FFFFFF' align=center font-weight:600 >
            <td width=25px>NO</td>
            <td width=125px>Name</td>
            <td width=140px>Account</td>
            <td width=150px>PassWord</td>
            <td width=125px>Telephone</td>
            <td width=125px >Address</td>
            <td width=125px height=60>Photo</td>
            <td width=125px>Date</td>
            <td >Modify</td>
            </tr>";}
    while ($row=mysqli_fetch_array($result))
    {
        echo "<tr bgcolor=#FFA500 class='form2'>
        <td width=25px>$row[0]</td>
        <td width=125px>$row[1]</td>
        <td width=140px>$row[2]</td>
        <td width=150px>$row[3]</td>
        <td width=125px>$row[4]</td>
        <td width=200px>$row[5]</td>
        <td width=100px height=60 >$row[6]</td>
        <td width=50px>$row[7]</td>
        <td text-align:center width=50px><a href=modify.php?account=$row[2]>Modify</a></td>
        </tr>";
    }    
    echo "</table>";
    ?>
    <br>
    <div class='content'>
    <form name="form2" method="post" action="addmessage.php">
    <P>Please,Leave the message<P>
    <p>Message Content:</p>
    <textarea name="message" rows="10" cols="60"></textarea>
    <input type="hidden" name="account" value=<?php echo "$account ";?>>
    <input type="hidden" name="password" value=<?php echo "$password";?>>
    <br>
    <input type="submit"  vlaue="send">
    <input type="reset"  value="rewrite"></form>
</div>     
   
</body>
</html>

