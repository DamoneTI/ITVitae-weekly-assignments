<?php

//create a function without arguements
function nothing() {
}

//create a function with an arguement

function theoldstandy() {
  echo "Hello world<br>"; //theoldstandy will now echo Hello world when called
}

theoldstandy(); //calling the function

//returning values
function hello()  {
  return "Hello World<br>"; //this returns the value, but it is not shown
}

$txt = hello(); //the return value is assigned to $txt

echo hello(); //echo the function since the function doesn't have an echo arguement
echo $txt; //echo the variable

$aglobal = "I'm a global variable";

  function globalcaller() {
    $aglobal = "i'm not a global variable";
    $bglobal = "try to call me and you'll get nothing because I only excist in this function";
  }

  echo $aglobal;
  echo $bglobal;

  function countALL(&$count) {
    if (func_num_args() == 0) {
        die("You need to specify at least one argument");
    } else {
      $args = func_get_args();
      array_shift($args);

      foreach ($args as $arg) {
        $count += strlen($arg);
      }
    }
  }
  $count = 0;

  countALL($count, "foo", "bar", "baz");
 ?>
