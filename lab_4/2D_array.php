<html>
<body>

<?php
$tables = array (
  array("1",2,3,A),
  array("1",2,B,C),
  array("1",D,E,F),

);
  
echo $tables[0][0]."  ".$tables[0][1]." ".$tables[0][2]." ".$tables[0][3]."  <br>";
echo $tables[1][0]."  ".$tables[1][1]." ".$tables[1][2]." ".$tables[1][3]." <br>";
echo $tables[2][0]." ".$tables[2][1]." ".$tables[2][2]." ".$tables[2][3]."  <br>";
   echo "<br />";
?>

<?php
for($i=3;$i>=1;$i--)
 {
   for($j=$i;$j>=1;$j--)
    {
     echo $j." ";
     if($j==1)
     {
       echo " ";
       echo "<br />";
     }
   }
} 
   echo "<br />";
?>
 
 
 <?php  
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $alpha[$j];  
    }  
    echo "<br>";  
}  
?>  

</html>
</body>