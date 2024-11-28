<?php

$y = 22;
function myfunction() {
    echo $GLOBALS ['y'];

}


myfunction (); 
echo "<br>";

function myfunctions () {
    
    echo $y;

}
myfunction ();

echo "<br>";
echo "<br>";

//28th November

//super globals to be considered

//$GLOBALS
// $_SERVER
// $_POST
// $_GET

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

// Single quotes and double quotes difference
$z= "Mary";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';




?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST" >

<input type="text" placeholder="First Name" name="fname">
<br><br>
<input type="text" placeholder="Last Name" name="lname">
<br><br>
<button type="submit">Submit</button>

</form>

<?php
$first_name = $last_name = "";
// initialise variables to empty string

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Checking if form is submitted via POST method
    $first_name = htmlspecialchars ( $_POST[ 'fname']);
    // $_POST['fname'] holds form data of a form that used post method
    // htmlspecialchairs helps to prevent malicious codes

    $last_name = $_POST['lname'];

    echo "<h2> Good Afternoom $first_name $last_name </h2>";

    // <script> malicious code displaced as plain text</script>
    
}

?>