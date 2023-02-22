<?php
$title="JavaScript Events and form validations";
include "header.php"

?>
<h2>A Simple button to display date</h2>
<button onclick="this.innerHTML=Date()">Click to know date </button>
<h2>Make a button and a place holder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click to know date </button>
<p id="p1"> </p>
<h2>change the background color</h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form>
<h2>change the font color</h2>
<form> 
    <input type="color" id="fcolor" onchange="changeFcolor()">
</form>
<h2>On Mouse over and Mouse out</h2>
<span onmouseover="this.style.color='blue';
                this.style.backgroundColor='yellow';
                this.style.fontsize='2em';"
        onmouseout="
                     this.style.color='red';
                     this.style.backgroundColor='white';
                     this.style.fontSize='1.1em';">Some text
</span>

<?php
include "footer.php";
?>