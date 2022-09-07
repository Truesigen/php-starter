<?php

require_once('form.class.php');

function createForm($formname){
    $form = new Form(['file'=>"forms/$formname"]);
    return $form;
}

function get_db($name){
    $content = file_get_contents($name);
    $json_data = json_decode($content);
    return $json_data;
}

function get_db_table($table_name, $data){
    $all_db = get_db($data);
    return $all_db->$table_name;
}

function save_db($table_name, $data, $content){
    $all_db = get_db($content);
    $all_db->$table_name = $data;
    $str = json_encode($all_db);
    file_put_contents($content, $str);
}

function debug($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
?>