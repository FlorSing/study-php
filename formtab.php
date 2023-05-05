<?php
$title = 'formtab';
include './includes/header.php';
require_once './db/conn.php';
require_once './db/crud.php';

if(isset($_POST['submit'])){
    //extract valuse from the $_POST array
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $datejoined = $_POST['datejoined'];
    $department = $_POST['department'];
    
    //call function to insert and track if success or not
    $isSuccess = $crud->insert($firstName, $lastName, $email, $datejoined, $department );
  
    if ($isSuccess){
        echo "<h1 class= 'text-success'>okay</h1>";
    }
    else{
        echo "<h1 class='text-danger'>not okay</h1>";
    }
  }
  

?>
<h1 class="text-center text-success" >
FORM TABLE
</h1>

<div class="card" style="width: 18rem;"  >
  <div class="card-header">
    Record
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">name: <?php echo $_POST['firstName'] ?></li>
    <li class="list-group-item">last name: <?php echo $_POST['lastName']  ?></li>
    <li class="list-group-item">email: <?php echo $_POST['email']  ?></li>
    <li class="list-group-item">date joined: <?php echo $_POST['datejoined']  ?></li>
    <li class="list-group-item">department: <?php echo $_POST['department'] ?></li>
  </ul>
</div>





<?php


?>



<?php
require './includes/footer.php';
?>
