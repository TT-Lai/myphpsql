<?php
    for($j=1;$j<=40;$j=$j+1){
     for($i=1;$i<=20;$i=$i+1){
        $a[$j][$i]=rand(1,3);
        //echo $a[$j][$i];
     }
      //echo"<br>";
    }
    ?>
<table width="0" border="5">
<?php
  for($j=1;$j<=40;$j=$j+1){
    echo"<tr>";   
    for($i=1;$i<=20;$i=$i+1){
      if ($a[$j][$i]==1)
      echo "<td bgcolor=#FF0000>1</td>";
      if ($a[$j][$i]==2)
      echo "<td bgcolor=#0033FF>2</td>";
      if ($a[$j][$i]==3)
      echo "<td bgcolor=#FFFF00>3</td>";
      
    }
    echo"</tr>";
  }
    ?>
    
</table>