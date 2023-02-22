<?php
$title = "simple CRUD app";
include '../layout/header.php';
?>
<form method="post" action="" onsubmit="return crud1()" name="form1">
    <input type="text" name="fname" placeholder="Frist Name" required onblur="fname"() ><br><br> 
    <input type="text" name="lname" placeholder="Last Name" required ><br><br> 
    <input type="text" name="city" placeholder="City" required ><br><br> 
    <select name="groupid">
        <option value="BBCAP22"> BBCAP22 </option> 
        <option value="BBCAP21"> BBCAP21 </option> 
        <option value="Others"> Others </option> 
    </select> <br><br> 
    <input type="Submit" value="Submit" name="submit"><br><br> 
</form> 

<?php
if (isset($_POST ['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include 'db.php';
    $sql = "insert into stufyinfo (fname,lname,city,groupid)
    values('$fname', '$lname', '$city', '$groupid')"; 

    if ($conn ->query($sql) === TRUE){
        echo "Your information is added Successfully";
    }
    else {
        echo "Error:" . $conn->error;
    }

}


?>


<?php
include "../layout/footer.php";
?>