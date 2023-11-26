<?php 
$nationalCode = array(7,7,3,1,6,8,9,9,5,1);
$len = count($nationalCode);
if($len==10)
{
    $len2= $len-1;
$sum = 0;
$counter= 0;
while($len>0 and $counter<$len2)
{
   $sum+=$nationalCode[$counter]*$len;
   $len--;
   $counter++;
} 
$mod =  $sum % 11;
  if($mod<2){
    if($nationalCode[$counter] == $mod)
    {
        echo "true";
    }
  }elseif($mod>=2){
    $reversed = array_reverse($nationalCode);
    if($reversed[11-$mod]==$nationalCode[$counter]){
        echo "true";
    } else{
    echo "false";
  }
  }
 
}else
echo "national code must be 10 char";
  
?>
