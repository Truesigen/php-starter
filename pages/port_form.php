<?php
$db = get_db_table('users', 'forms/db.json');

foreach($db as $name){
    if($name->Log == $_POST['firstName']){
        $_SESSION['msg'] = "Такой никнейм уже существует";
        header('Location: index.php');
        exit;
    }else{
        $db[] = array('Log' => $_POST['firstName'], 'Pass' => $_POST['password']);
        save_db('users', $db, 'forms/db.json');
        $_SESSION['msg'] = "Вы успешло авторизировались";
        header('Location: index.php');
        exit;
    }
}


?>