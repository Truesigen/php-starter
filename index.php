
<?php
session_start();
require_once('libs/app.php');

$page;
if($_SERVER[REQUEST_URI] == "/"){
    $page = "homepage";
} else {
    $page = substr($_SERVER[REQUEST_URI], 1);
}



if(file_exists("pages/$page.php")){
    include "pages/$page.php";
} else {
    include ('pages\homepage.php');
}

function home(){
    include "pages\homepage.php";
}



    


?>
<h2><?php echo $_SESSION['msg']?></h2>
<?php unset($_SESSION['msg'])?>




