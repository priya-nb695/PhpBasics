<?php
session_start();
//this session is available in other files as well
if(isset($_SESSION["sessions"])){
    $_SESSION["sessions"]+=1;
}
else{
    $_SESSION["sessions"]=1;
}
echo $_SESSION["sessions"];
$_SESSION["age"]=1;
print_r($_SESSION);
echo "<pre>";
//to delte paliticular sesson 
unset($_SESSION["sessions"]) ;
print_r($_SESSION);
echo "\n";
//to delte entire sesson 
session_destroy();
$_SESSION = []; // Clear session data from the current script
print_r($_SESSION);

?>