<?php
echo "form data recieved"."\n";
$data=$_GET;
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:600px;
          
            border:2px solid red;
        }
        .container p{
            color:green;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>name:<?php echo $data["fanme"] ?></p>
    </div>
</body>
</html>