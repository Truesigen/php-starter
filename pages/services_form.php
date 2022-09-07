<?php
home();
?>

<?php 
$_SESSION['mess'] = "Спасибо за то что приняли участие в викторине!";
foreach($_POST as $a){
    if(is_array($a)){
         for($i = 0; $i < count($a);$i++){
            echo $a[$i];
         }
    }else{
        echo $a;
    }
   

    }
?>

<h1><?php echo $_SESSION['mess'];?></h1>
<?php unset($_SESSION['mess']);?>