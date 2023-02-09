<?php  include "header.php";   

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['bdate'];
$color= $_POST['color'];
echo "<h3> your name is $fname $lname /.your favourite color is $color date of birth $dob</h3>";

?>

<?php  include "footer.php"; ?>