// single function to triger alert box
function hello(){
    alert("Welcome to my website");
}

//display or like echo
//document.write
//window.alert

//simple function to add 2 numbers
function add(){
    document.write(5+6);
}

//document.getElementById(id)

//function to change the background color of the page
//function changeColor(where,newColor){
 //   if(where =="background"){
   //     document.body.style.backgroundColor=newColor;
 //   }
//}

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
   
}
function changeFcolor(){
    let fcolor=document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}

//crud
function crud1(){

    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert ("fisrt name must have ateast 5 character");
        return false;
    }
}

function fname(){

    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert ("fisrt name must have ateast 5 character");
        return false;
    }
}