<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>managemessage</title>
</head>
<body>
    <?php
    if ($_SESSION['flag']='1')
    {echo 'welcom you to login ROOT<br>';
    echo "<a href =manage.php>back to the manager page</a>";
}
else{
    echo 'you are not ROOT';
    echo "<a href=index.php>back to the login page</a>";
    die();
}
    include('mydb.php');
    if ($_GET['del'])
     {
         $a=$_GET['del'];
         $s="delete from member where no=$a";
        mysqli_query($conn,$s);
       echo 'delete successfully:'.mysqli_affected_rows();
     }
    $sql="SELECT m1.id,m1.content,m2.name,m1.mdate FROM message m1 join member m2 on m1.name=m2.no";
    $result=mysqli_query($conn,$sql);
    echo '<br>you have totally'.mysqli_num_rows($result).'messages';
    if (!$_GET['order']){
        echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0>";
        echo "<tr bgcolor=#3366FF>
            <td>message number</td>
            <td>message content</td>
            <td>message member</td>
            <td>message date</td>
            <td>del</td>
            </tr>";}
    while ($row=mysqli_fetch_array($result)){
        echo "<tr bgcolor=#FF9900>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><a href=managemember.php?del=$row[0]>delete</a></td>
        </tr>";
    }

    
    echo "</table>";
    ?>
</body>
</html>