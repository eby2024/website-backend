


<?php
// the code below is to output a string in php

/*echo  "<br>" ;
var_dump("my website"); */ 

echo "my website";

$my_name = "lawretta";

var_dump($my_name);
$yearsOfExperince = 5;
var_dump($yearsOfExperince);


$height = 6.1;
var_dump($height);
echo "<br>";

$isMale = true;
var_dump($isMale);
echo "<br>";


//array 
$FullName = array("lawretta", "nwaedo");    
var_dump($FullName);


echo "my first name is $FullName[0] and my surname is $FullName[1]";

// 28/10/2024
// NULL
$nothing = null;
echo "<br>";
var_dump($nothing);

// constant
define("pi",  3.142);
echo "<br>";
echo "pi";
echo "<br>";

var_dump(pi);

const gravityAcceleration = 10;


echo "<br>";
var_dump(gravityAcceleration);

//31/10/24
//operators
//arithmetic operators
$x = 10;
$y = 5;
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";

//modules/
echo $x % $y;

echo "<br>";
echo $x ** $y;
echo "<br>";

//increment and decrement 0perators
echo $x++;
echo  "<br>";

echo $x;

















//assignment operator
$a = 100;
$b = 50;

//addition assignment
$a += $b;
echo "<br>";
echo $a;

//subtraction assignment
$a -= $b;
echo "<br>";
echo $a;

// divisional assignment
$a /=$b;
echo "<br>";
echo $a;

echo "<br>";
// multiplication assignment
$a *= $b;
echo "<br>";
echo $a;
echo "<br>";

// logical operators
//Examples of logical operator are : AND(&&), OR (||), XOR , NOT(!)

if ($a == 100 && $b == 50) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if (!($a == 101)) {
echo "we are good to go.";
}
echo "<br>";

//4/11/24

// PHP Conditional Statements
//There are four notable conditional statements in PH

//if...... else statements

//if ..... elseif.... else statement

// Switch Statemet


// If Statement
// _____________

//The if statment is one of the most important statements in PHP

// Example:
// ____________
// variable declaration
$my_name = "lawretta";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";





if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3>  Good Morning, $my_name! </h3>";

}


elseif ($present_time >= 12.00 && $present_time <= 16.00) {
    echo "<h3> Good Afternoon, $my_name! </h3>"; 
}
elseif ($present_time >= 16.00 && $present_time <= 23.59) {
    echo "<h3> Good Night, $my_name!  </h3>"; 
}


// Switch Statement 

 $today = date (format: "D");
echo "Today is: $today <br>";
switch($today) {
    case "Mon":
        echo "Hello everybody, It's Monday. Have a great day!";
        break; 
    case "Tue":
        echo "Hello everybody, It's Tuesday. Have a great day!";
        break; 
    case "Wed":
        echo "Hello everybody, It's Wednesday. Have a great day!";
        break;
    case "Thurs":
        echo "Hello everybody, It's Thursday. Have a great day!";
        break;
    case "Fri":
        echo "Hello everybody, It's Friday. Have a great day!";
        break; 
    case "Sat":
        echo "Hello everybody, It's Saturday. Have a great day!";
        break; 
    case "Sun":
        echo "Hello everybody, It's Sunday. Have a great day!";
        break; 
    default:
        echo "sorry, this is not a day in the week!";
        break;

}
// --while loops
echo "<br>";
$j = 2;
while ($j < 8) {
    echo $j;
    $j++;
}
echo "<br>";
// -- do... while loops
    
// -- for -loops

//11/11/24
//php loops
/*$numbers= 1;
echo $numbers. "<br>";

$numbers++;
echo $numbers. "<br>";*/

//while loop
/*$numbers = 1;

while ($numbers <=10) {
    echo $numbers."<br>";
    $numbers++;
}*/


//do while loop
/*$numbers = 1;
do {
    echo $numbers."<br>";
    $numbers++;
} while ($numbers <=10)*/



//create an app that print number 1 to 100, print fizz for multiples of 3 and buzz for multiples of 5, print fizzbuzz for the
//fror loop
for ($numbers = 1; $numbers <= 100; $numbers++){
   if($numbers % 15 == 0) {
    echo "fizzbuzz <br>";
   } elseif ($numbers % 5== 0){
    echo "buzz <br>";
   }elseif($numbers %3==0){
    echo "fizz <br>";
   }
   else {
    echo $numbers."<br>";
   }
   
    
   }
 



// the for each loop arrays

/*$cars = array("BMW" , "Lexus", "ferri", "bugatti");
echo "I love $cars{0} <br>";
echo "I love $cars{1} <br>";
echo "I love $cars{2} <br>";
echo "I love $cars{3} <br>"; */

$cars = array("Bmw", "lexus",  "ferri", "bugatti");

foreach ($cars as $car) {
    echo "i love $car <br>";
}


    //15/11/24
    // Arrays
$domesticAnimals = array('Dog', 'Cat', 'Horse', 'Goat', 'Cow');
$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

echo '<br>' . $domesticAnimals[0]. '<br>'; 

// indexed array
// associative array
// multi-dimensional array

echo count($domesticAnimals). '<br>';
echo count ($cities).  '<br>';

//array-push
array_push($cities, 'Abraka', 'Effuru', 'Patani', 'ozoro');
var_dump($cities);

$cities[2] = 'Ogwashi-uku';

echo '<br>';

var_dump($cities);

// associative array
$phone = ['brand' => 'iphone','model'=> '14 pro','color' => 'white', 256];

echo '<br>';
var_dump ($phone);

$phone["model"] = '15 pro';

echo '<br>';

var_dump($phone);

//www.github.com/elvincedik/backend-project.git
// function

function greetMe () {
    echo "<br> good afternoon";
}
greetMe();

function streetName ($sname) {
    echo "$sname Asaba, <br>";

}
streetName ("DLA");
streetName ("EZENEI");
function homeAddress ($snumber, $sname) {
    echo "$snumber street $sname Asaba, <br>";

}
homeAddress ("5th","DLA");
homeAddress ("8th","Ezenei");

echo "<br>";
echo "<br>";










?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this isa paragraph</p>
</body>
</html> -->
