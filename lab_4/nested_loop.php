<html>
<body>

<?php
//pattern
for($i=1; $i<=5; $i++) {
for($j=1; $j<=$i; $j++)
{
echo '*';
}
echo '<br>';
}
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