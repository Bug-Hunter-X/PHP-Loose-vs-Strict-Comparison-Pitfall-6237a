function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

// This will not work as expected, because the strict comparison will fail if $a and $b are not of the same type.
$a = 0;
$b = '0';
var_dump(foo($a,$b)); // bool(false)

//This will work, since loose comparison will return true.
$a = 0;
$b = '0';
var_dump($a == $b); // bool(true)