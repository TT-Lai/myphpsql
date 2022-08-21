<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
<div class='content1'>
    <?php
    include('mydb.php');
    include('style.html'); 
        if ($_GET['del'])
     {
         $a=$_GET['del'];
         $s="delete from message where id=$a";
        mysqli_query($conn,$s);
    
       echo 'Delete Successfully:'.mysqli_affected_rows($conn);
     }
    $sql="SELECT m1.id,m1.content,m2.name,m1.mdate FROM message m1 join member m2 on m1.account=m2.account";
    $result=mysqli_query($conn,$sql);
    echo '<br>Total'.mysqli_num_rows($result).'Messages';
    if ($_GET['del']){
        echo "<table width=70% border=2 align=center cellpadding=0 cellspacing=0 >";
        echo "<tr bgcolor=#004466 style='color:#FFFFFF' align=center font-weight:600>
            <td>message number</td>
            <td>message content</td>
            <td>message member</td>
            <td>message date</td>
            <td>del</td>
            </tr>";}
    while ($row=mysqli_fetch_array($result)){
        echo "<tr bgcolor=#FFA500 class='form2'>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><a href=managemember.php?del=$row[0]>delete</a></td>
        </tr>";
    }

    
    echo "</table>";
    ?>
</div>
</body>
</html>