<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteMessage</title>
</head>

<body>
<div class='content1'>
    <?php
    include('mydb.php');
    include('style.html'); 
    $sql="SELECT * FROM message";
    $result=mysqli_query($conn,$sql);
    echo '<br>Total'.mysqli_num_rows($result).'Messages';
    if ($result){
        echo "<table width=70% border=2 align=center cellpadding=0 cellspacing=0 >";
        echo "<tr bgcolor=#004466 style='color:#FFFFFF' align=center font-weight:600>
            <td> ID</td>
            <td> Account</td>
            <td> Content</td>
            <td> Mdate</td>
            <td>Del</td>
            <td>Modify</td>
            </tr>";}
    while ($row=mysqli_fetch_array($result)){
        echo "<tr bgcolor=#FFA500 class='form2'>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td><a href=manager_age.php?del=$row[0]>Delete</a></td>
        <td><a href=modifymessage_id.php?id=$row[0]>Modify</a></td>
        </tr>";
    }

    
    echo "</table>";
    ?>
</div>
</body>
</html>
<?php
echo "<div class='content1'>";
    if (isset ($_GET['del']))
    {
        $a=$_GET['del'];
        $s="delete from message where id=$a";
       mysqli_query($conn,$s);
   
      echo 'Delete Successfully:'.mysqli_affected_rows($conn);
    }
    mysqli_close($conn); 

    ?>