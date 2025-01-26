<?php 
//even if error it will throw warning and continue to another line,
// use include when file not very imp
include "array.php";

//to avoide reusing the include statement by mistake use inlcude once
include_once "array.php";

require "index.php";
require_once "index.php";
?>