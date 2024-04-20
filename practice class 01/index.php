<?php 
$name = 'Jon Smith';
$age = 30;
$price = 19.99;
$isStudent = true;
//Php Array
// $fruits =array('apple','banana','chary');
// echo "";
// print_r($fruits);

function myfun1(){
   global $name;
    echo $name;
}

function myfun2(){
    global $name;
    echo $name;
}
myfun1();
echo "\n";
myfun2();
echo "\n";
//constend
define('NAME','ASHRAFUL ISLAM');
define('SITE_NAME','OSTED.APP');

echo NAME;
echo "\n";
echo SITE_NAME;
echo "\n";

//printf() [output formatting using %s %d]
/*
Possible format values:

%% - Returns a percent sign
%b - Binary number
%c - The character according to the ASCII value
%d - Signed decimal number (negative, zero or positive)
%e - Scientific notation using a lowercase (e.g. 1.2e+2)
%E - Scientific notation using a uppercase (e.g. 1.2E+2)
%u - Unsigned decimal number (equal to or greather than zero)
%f - Floating-point number (local settings aware)
%F - Floating-point number (not local settings aware)
%g - shorter of %e and %f
%G - shorter of %E and %f
%o - Octal number
%s - String
%x - Hexadecimal number (lowercase letters)
%X - Hexadecimal number (uppercase letters)
Additional format values. These are placed between the % and the letter (example %.2f):
*/

$names = 'Ashraful Islam';
$age = 30;
printf("Name =%s  \nAge = %d" ,$names, $age);
