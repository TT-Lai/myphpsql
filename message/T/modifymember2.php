<?php
include('mydb.php');
include('style.html'); 
$account = $_GET['account']; 
$password = $_GET['password']; 
 


// if ($_GET['del'])
// {
//     $a=$_GET['del'];
//     $s="delete from member where no=$a";
// }

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
     <div class="flex-center position-ref half-height "> 
                <div class="top-right home"> 
                        <a href="message.php?account=$_GET['account']">Message</a> 
                        <a href="index.php">Logout</a> 
                        <a href="modifymember1.php?account='.$_GET['account'].' & password='.$_GET['password'].'">modify message</a> 
                </div>
            </div>  
    <?php 
    echo '<div class="content"> ';
    //echo '<div class="m-b-md">'; 
    echo 'How are you? ' .$_GET['account']  ;
    echo "<br>";
   
    
    //$_SESSION['no']=$row[0];
    //echo 'session:'.$_SESSION['no'];
   
    ?>
    <?php
    $sql="SELECT * FROM member ";
    $result=mysqli_query($conn,$sql);
    echo '<br>You have totally'.mysqli_num_rows($result).'members';

    if ($_GET['account'])
    {   
        echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0 >";
        echo "<tr bgcolor=#004466 style='color:#FFFFFF' align=center font-weight:600 >
            <td width=25px>NO</td>
            <td width=125px>Name</td>
            <td width=140px>Account</td>
            <td width=150px>PassWord</td>
            <td width=125px>Telephone</td>
            <td width=125px >Address</td>
            <td width=125px height=60>Photo</td>
            <td width=125px>Date</td>
            <td >Update</td>
            </tr>";}
    while ($row=mysqli_fetch_array($result))
    {
        echo "<tr bgcolor=#FFA500 class='form2'>
        <form name='form2' method='post' action='modifymember2.php'>
        <td width=25px><input type='text' name='NO' placeholder='$row[0]'/></td>
        <td width=125px><input type='text' name='name' placeholder='$row[1]'/></td>
        <td width=140px><input type='text' name='account' placeholder='$row[2]'/></td>
        <td width=150px><input type='text' name='password' placeholder='$row[3]'/></td>
        <td width=125px><input type='text' name='telephone' placeholder='$row[4]'/></td>
        <td width=125px><input type='text' name='address' placeholder='$row[5]'/></td>
        <td width=125px><input type='text' name='gif' placeholder='$row[6]'/></td>
        <td width=125px>$row[7]</td>
        <td text-align:center>
            <a href=modifymember2.php?update=$row[0]>Update</a>
            <input type='submit'  vlaue='send'>
            <input type='reset'  value='rewrite'></form></td>
        </tr>";
    }    
    echo "</table>";
?>
</div>     
    
</body>
</html>

<?php
include('mydb.php');
if (isset($_POST['submit'])) 
 {
    $name = $_POST['name']; 
    $account = $_POST['account']; 
    $password = $_POST['password']; 
    $tel = $_POST['tel']; 
    $address = $_POST['address']; 
    $gif = $_POST['gif']; 
   
     $s="UPDATE member SET name='$name',account='$account',password='$password',tel='$tel', address='$address',memdate=sysdate() where no=$a";
    mysqli_query($conn,$s);
   echo 'Update successfully:'.mysqli_affected_rows();
 }
              ?>