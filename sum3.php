<?php
 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if ($max_number < $a){
     $max_number=$a;
 }
 
 }
 
 return $max_number;
 
 }
 $array = (array(1,4,6,7));
 echo max_array($array);
 echo "/n";