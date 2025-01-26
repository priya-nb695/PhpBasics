<?php
$file_name="docs/file1.txt";
$file=fopen($file_name,"w");
if($file_name==false){
    echo "error opening files";

}
else{
    $content="first line in the file and some data is added now";
    fwrite($file,$content);
    echo "file writing sucessfull!";
}
fclose($file);
?>