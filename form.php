<?php
$title = 'form';
include './includes/header.php';
require_once './db/conn.php';
require_once './db/crud.php';

$results = $crud->getDept();

?>
<h1>
FORM TEST
</h1>
<div class="container-sm">

<form class="row g-3" method=POST action="formtab.php" >

  <div class="col-md-6">
    <label for="firstName" class="form-label">First name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" value="Jane" required>
  </div>
  <div class="col-md-6">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" value="Doe" required>
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <div class="input-group">
      <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="dateJoined" class="form-label">Date Joined</label>
        <input type="date" class="form-control" id="dateJoined" name="datejoined" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Department</label>
    <select class="form-select" id="department" name="department" required>
      <!-- <option selected disabled value="">Choose...</option>
      <option value="2" >Sales</option>
      <option  >Research</option>
      <option  >Backroom</option> -->

      <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) {?>
          <option value="<?php echo $r['dept_id'] ?>"><?php echo $r['name'] ?></option>
      <?php }?>

    </select>
  </div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit" >Submit form</button>
  </div>
</form>

</div>



<?php
require './includes/footer.php';
?>
