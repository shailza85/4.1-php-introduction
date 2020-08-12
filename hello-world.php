Hello, World!
<?php 
echo 'Hi, this is my first php "echo"';

//Variables in PHP are marked with $.
//Cannot start with a number.
//Variable names are CASE-SENSITIVE.

$myString ='Hello, this is a string!';
echo ($myString);

$myString ='Hello, this string is changed!';
echo $myString;

//Difference between single and double quotes.

$mySingleQuoteString= 'This is single quotes:\n'. $myString;
echo $mySingleQuoteString;

$myDoubleQuoteString= "\n\nThis is double quotes:\n$myString";
echo $myDoubleQuoteString;

//Comments i n PHP. // is used for a one-line comment.
#we can also use bash-style one line comment.
/* We can also do
multiline comments
*/

// Data-types.

$myString='This is a string.';
$myTrueBoolean=TRUE; //boolean
$myFalseBoolean=false;
$myInt= 42; //imteger value
$myFloat=3.14; //decimal value
$myNull = null;

$myArray = [1,2,3,4,'test', false, null];
$mySecondArray= array(
    $myString,
    $myTrueBoolean,
    $myFalseBoolean,
    $myInt,
    $myFloat,
    $myNull,
    $myArray
);


$myObject = new stdClass(); // BASIC standard/generic object.
$myObject->name = "Bob";
$myObject->age  = 36;
$myObject->hobbies = ["programming", "skydiving"];
echo "\nHello, my name is {$myObject->name}.\nI am {$myObject->age} years old.\nI enjoy the following activities:";
// Oh, we'll need to loop through our array of hobbies!

foreach ( $myObject->hobbies as $hobby ) { // Note: $hobby in this case represents the current iterated item in the array. Can be any variable name.
  echo "\n ♥ $hobby";
}

echo "\n\n Lets try for loop:";

for($iterator=0; $iterator<8; $iterator+=2) {
    echo "\nCurrent value in loop: $iterator";
}

$myArrayLength = count($myArray);
echo "\n\nThe variable \$myArray contains $myArrayLength items."; //\$myArray:variable with escape character will print the name of arrray treated as text

//while loop
echo 'While loop';
$myInt =10;
while($myInt>=-35) {
echo "\n - While loop current value=$myInt";
$myInt-=5; //same as: $myInt=$myInt-5
}

echo "\n\nArrays agin...\n\n";
echo 'The first item in $mySecondArray is:'.$mySecondArray[0];

echo "\n\nInstead of indexed arrays, we can also use associative arrays. \n That s to say: arrays with key-value pairs!\n\n";

$myAssociativeArray =array( //Associative arrays have keys and values
    'name' => 'Bob',
    'age'=>41,
    hobbies=>["Programming","Golf"] //index array at index numbers and index values.
);

echo "{$myAssociativeArray['name']} is {$myAssociativeArray['age']} years old.";

echo "\nHis second hobby is: {$myAssociativeArray['hobbies'][1]}!";

echo "\n\n Looping through an associative array.\n\n";

foreach ($myAssociativeArray as $myKey =>$myValue) {
    if(!is_array($myValue)) {
    echo "The associative key \"$myKey\" is assigned the value: $myValue\n";
    }
    else {
        foreach($myValue as $hobby) {
            echo "\nOne of the $myKey is: $hobby";
        }
    }
}

//Functions.

function addition($num1,$num2) {
$result =$num1+$num2;
return $result;
}
echo "\n\nTesting addition function:\n";
echo addition(34,6);

echo "\n\n Another Testing addition function:\n";
echo addition(-508.67,"36");

//Using a default parameter, means passing an argument to this function becomes optional. o
function sayHello($name='World')
{
echo "Hello, $name!";
}

echo "\n\n Testing sayHello function:\n";
sayHello();

echo "\n\n Second Testing sayHello function:\n";
sayHello(Shailza);