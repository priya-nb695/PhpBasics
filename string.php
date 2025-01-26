<?php 
$str="strings are very imp in every lang";
echo strlen($str)."\n";
echo strpos($str,"strings");
// if(strpos($str,"str") !==false){
//     echo "found";
// }
// else echo "not found";
echo substr($str,9)."\n";
//to get  from last
echo substr($str,strlen($str)-4);
//to split the sting and make array
echo $str."\n";
$newArr=explode(" ",$str);
print_r($newArr);
echo "\n";
//to join the array and make string
$newStr=implode(" ",$newArr);
echo $newStr;


?>