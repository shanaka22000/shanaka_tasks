<?php
$title = "Update the Info";
include("../layout/header.php");
include("db.php");
$a=$_GET['id']="";
$result=mysqli_query($conn,"SELECT  * FROM  stufyinfo WHERE id='$a'");
$row=mysqli_fetch_array($result);

?>

<h2>Update your information below</h2>
<form name="update"method="get" action="">

    <input type="text" name="fname" placeholder="First Name" required values="<?php echo $row['fname']?>"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required values="<?php echo $row['lname']?>"><br><br>
    <input type="text" name="city" placeholder="City" required values="<?php echo $row['city']?>"><br><br>
    <select name="cname" value="<?php echo $row['groupid']?>">
        <option values="BBCAP22">BBCAP22</option>
        <option values="BBCAP21" >BBCAP21</option>
        <option values="other">Other</option>

    </select><br><br>
    
    <input type="submit" name="update" values="UPDATE">
    <input type="submit" name="delete" values="DELETE">
</form>

<?php 
    if(isset($_POST['update'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        
        $query=mysqli_query($conn,"UPDATE stufyinfo SET fname='$fname', lname='$lname' WHERE id='$a'");
        
        if($query){
            echo "<h2>Your Information is updated successfully</h2>";
        }

        else{
            echo "Record not modified";
        }
    
    }


?>







<?php
include("../layout/footer.php");


?>