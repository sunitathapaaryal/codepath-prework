<?php
//example 4-1
echo "sunita <br>";
echo "a: [". (20>9)."]<br>";
echo "b: [". (5==6)."]<br>";
echo "c: [". (1==0)."]<br>";
echo "d: [". (1==1)."]<br>";

$myname="Brian";
$myage=37;

echo "a: ". 73 ."<br>"; //numeric value
echo "a: ". "Hello" ."<br>"; //String literal
echo "a: ". False ."<br>"; //Constant literal
echo "a: ". $myname ."<br>"; //String variable
echo "a: ". $myage ."<br>"; //numeric variable

//Example 4-11 (Assignment associativity always moves from right to left)
$level=$score=$time=0;

//example 4-12
$month="March";
if($month=="March"){
	echo "It's spring time<br>";
	
	//Example 4-15
	$a=2; $b=3;
	if($a > $b) echo "$a is greater than $b <br>";
	if($a < $b) echo "$a is less than $b <br>";
	if($a >= $b) echo "$a is greater than or equal to than $b <br>";
	if($a <= $b) echo "$a is less than or equal to $b <br>";
	
}

/*AND //if both are true
OR  //if either one is true or both are true
XOR //if either one is true
NOT */

//example 4-16
$a=1;
$b=0;
echo($a AND $b). 'A <br>';
echo($a OR $b). 'B <br>';
echo($a XOR $b). 'C <br>';
echo !$a . 'D <br>';

//Example 4-19 and 4-20 and 4-21
$bank_balance=201;
$money=0;
$savings=25;
if($bank_balance<100){
	$money=1000;
	$bank_balance+=$money;
}
elseif($bank_balance>200){
	$savings+=100;
	$bank_balance-=100;
	
}
else{
	$savings+=50;
	$bank_balance-=50;	
}
echo $savings."<br>";
echo $bank_balance;

//Example 4-23
$page ='News';

switch($page){
	case "Home": 
	     echo "You selected Home <br>";
	     break;
	case "About": 
	     echo "You selected About <br>";
	     break;
	case "News": 
	     echo "You selected News <br>";
	     break;
	case "Login": 
	     echo "You selected News <br>";
	     break;
	case "Links": 
	    echo "You selected Links <br>";
	    break;	
}

//Example 4-26 Ternery operator
$fuel=1;
echo $fuel<=1? "Fill tank now": "There is enough fuel";
echo '<br>';

//Loop=while, do while , for
//While loop, proceed with the loop as long as condition is true

//Example 4-28
$fuel=10;
While($fuel>1){
	echo "There is enough fuel $fuel<br>";
	$fuel--;		
}

//Example 4-32
//do while
$count=1;
do{
echo "$count times 12 is ".$count*12;
echo '<br>';
}
while(++$count <=12);

//for loop-it allows the set up of variables as it enters the loop. contains initialization, condition and modification of expression.

//Example 4-34
for($count=1; $count<=12; ++$count){
	if ($count ==2 OR $count==5) continue;
	echo "counting using for loop $count multiply by 12 ". $count*12;
	echo '<br>';
	if($count==9) break;
	
}

?>