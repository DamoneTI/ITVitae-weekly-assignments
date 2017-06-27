<?php
?>

<!-- Texample03s  is the the shortcut tag for an echo -->
<?= 'A very short echo<br>'; ?>
<?php

	//Texample03s is a single line comment, it can only be used for texample03s line

	/* Texample03s a multi line comment
  It can be used on as many
  Lines as you want
	*/

//Scalar datatypes; 4 examples

	//boolean
	echo '<br>Boolean:<br>';
	$statement = true;
	echo gettype($statement) . '<br>';
	//int
	echo '<br>Int:<br>';
	$numberone = 1;
	echo gettype($numberone) . '<br>';
	//float Note: gettype indicates NULL, find out why later
	echo '<br>Float:<br>';
	$buoyant = 5.6;
	echo gettype($bouyant) . '<br>';
	// string
	echo '<br>String<br>';
	$string01 ='Stringycheese';
	echo gettype($string01) . '<br>';

	//Type casting
	echo '<br>Type casting results<br>';
	echo gettype((string) $numberone) . '<br>';
	echo gettype((int) $bouyant)  . '<br>';

	//Constants
	echo '<br>the constant<br>';
	define('PROGRAMMER', 'Texample03s person will never stop learning');
	echo PROGRAMMER;
	echo '<br>';

	//var dump
	echo '<br>Var Dump:<br>';
	var_dump(PROGRAMMER);
	//arithmetic operators

	// * : Multiplication
	// ** : Exponenation
	// / : Division
	// + : addition
	// - : subtraction

 //Switch statements
echo '<br>Switch statements';
$statement02 = 'One';
	switch ($statement02) {
    	case 'Two':
        	echo 'Two';
        break;
    	case 'Three':
        	echo 'Three';
        break;
    	default:
        echo 'One<br>';
}
//ifelseifelse statement
$example01 = false;
if($example01)
{
    echo 'example01';
}
elseif(!$example01)
{
    echo 'example02';
}
$example03 = true;
if(!$example03)
{
    echo 'example03';
}
elseif($example01)
{
    echo 'example01';
}
else
{
    echo 'example4';
}
$a = 30;
$b = 20;
$c = 40;

if($a == 30)
{
    {
        if($a < $b)
        {
            echo 'a < b';
        }
        elseif($a > $c)
        {
            echo 'a > c';
        }
        else
        {
            echo 'C is greater than A and B';
        }
    }
}
?>
