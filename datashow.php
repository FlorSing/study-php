<?php
$title = 'datashow';
include './includes/header.php';
require_once './db/conn.php';
require_once './db/crud.php';

$results = $crud->showData();

?>
<h1>
data show
</h1>

<table class='table'>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Date Joined</th>
        <th>Department</th>
        <th>Actions</th>
        
    </tr>
    <?php
        while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
    <tr>
        <td><?php echo $r['rec_id'] ?></td>
        <td><?php echo $r['firstName'] ?></td>
        <td><?php echo $r['lastName'] ?></td>
        <td><?php echo $r['email'] ?></td>
        <td><?php echo $r['datejoined'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td>
            <a href="viewdata.php?id= <?php echo $r['rec_id'] ?>" class="btn btn-primary" >View</a>
            <a href="editdata.php?id= <?php echo $r['rec_id'] ?>" class="btn btn-warning" >Edit</a>
            <a onclick="return confirm('confirm delete');" href="deleterec.php?id= <?php echo $r['rec_id'] ?>" class="btn btn-danger" >Delete</a>
        </td>
    
    </tr>


    <?php }?>
</table>



<?php
require './includes/footer.php';
?>
