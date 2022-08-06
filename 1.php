<table width="200" border="1">
<?php
$i=1;
$a="*";
while ($i <=50){
        echo "
        <tr>
            <td bgcolor=#004466>$a</td>
        </tr>
        ";
        $a=$a."*";
        $i=$i+1;
}
echo "<br/>"
    ?>
<table width="10">
    <tr>
<?php
    $L=1;
    $b=array(1=>1,2,3,2,3,1,3,2,3,2,3,1);
    while($L<=12){
      if ($b[$L]==1)
      echo "<td bgcolor=#004466>1</td>";
      if ($b[$L]==2)
      echo "<td bgcolor=#0033FF>2</td>";
      if ($b[$L]==3)
      echo "<td bgcolor=#FF0000>3</td>";
      $L=$L+1;
    }
    ?>
    </tr>
</table>
$j=1;
$i=1;
<?php
    for($j=1;$j<=40;$j=$j+1){
      for($i=1;$i<=20;$i=$i+1){
        $a[$j][$i]=rand(1,3);
        echo $a[$j][$i];
      }
      echo"<br>";
    }
    ?>