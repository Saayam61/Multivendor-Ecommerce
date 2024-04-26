<?php
// echo"heloo<br>";
// echo "hi";
//into
//comment
//can also contain html css js etc

//varible = holds data (string, int, float , boolena)
$name= "ram";
$foodname= "momo";
$email = "serjoramos4444@gmail.com";

//integer
$age=21;
$users=2;
$quantity=3;

//float
$price=22.2;
$total = $price * $quantity;

//boolean
$sarojsir = true;

echo " Hello :{$name}<br>";
echo " Food :{$foodname}<br>";
echo " Your Email is :{$email}<br>";


echo " Your Age is :{$age}<br>";
echo " There Are :{$users} online <br>";
echo " The Quanitiy is :{$quantity} <br>";



echo " The momo is :\${$price} <br>"; // \$ = escapse seq.
echo " The total Price is :\${$total} <br>";

echo " Saroj Sir is 1(true) 0(false) : {$sarojsir}<br>";

//if doesnt display [ its 0 or null] doesnt display 


//arithmetical operator
// + - * / ** %

$x = 10;
$y = 10;

// Addition
$z_add = $x + $y;
echo "The Sum of {$x} and {$y} is: {$z_add}<br>";

// Subtraction
$z_sub = $x - $y;
echo "The Subtraction of {$x} and {$y} is: {$z_sub}<br>";

// Multiplication
$z_mul = $x * $y;
echo "The Multiplication of {$x} and {$y} is: {$z_mul}<br>";

// Modulus
$z_mod = $x % $y;
echo "The Modulus of {$x} and {$y} is: {$z_mod}<br>";

// Exponentiation
$z_pow = $x ** $y;
echo "The Power of {$x} to the {$y} is: {$z_pow}<br>";

$total1= 10*5%3/12-4;
echo" Sum is :{$total1}<br>";


//increament decrement operators
$counter= 0 ;
$counter= $counter+1; //or ++ , -- , or even +2 , -3 etc
echo " Increamented Value is : {$counter}<br>";


// If-else statement
$age = 18;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
echo "<br>"; 




// Switch statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    // Add cases for other days as needed
    default:
        echo "Today is not Monday or Tuesday.";
}
    echo "<br>";echo "<br>";



// For loop
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: {$i}<br>";
}
echo "<br>"; echo "<br>"; echo "<br>";



// While loop
$j = 0;
while ($j < 5) {
    echo "Iteration: {$j}<br>";
    $j++;
}
echo "<br>"; echo "<br>"; echo "<br>";



// Do-while loop
$k = 0;
do {
    echo "Iteration: {$k}<br>";
    $k++;
} while ($k < 5);

echo "<br>"; echo "<br>"; echo "<br>";



// Array
$colors = array("Red", "Green", "Blue");
echo "{$colors[2]}<br>";

$views = array("WideAngle","sideAngle","FrontAngle");
echo "{$views[2]}<br><br>";
echo implode(",<br>",$views);
foreach($views as $viewss){
    echo" Views: {$viewss}<br>";
}
echo "<br>"; echo "<br>"; echo "<br>";



// Using implode to convert array to string
echo implode(":: ", $colors) . "<br>";
// Foreach loop
foreach ($colors as $color) {
    echo "Color: {$color}<br>";
}

// Function
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo "Result of addition: {$result}";




?>


