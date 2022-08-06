<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>managemember</title>
</head>
<body>
    <?php
    include('mydb.php');
    if ($_GET['del'])
    {
        $a=$_GET['del'];
        $s="delete from member where no=$a";
        mysql_query($s);
        echo 'delete successfully:'.mysql_affected_rows();
    }
    $sql="SELECT * FROM member";
    $result=mysql_query($sql);
    echo '<br>total'.mysql_unm_rows($result).'member';
    if (!$_GET['ORDER']){
        echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0>";
        echo "<tr bgcolor=#004466>
            <td>member number</td>
            <td>member account</td>
            <td>member id</td>
            <td>member name</td>
            <td>member tel</td>
            <td>member address</td>
            <td>member photo</td>
            <td>delete</td>

    </tr>";}
    while ($row=mysql_fetch_array($result)){
        echo "<tr bgcolor=#220044>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td><a href=managemember.php?del=$row[0]>delete</a></td>
        </tr>";
    }

        


    
    echo "</table>";
    ?>
</body>
</html>