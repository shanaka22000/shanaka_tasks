<?php include "header.php" ?>

<form action=""method="get">
<input type="number"placeholder="enter your first number"name="num1">
<input type="number"placeholder="enter your second number"name="num2">

<select name="operator">
    <option value="add"> Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Devide</option>
</select>

<input type="submit" name="cal" value="calculate">
</form>

<?php
if (isset($_GET['cal'])){
   $num1 = $_GET['num1'];
   $num2 = $_GET['num2'];
   $operator = $_GET['operator'];
   switch($operator){
    case "add";
           $result = $num1 + $num2;
       break;
    case "sub";
          $result = $num1 - $num2;
       break;
    case "mul";
        $result = $num1 * $num2;
        break;
    case "div";
        $result = $num1 / $num2;
        break;

    default;
        $result = "error: you have not selected the correct operator";

    }



if(isset($result)){

    echo "<h2>result : $result</h2>";
}
}

?>


<h5>5.1 Write a php script to display courses as list. Use</h5>
<?php 
    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 

    foreach ($courses as $value) {
    echo "<li>".$value . "</li>";
}
?>

<h5>5.2 The unset() function is used to remove element from the array. The var_dump() 
    function is used to dump information about a variable.  array_values() is an inbuilt
     function that returns all the values of an array and not the keys.
</h5>

<?php 
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    unset($courses1["2"]);
    echo "<h6>use unset() function to Remove the third element of the array </h6>";
    foreach ($courses1 as $value) {
    echo $value."<br>" ;
}

    echo "Dumb information about element of the array";
    var_dump($courses1);

?>

<br>
<?php 
echo "Print only the values of the array elements";
    $values=array_values($courses1);
    foreach ($values as $value) {
        echo $value . "<br>";}
?>
<br>
<h5>5.3Sort the following array</h5>
<?php 
    echo "ascending order sort by value<br>";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    sort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "ascending order sort by keys";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    ksort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "decending order sort by value";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    rsort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

    echo "decending order sort by keys";
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    krsort($courses3);
    foreach ($courses3 as $value) {
    echo $value . "<br>";}

?>

<br>
<h5>5.4 Change the following array's all values to upper case.</h5>
<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?>

<h5>5.5 List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h5>
<?php 
    $color['#ff0000'] = "Red";
    $color['#ffc0cb'] = "Pink";
    $color['#0000ff'] = "Blue";
    $color['#800080'] = "purple";
    $color['#008000'] = "Green";
    
    foreach ($color as $x=>$x_values) {
        echo $x . " => ".$x_values."<br>";}

?>

<h5>PHP script to calculate and display average temperature, five lowest and highest temperatures.</h5>

<?php
    $temp=array(78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    );

    
    $sum=array_sum($temp);
    $count=count($temp);
    echo "Average temperature : ".$sum/$count;

    echo "<br>First five lowest temperature";
    sort($temp);

    for ($i=0; $i < 5; $i++) {
        echo $temp[$i] . "<br>";}

    echo "<br>First five highest temperature";
    rsort($temp);

    for ($i=0; $i < 5; $i++) {
        echo $temp[$i] . "<br>";}

?>
   

<?php include"footer.php" ?>