<?php 
$arr1=[1,2,3,4,5,8];
array_push($arr1,6);
array_shift($arr1);
echo count($arr1);
echo "\n";

echo array_key_exists(5,$arr1);
echo "\n";

print_r($arr1);
function hello(){
    echo "hiiii";
}
hello();
?>