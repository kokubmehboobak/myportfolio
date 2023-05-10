<?php 


$x = 7;  
for($i=1; $i<=10; $i++)   
{
$product = $i*$x;
if($product%2==0){
echo "$x * $i = $product" ;   
echo '<br>';}	 
}


?>