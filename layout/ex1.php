<?php include "header.php" ?>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
<?php
echo "Shanaka Abewickrama";
echo "BBCAP22";
?>
    <h1>3.2 Write PHP code to display the following message. </h1>
<?php
echo "Hello world! My name is \"Shanaka\"";
?>
    <h1>current date  </h1>
<?php echo date("m.d.Y")?>


<h3>3.4 variable in php </h3>
<?php
$title = "php is interesting";
echo "<h1>" . $title . "</h1>";
?>

<h3>3.4 variable in php </h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "
<table border=1>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>

<tr>
<th> 1 </th><th> Pekka </th><th> $g1</th>
</tr>

<tr>
<th> 2 </th><th> Johanna </th><th> $g2 </th>
</tr>

<tr>
<th> 2 </th><th> John </th><th> $g3 </th>
</tr>

</table>
";

?>
<h3> 4 screenshot of the development envireroment </h3>
<img src="images/docker.png" alt="docker">




<?php include"footer.php" ?>

