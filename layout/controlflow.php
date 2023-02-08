<?php include "header.php" ?>

<h3>
4.1 Write a script that gets the current month and prints one of the 
following responses, depending on whether it's August or not:
It's August, so it's still holiday.<br>
Not August, this is Month-name so I don't have any holidays
</h3>



<?php 
    $chkMonth = date('F');
    if ($chkMonth == 'August'){
        echo "It's August, so it's still holiday.";
    }
    else{
    echo " August, so at least not in the peak of the heat";
    }
?>

<h3>
4.2 Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h3>

<?php 
    $color = 'Red';
    if ($color == 'Red'){
        echo "The color is red.";
    }
    else{
        echo "The color is not red.";
    }

?>

<h3>
4.3 Write a program to grade students based on their total score for a subject.
Use variable to hold the total score.
</h3>

<?php 
    $score = 100;
    if ($score > 80)
        {
        echo "<br>Excellent<br> ";
        }
    elseif ($score > 70) 
        {
        echo "<br>Great <br>";
        }
    elseif ($score > 60) 
        {
        echo "<br>Good <br>";
        }  
    elseif ($score > 50) 
        {
        echo "Pass <br>";
        }  
    elseif ($score < 50) 
        {
        echo "<br>Fail <br>";
        }

?>

<h3>
4.4 Write a program to get inputs (age and name) from the user and based on 
their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h3>

<form action="" method="post">
    <div class="row">
        <div class="col">
        <input type="text" name="name" style="size:50px" placeholder="Enter your Name"><br><br>
        </div>
    
        <div class="col">
        <input type="text" name="age" placeholder="Age"><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <input type="submit"  name="Submit" value="SUBMIT"><br>
        </div>
    </div>
</form>
<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo $name . ", You Are Eligible For Vote.";
    } else {
        echo $name . ", You are not eligible for vote. ";
    }
}
?>

<h3>
4.5 In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….

</h3>

<?php

 function getBrowser()
 {
   $agent = $_SERVER['HTTP_USER_AGENT'];
   $browser = "N/A";

   $browser = [
     '/msie/i' => 'Internet explorer',
     '/firefox/i' => 'Firefox',
     '/safari/i' => 'Safari',
     '/chrome/i' => 'Chrome',
     '/edge/i' => 'Edge',
     '/opera/i' => 'Opera',
     '/mobile/i' => 'Mobile browser',
   ];


   foreach ($browser as $brName => $name) 
{
     if (preg_match($brName, $agent)) 
{
       $browser = $name;
     }
   }
   return $browser;

 }

 echo "You are using: " . getBrowser();

?>



<?php include"footer.php" ?>