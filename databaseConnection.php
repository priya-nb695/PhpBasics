<?php

$host="localhost";
$db_user="root";
$password="";
$databaseName="phpdatabasebasic";

//procedural mysqli connect- only cannect with mysql
$connection = mysqli_connect($host,$db_user,$password,$databaseName) or die("Connection failed".mysqli_connect_error());
// var_dump($connection);
echo "<br>";
if($connection){
    echo "connected! <br>";
    $sql_query="SELECT * FROM students";
    $result=mysqli_query($connection, $sql_query);
    //to print
    //converting the result to associative array
    while($row=mysqli_fetch_assoc($result)){
        echo $row["std_Name"].":".$row["course"]."</br>";
    }
}

?>