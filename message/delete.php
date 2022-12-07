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