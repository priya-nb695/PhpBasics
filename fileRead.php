<?php
$file_name="docs/file1.txt";
$file=fopen($file_name,"r");
$fileSize=filesize($file_name);
$fileContent=fread($file,$fileSize);

if($file_name==false){
    echo "error opening file";

}
else{
    
  echo $fileContent;
}
fclose($file);
?>