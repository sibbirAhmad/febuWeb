<?php
$arr = array(7,8,9,6,8);
$check = 8;
$isDataFound = false;
$count = 0;
for($i=0;$i<4;$i++){
    
    if($arr[$i]==$check){
       $count++;
    }
}
if(!$isDataFound){
   echo " Data Found ".$count." Times"; 
}


