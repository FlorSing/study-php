<?php
$title = 'home';
include './includes/header.php';
?>


<form method=POST>
    <label for='name'>Name</label>
    <input type='text' name='name'>
    <br />

    <label for='age'>Age</label>
    <input type='number' name='age'>
    <br />

    <button type='submit'>Submit</button>
</form>

<?php
echo $title;    

function showForm()
{
    echo "<hr/>";
    echo $_POST['name'];
    echo "<br/>";
    echo $_POST['age'];

}

showForm()

?>

<?php 
require './includes/footer.php';
?>
