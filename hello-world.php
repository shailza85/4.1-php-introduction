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