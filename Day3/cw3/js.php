<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Can Validate Input</h1>

<p>Please input a number between 1 and 10:</p>

<input id="numb" type="number">

<button type="button" id="butto">Submit</button>

<p id="demo"></p>

<script>
 var btn = document.getElementById("butto");
 btn.onclick = function(){
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
};
</script>

</body>
</html> 
    