<?php  include "header.php";   

$fname = $_post['fname'];
$lname = $_post['lname'];
$dob = $_post['bdate'];
$color= $_post['color'];
echo "<h3> your name is $fname $lname /.your favourite color is $color date of birth $dob</h3>";

?>

<?php  include "footer.php"; ?>