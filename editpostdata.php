<?php 
require_once './db/conn.php';
require_once './db/crud.php';
//get values from post operations
if(isset($_POST['save'])){
    //extract valuse from the $_POST array
    $id = $_POST['rec_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $datejoined = $_POST['datejoined'];
    $department = $_POST['department'];

//call crud function
    $result = $crud->editRecord($id, $firstName, $lastName, $email, $datejoined, $department);

    //redirect to form.php
        if ($result){
            header("Location: datashow.php");
        } else {
            echo "<h1 class='text-danger'>error in result</h1>";
                }
    }
    else {
    echo "<h1 class='text-danger'>error this page</h1>";
}
?>