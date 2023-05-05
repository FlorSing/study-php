<?php
$title = 'about';

include './includes/header.php';
echo $title;
echo "<br/>";


echo 'testing';
?>
<h1>
hello world
</h1>

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
<br/>
<br/>
    

<?php
require './includes/footer.php';
?>
