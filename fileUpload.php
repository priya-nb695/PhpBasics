<?php

if(isset($_POST["submit"])) {
    //print $_FILES first then get required fields
    $file_Name=$_FILES["filejpg"]["name"];
    $errors=[];
    echo $file_Name."\n";
    $file_Format_temp=explode(".",$file_Name);//splitting str to array
    $file_extention=strtolower(end($file_Format_temp));//getting last array val and converting to lower case
    $file_size=$_FILES["filejpg"]["size"];
    $file_tmp=$_FILES["filejpg"]["tmp_name"];//to upload we need this 
    $validFormates=["jpg","jpeg","png","webp"];
    //checking if extension valid 
    if(!in_array($file_extention,$validFormates)){
        $errors[]="please enter valid file format(jpg/jpeg/png/webp)";
    }
    if($file_size > 2097152){
        $errors[]="oops! choose smaller size file(<2MB)";
    }
    if(empty($errors)){
        //getting current pwd, creating desti folder + appending filename to create proper file name to upload file
        $destination=getcwd()."/fileUploads/".$file_Name;
        echo $destination."\n";
        //moving created file to destination (need to use file_temp)
        if(move_uploaded_file($file_tmp,$destination)){
            echo "file uploaded sucessfully!\n";
        }
        else{
            echo "file upload coundn't be completed\n";
        }


    }
    else{
        print_r($errors);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="filejpg" />
        <input type="submit" value="SUBMIT" name="submit" >

    </form>
</body>
</html>