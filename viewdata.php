<?php
$title = 'view data';
include './includes/header.php';

require_once './db/conn.php';
require_once './db/crud.php';

//get data by rec_id 

if(!isset($_GET['id'])){
    echo "<h1 class='text-danger'>check details</h1>";

}else{
    $id = $_GET['id'];
    $result = $crud->viewData($id);
    


?>
<h1>
view each data 
</h1>

<div class="card" style="width: 18rem;"  >
  <div class="card-header">
    Record
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">name: <?php echo $result['firstName'] ?></li>
    <li class="list-group-item">last name: <?php echo $result['lastName']  ?></li>
    <li class="list-group-item">email: <?php echo $result['email']  ?></li>
    <li class="list-group-item">date joined: <?php echo $result['datejoined']  ?></li>
    <li class="list-group-item">department: <?php echo $result['name'] ?></li>
  </ul>
</div>

<?php } ?>

<?php
require './includes/footer.php';
?>
