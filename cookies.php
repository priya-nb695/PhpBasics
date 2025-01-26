<?php
//set cookie
// setcookie("name","user1",time()+3600) ;
// setcookie("age","45",time()+3600) ;
//access cookie
// if(isset($_COOKIE['name'])){
//     echo "Hello ".$_COOKIE['name']."!";
// }
//delete cookie
// setcookie("age","45",time()-3600) ;
//creating cookies as Arrays
setcookie("cookies[one]","profile1");
setcookie("cookies[two]","profile2");
setcookie("cookies[three]","profile3");

if(isset($_COOKIE["cookies"])){
    echo "<pre>";
    print_r($_COOKIE["cookies"]);
}
?>