<
   <?php  include "header.php"; ?>    
    <h3>  exersice 3 . In-class task variable & iparators(variable.php)</h3>

    <h2>

Create a simple html form to get Firstname and Lastname 
from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site. </h3>

<form action="action.php" method="post">
    <div class ="row">

        <div class="col">
        First name: <input type="text" name="fname" required placeholder="First name" class="form-control"><br>
        </div>

        <div class="col">
        Last name: <input type="text"name="lname"required placeholder="Last name" class="form-control">
        </div>
    </div>
    <div class ="row">
        <div class ="col">
        Birth Date: <input type="date" name="bdate" class="form-control">
        </div>
        <div class ="col">
        select fav color: <input type="color" name="color" class="form-control"><br>
        </div>
    </div>
<input type="submit" value="submit">
</div>
</div>
</form>
</div>

<h4>Prepare a simple html table and apply bootstrap style to the table. </h4>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Asiri</td>
      <td> 5</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Anursdha</td>
      <td>10</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Anji</td>
      <td>5</td>
    </tr>
  </tbody>
</table>

<h4>3.4 Write a PHP script with two string variables. Assign any text to these variables. 
    Join them together.  Print the length of the string. (Hint: string function)</h4>

    <?php
        $a = "shanaka";
        $b = "Sanjeewa";
        $c = $a. $b;

        echo "$c <br><br>";
        echo "Lenth of the string :".strlen($c);
       
    ?>

<h4>3.5 Write a script to add up the numbers: 298, 234, 46. 
     variables to store these numbers and echo statement to output your answer.</h4>

     <?php  $num1="298";
            $num2="234";
            $num3="46";

            $total = $num1 + $num2 + $num3;
            echo "Total = ".$total;
    ?>

<h4>3.5 Write a script to add up the numbers: 298, 234, 46. 
     variables to store these numbers and echo statement to output your answer.</h4>

     <?php  $num1="50";
            $num2="10";
            $num3="30";

            $total = $num1 + $num2 + $num3;
            echo "Total = ".$total;
    ?>   

<h4>3.6 Write a PHP script to detect the browser being used to view your pages.  </h4>
<?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?>




<?php  include "footer.php"; ?> 