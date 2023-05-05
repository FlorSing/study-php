<?php 
require_once './db/conn.php';
require_once './db/crud.php';

if(!$_GET['id']){
    echo 'error';
}else{
//get ID values 
    $id = $_GET['id'];
}

//call delete function
$result = $crud->deleteRecord($id);
    if($result)
    {
        header("Location: datashow.php");
    }
    else echo 'error';
    
//redirect to list
