<?php
// This is single line comment
/*
This is multiline comment
*/
//literals
'Chewbacca';
3.4;

//variables and assigning value to variable
//this is assignment operator =
$user_name="Chewbacca";
$gpa=3.4;
$gpp=3.4;


//increment or decrement
//print
echo $user_name;
echo '<br>';
echo $gpa;
echo '<br>';



echo ++$gpa;
echo '<br>';
echo --$gpa;
echo '<br>';




//concatenation
echo "My name is ". $user_name. " not Inigo";
echo '<br>';

//single code for literal string -if you put literal string and variable inside single code php engine does not recognize variable
echo 'My name is . $user_name.  not Inigo';
echo '<br>';

//double code for variable-if you put literal string and variable inside double code php engine does recognize variable
echo "My name is $user_name not Inigo";
echo '<br>';

//variable type is changed on the fly
$number=12345*67890;
echo $number;
echo '<br>';

echo substr($number, 3,1);
echo '<br>';

//constant-this is similar to variables except their value can not be changes once it is assigned
//Define("ROOT_LOC", "usr/local/www/");
//echo $ROOT_LOC;
//print using print function likes construct that takes single parameter and has return value rather that echo which is php construct
print($number);
echo '<br>';
var_dump($gpa==$gpp);

?>