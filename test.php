<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello php,";
        echo "how are you doing?<br>";
        echo "hello php,<br>";
        echo "how are you doing?";
        echo "hello php,";
        echo "how are you doing?";
        echo "<p>first line</p>";
        echo "<p>second line</p>";
        $var=1;
        $VAR=2;
        echo $var;
        echo ',$var=<br/>';
        echo "$VAR<br/>";
        echo '$VAR<br/>';
        echo "$VAR<br/>";
        $student[8]=978;
        $student[]=999;
        $student[]=1000;
        echo "$student[8]<br/>";
        echo "$student[9]<br/>";
        echo "$student[10]<br/><hr/>";
        $student = array(91,92,93,94,95,96);
        echo "$student[1]<br/>";
        echo "$student[2]<br/>";
        echo "$student[3]<br/>";
        define('pi',3.14159);
        echo "pi<br/>";
        echo 'pi<br/>';
        echo pi;
        echo '<br/>';
        echo pi*4*4;
        echo '<br/>';

        $a = "花好月圓";
        $b = $a . "萬事如意";
        echo $b . "<BR>";

        $c = "春風得意";
        $c .= "國泰民安";
        echo $c;
        echo '<br/>';

        $i=1;
        $a="*";
        while ($i <=10){
            echo $a;
            echo '<br/>';
            $a=$a.'*';
            echo '<br/>';
            $i=$i+1;
        }
        ?>
<table width="200" border="1">
    <?php
    $i=1;
    $a="*";
    while ($i <=15)
    {
        echo 
        "<tr>
        <td bgcolor=#004466>$a</td>
        </tr>
        ";
    $a=$a.'*';
    $i=$i+1;
    }
    ?>
</table>
<table width="200" border="1">
  <tr>
    <td bgcolor="#004466">loop</td>
    <td>loop</td>
  </tr>
  <tr>
    <td>loop</td>
    <td>loop</td>
  </tr>
</table>

<?php
$i=1;
$a="*";
$j=10;
while ($i <=15)
{
    echo 
    "<table width=$j border='1'>
    <tr>
    <td bgcolor=#004466>$a</td>
    </tr>
    </table>";
    $a=$a.'*';
    $i=$i+1;
    $j=$j+10;
}
?>
<?php
$i=1;
$a="*";
while ($i <=15)
{
    echo 
    "<table border='1'>
    <tr>
    <td bgcolor=#004466>$a</td>
    </tr>
    </table>";
    $a=$a.'*';
    $i=$i+1;
}
?>
<table>
  <tr>
    <?php
    $i=1;
    $a=array(1=>1,2,3,2,3,1,3,2,3,2,3,1);
    while($i<=12){
      if ($a[$i]==1)
      echo "<td bgcolor=#004466>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
      if ($a[$i]==2)
      echo "<td bgcolor=#0033FF>&nbsp</td>";
      if ($a[$i]==3)
      echo "<td bgcolor=#FF0000>ahdfjhkljn</td>";
      $i=$i+1;
    }
    ?>
  </tr>
</table>
<table>
  <tr>
    <?php
    $i=1;
    $j=1;
    while ($j<=12){
      $a[$j]=rand(1,3);
      $j=$j+1;
    }
    while($i<=12){
      if ($a[$i]==1)
      echo "<td bgcolor=#004466>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
      if ($a[$i]==2)
      echo "<td bgcolor=#0033FF>&nbsp</td>";
      if ($a[$i]==3)
      echo "<td bgcolor=#FF0000>ahdfjhkljn</td>";
      $i=$i+1;
    }
    ?>
  </tr>
</table>
<table>
  <tr>
    <?php
    $i=1;
  for( $j=1;$j<=12;$j=$j+1){
      $a[$j]=rand(1,3);
          }
    while($i<=12){
      if ($a[$i]==1)
      echo "<td bgcolor=#004466>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
      if ($a[$i]==2)
      echo "<td bgcolor=#0033FF>&nbsp</td>";
      if ($a[$i]==3)
      echo "<td bgcolor=#FF0000>ahdfjhkljn</td>";
      $i=$i+1;
    }
    ?>
  </tr>
</table>

<?php
    for($j=1;$j<=40;$j=$j+1){
      for($i=1;$i<=20;$i=$i+1){
        $a[$j][$i]=rand(1,3);
        echo $a[$j][$i];

      }
      echo"<br>";
    }
    ?>
<table width="0" border="0">
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
</body>
</html>
