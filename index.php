<?php
session_start();
$page;
if($_SERVER[REQUEST_URI] == "/"){
    $page = "homepage";
} else {
    $page = substr($_SERVER[REQUEST_URI], 1);
}



if(file_exists("$page.php")){
    include "$page.php";
} else {
    include "homepage.php";
}

function home(){
    include "homepage.php";
}

?>





